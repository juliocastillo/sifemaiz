<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ConPartidacontableAdmin extends AbstractAdmin {

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('id')
                ->add('fecha')
                ->add('numero')
                ->add('corrAnual')
                ->add('corrMensual')
                ->add('corrTipo')
                ->add('concepto')
                ->add('totalDebe')
                ->add('totalHaber')
                ->add('activo')
                ->add('partidaInicial')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('id')
                ->add('fecha')
                ->add('numero')
                ->add('corrAnual')
                ->add('corrMensual')
                ->add('corrTipo')
                ->add('concepto')
                ->add('totalDebe')
                ->add('totalHaber')
                ->add('activo')
                ->add('partidaInicial')
                ->add('_action', null, [
                    'actions' => [
                        'show' => [],
                        'edit' => [],
                        'delete' => [],
                    ],
                ])
        ;
    }

    protected function configureFormFields(FormMapper $formMapper) {
        $entity = $this->getSubject();   //obtiene el elemento seleccionado en un objeto
        $id = $entity->getId();
        $formMapper
                ->with('Partida', array('class' => 'col-md-6'))->end()
                ->with('Autogenerados', array('class' => 'col-md-6'))->end()
                ->with('Detalle', array('class' => 'col-md-12'))->end()
                ->with('Resumen', array('class' => 'col-md-4'))->end()
        ;
        $formMapper
                ->with('Partida')
                ->add('idTipoPartida', NULL, array(
                    'empty_value' => '...Seleccione...',
                    'label' => 'Tipo de partida',
                    'attr' => array('style' => 'width:300px'),
                ))
                ->add('fecha', null, array('label' => 'Fecha partida', 'data' => new \DateTime('today')))
                ->add('concepto','text')
                ->add('partidaInicial')
                ->add('activo')
                ->end()
                ->with('Autogenerados')
                ->add('numero', 'integer', array(
                    'read_only' => TRUE
                ))
                ->add('corrAnual', 'integer', array(
                    'read_only' => TRUE
                ))
                ->add('corrMensual', 'integer', array(
                    'read_only' => TRUE
                ))
                ->add('corrTipo', 'integer', array(
                    'read_only' => TRUE
                ))
                ->end()
                ->with('Detalle')
                ->add('conPartidacontableDetalle', 'sonata_type_collection', array(
                    'label' => 'Elemento'
                        ), array(
                    'edit' => 'inline',
                    'inline' => 'table'
                ))
                ->end()
                ->with('Resumen')
                ->add('totalDebe', NULL, array(
                    'read_only' => TRUE
                ))
                ->add('totalHaber', NULL, array(
                    'read_only' => TRUE
                ))
                ->end()
        ;
        if ($id) {  // cuando se edite el registro
            if ($entity->getActivo() == TRUE) { // si el registro esta activo
                $formMapper
                        ->with('Autogenerados')
                        ->add('activo', null, array(
                            'label' => 'Activo',
                            'required' => FALSE,
                            'attr' => array(
                                'checked' => 'checked'
                )));
            } else { // si el registro esta inactivo
                $formMapper
                        ->with('Autogenerados')
                        ->add('activo', null, array(
                            'label' => 'Activo',
                            'required' => FALSE
                ));
            }
        } else { // cuando se crea el registro
            $formMapper
                    ->with('Autogenerados')
                    ->add('activo', null, array(
                        'label' => 'Activo',
                        'required' => FALSE,
                        'attr' => array(
                            'checked' => 'checked'
            )));
        }
    }

    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('fecha')
                ->add('numero')
                ->add('corrAnual')
                ->add('corrMensual')
                ->add('corrTipo')
                ->add('concepto')
                ->add('totalDebe')
                ->add('totalHaber')
                ->add('activo')
                ->add('partidaInicial')
        ;
    }

    /*
     * Metodo que se ejecuta antes de realizar una insercion.
     * Recibe como parametro una entidad;
     * con los valores del formulario.
     *
     */

    public function prePersist($val) {
        $debe = $haber = 0;
        //Guardar variables de sessión empresa
        // y año contable
        $empresaId = $this->getConfigurationPool()->getContainer()->get('session')->get('empresaId');
        $em = $this->getConfigurationPool()->getContainer()->get('doctrine')->getEntityManager();
        $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                ->findOneById($empresaId);
        $anioId = $this->getConfigurationPool()->getContainer()->get('session')->get('anioId')->getId();
        $anio = $em->getRepository('NinfacContaBundle:CtlAnio')
                ->findOneById($anioId);
        $mesId = $this->getConfigurationPool()->getContainer()->get('session')->get('mesId');
        $val->setIdEmpresa($empresa);
        $val->setIdAnio($anio);
        //Guardar datos de auditoria
        $userId = $this->getConfigurationPool()
                ->getContainer()->get('security.token_storage')
                ->getToken()->getUser()
                ->getId();
        $val->setCreatedBy($userId);
        $val->setCreatedAt(new \DateTime());

        //Campos de auditoria de DETALLE
        foreach ($val->getConPartidacontableDetalle() as $objDetalle) {
            // calculando subtotales
            $debe = $debe + $objDetalle->getDebe($val);
            $haber = $haber + $objDetalle->getHaber($val);
            // llenando datos de deltalle
            $val->getId();
            $objDetalle->setIdPartidacontable($val);
            $objDetalle->setIdEmpresa($empresa);
            $objDetalle->setIdAnio($anio);
            //llendando variables de auditoria DETALLE
            $objDetalle->setCreatedBy($userId);
            $objDetalle->setCreatedAt(new \DateTime());
        }
        $val->setTotalDebe($debe);
        $val->setTotalHaber($haber);

        // cargar los últimos numeros de partidas
        $ultimaPartidaAnual = $em->getRepository('NinfacContaBundle:ConPartidacontable')
                ->ultimaNumeroAnual($empresaId, $anioId);
        if ($ultimaPartidaAnual) {
            $val->setCorrAnual($ultimaPartidaAnual[0]['corr_anual']+1);
        } else {
            $val->setCorrAnual(1);
        }

        $ultimaPartidaMensual = $em->getRepository('NinfacContaBundle:ConPartidacontable')
                ->ultimaNumeroMensual($empresaId, $anioId, $mesId);
        if ($ultimaPartidaMensual) {
            $val->setCorrMensual($ultimaPartidaMensual[0]['corr_mensual']+1);
        } else {
            $val->setCorrMensual(1);
        }

        $ultimaPartidaTipo = $em->getRepository('NinfacContaBundle:ConPartidacontable')
                ->ultimaNumeroTipo($empresaId, $anioId, $mesId, $val->getIdTipoPartida()->getId());
        if ($ultimaPartidaTipo) {
            $val->setCorrTipo($ultimaPartidaTipo[0]['corr_tipo']+1);
        } else {
            $val->setCorrTipo(1);
        }
     
        $ultimaPartida = $em->getRepository('NinfacContaBundle:ConPartidacontable')
                ->ultimaPartida($empresaId);
        if ($ultimaPartida) {
            $val->setNumero($ultimaPartida[0]['numero']+1);
        } else {
            $val->setNumero(1);
        }
    }

    /*
     * Metodo que se ejecuta antes de realizar una actualizacion.
     * Recibe como parametro una entidad;
     * con los valores del formulario.
     *
     */

    public function preUpdate($val) {
        $debe = $haber = 0;
        //Guardar variables de sessión empresa
        // y año contable
        $empresaId = $this->getConfigurationPool()->getContainer()->get('session')->get('empresaId');
        $em = $this->getConfigurationPool()->getContainer()->get('doctrine')->getEntityManager();
        $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                ->findOneById($empresaId);
        $anioId = $this->getConfigurationPool()->getContainer()->get('session')->get('anioId')->getId();
        $anio = $em->getRepository('NinfacContaBundle:CtlAnio')
                ->findOneById($anioId);
        $val->setIdEmpresa($empresa);
        $val->setIdAnio($anio);
        //Guardar datos de auditoria
        $userId = $this->getConfigurationPool()
                ->getContainer()->get('security.token_storage')
                ->getToken()->getUser()
                ->getId();
        $val->setUpdatedBy($userId);
        $val->setUpdatedAt(new \DateTime());
        //Campos de auditoria de DETALLE
        foreach ($val->getConPartidacontableDetalle() as $objDetalle) {
            // calculando subtotales
            $debe = $debe + $objDetalle->getDebe($val);
            $haber = $haber + $objDetalle->getHaber($val);
            // llenando datos de deltalle
            $val->getId();
            $objDetalle->setIdPartidacontable($val);
            $objDetalle->setIdEmpresa($empresa);
            $objDetalle->setIdAnio($anio);
            //llendando variables de auditoria DETALLE
            $objDetalle->setCreatedBy($userId);
            $objDetalle->setCreatedAt(new \DateTime());
        }
        $val->setTotalDebe($debe);
        $val->setTotalHaber($haber);
    }

}
