<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MntEmpleadoAdmin extends AbstractAdmin {

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('nombreDui')
                ->add('apellidoDui')
                ->add('nombreIsss')
                ->add('apellidoIsss')
                ->add('direccion')
                ->add('idSexo', null, (array('label' => 'Sexo')))
                ->add('telefono')
                ->add('email')
                ->add('fechaNac')
                ->add('dui')
                ->add('isss')
                ->add('nup')
                ->add('nit')
                ->add('sueldoBase')
                ->add('horasLaborales')
                ->add('cuentaBancaria')
                ->add('personaEmergencia')
                ->add('parentezcoEmergencia')
                ->add('telefonoEmergencia')
                ->add('profesion')
                ->add('numeroLicenciaConducir')
                ->add('claseLicencia')
                ->add('fechaIngreso')
                ->add('aplicaIsss')
                ->add('comentario')
                ->add('activo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('nombreDui')
                ->add('apellidoDui')
                ->add('fechaIngreso', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'd/m/Y',
                    'attr' => array('style' => 'width:100px', 'maxlength' => '10')))
                ->add('activo')
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
                ->with('Datos personales', array('class' => 'col-md-6'))->end()
                ->with('Otros', array('class' => 'col-md-6'))->end()
        ;
        $formMapper
                ->with('Datos personales')
                ->add('nombreDui')
                ->add('apellidoDui')
                ->add('nombreIsss')
                ->add('apellidoIsss')
                ->add('idSexo', null, array('label' => 'Sexo'))
                ->add('idMunicipio', null, array('label' => 'Municipio de residencia'))
                ->add('direccion')
                ->add('telefono')
                ->add('email')
                ->add('fechaNac', null, array(
                    'label' => 'Fecha de nacimiento',
                    'widget' => 'single_text', // un sólo input para la fecha, no tres.
                    'format' => 'dd/MM/y',
                    'attr' => array(
                        'class' => 'bootstrap-datepicker',
                        'data-date-end-date' => '0d',
                        'style' => 'width:200px', 'maxlength' => '25'
            )))
                ->add('idEstadocivil', null, array('label' => 'Estado civil'))
                ->add('idNivelestudio', null, array('label' => 'Nivel de estudio'))
                ->add('profesion')
                ->add('dui')
                ->add('isss')
                ->add('nup')
                ->add('nit')
                ->end()
                ->with('Otros')
                ->add('idCargo', 'sonata_type_model_list', array(// permitir buscar un item de un catalogo
                    'label' => 'Cargo del empleado',
                    'btn_add' => 'Agregar',
                    'btn_list' => 'Buscar',
                    'btn_delete' => FALSE,
                    'csrf_token_id' => 'lista.html.twig',
                    'btn_catalogue' => 'SonataNewBundle'
                        ), array(
                    'placeholder' => '*****'
                ))
                ->add('sueldoBase')
                ->add('horasLaborales')
                ->add('idBanco', 'sonata_type_model_list', array(// permitir buscar un item de un catalogo
                    'label' => 'Banco',
                    'btn_add' => 'Agregar',
                    'btn_list' => 'Buscar',
                    'btn_delete' => FALSE,
                    'csrf_token_id' => 'lista.html.twig',
                    'btn_catalogue' => 'SonataNewBundle'
                        ), array(
                    'placeholder' => '*****'
                ))
                ->add('cuentaBancaria')
                ->add('idOficina', 'sonata_type_model_list', array(// permitir buscar un item de un catalogo
                    'label' => 'Oficina',
                    'btn_add' => 'Agregar',
                    'btn_list' => 'Buscar',
                    'btn_delete' => FALSE,
                    'csrf_token_id' => 'lista.html.twig',
                    'btn_catalogue' => 'SonataNewBundle'
                        ), array(
                    'placeholder' => '*****'
                ))
                ->add('idTipocontrato', 'sonata_type_model_list', array(// permitir buscar un item de un catalogo
                    'label' => 'Tipo de contrato',
                    'btn_add' => 'Agregar',
                    'btn_list' => 'Buscar',
                    'btn_delete' => FALSE,
                    'csrf_token_id' => 'lista.html.twig',
                    'btn_catalogue' => 'SonataNewBundle'
                        ), array(
                    'placeholder' => '*****'
                ))
                ->add('personaEmergencia')
                ->add('parentezcoEmergencia')
                ->add('telefonoEmergencia')
                ->add('numeroLicenciaConducir')
                ->add('claseLicencia')
                ->add('fechaIngreso', null, array(
                    'label' => 'Fecha de Ingreso a la empresa',
                    'widget' => 'single_text', // un sólo input para la fecha, no tres.
                    'format' => 'dd/MM/y',
                    'attr' => array(
                        'class' => 'bootstrap-datepicker',
                        'data-date-end-date' => '0d',
                        'style' => 'width:200px', 'maxlength' => '25'
            )))
                ->add('aplicaIsss')
                ->add('comentario')
        ;
        if ($id) {  // cuando se edite el registro
            if ($entity->getActivo() == TRUE) { // si el registro esta activo
                $formMapper
                        ->add('activo', null, array('label' => 'Activo', 'required' => FALSE, 'attr' => array('checked' => 'checked')));
            } else { // si el registro esta inactivo
                $formMapper
                        ->add('activo', null, array('label' => 'Activo', 'required' => FALSE));
            }
        } else { // cuando se crea el registro
            $formMapper
                    ->add('activo', null, array('label' => 'Activo', 'required' => FALSE, 'attr' => array('checked' => 'checked')));
        }
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('nombreDui')
                ->add('apellidoDui')
                ->add('nombreIsss')
                ->add('apellidoIsss')
                ->add('direccion')
                ->add('telefono')
                ->add('email')
                ->add('fechaNac')
                ->add('dui')
                ->add('isss')
                ->add('nup')
                ->add('nit')
                ->add('sueldoBase')
                ->add('horasLaborales')
                ->add('cuentaBancaria')
                ->add('personaEmergencia')
                ->add('parentezcoEmergencia')
                ->add('telefonoEmergencia')
                ->add('profesion')
                ->add('numeroLicenciaConducir')
                ->add('claseLicencia')
                ->add('fechaIngreso')
                ->add('aplicaIsss')
                ->add('comentario')
                ->add('activo')
        ;
    }

    /*
     * Metodo que se ejecuta antes de realizar una insercion.
     * Recibe como parametro una entidad;
     * con los valores del formulario.
     *
     */

    public function prePersist($val) {
        //Guardar variables de sessión empresa
        // y año contable
        $empresaId = $this->getConfigurationPool()->getContainer()->get('session')->get('empresaId');
        $em = $this->getConfigurationPool()->getContainer()->get('doctrine')->getEntityManager();
        $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                ->findOneById($empresaId);
        $val->setIdEmpresa($empresa);
        //Guardar datos de auditoria
        $userId = $this->getConfigurationPool()
                ->getContainer()->get('security.token_storage')
                ->getToken()->getUser()
                ->getId();
        $val->setCreatedBy($userId);
        $val->setCreatedAt(new \DateTime());
    }

    /*
     * Metodo que se ejecuta antes de realizar una actualizacion.
     * Recibe como parametro una entidad;
     * con los valores del formulario.
     *
     */

    public function preUpdate($val) {
//        ini_set('xdebug.var_display_max_depth', -1);
//        ini_set('xdebug.var_display_max_children', -1);
//        ini_set('xdebug.var_display_max_data', -1);
        //Guardar variables de sessión empresa
        // y año contable
        $empresaId = $this->getConfigurationPool()->getContainer()->get('session')->get('empresaId');
        $em = $this->getConfigurationPool()->getContainer()->get('doctrine')->getEntityManager();
        $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                ->findOneById($empresaId);
        $val->setIdEmpresa($empresa);
        //Guardar datos de auditoria
        $userId = $this->getConfigurationPool()
                ->getContainer()->get('security.token_storage')
                ->getToken()->getUser()
                ->getId();
        $val->setUpdatedBy($userId);
        $val->setUpdatedAt(new \DateTime());
    }

}
