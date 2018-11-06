<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MntProductoAdmin extends AbstractAdmin {

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('codigo')
                ->add('nombre')
                ->add('exento')
                ->add('minimo')
                ->add('maximo')
                ->add('enPromocion')
                ->add('pistola')
                ->add('activo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('codigo')
                ->add('nombre')
                ->add('exento')
                ->add('minimo')
                ->add('maximo')
                ->add('enPromocion')
                ->add('pistola')
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
                ->with('Generalidades', array('class' => 'col-md-6'))->end()
                ->with('Listados', array('class' => 'col-md-6'))->end()
                ->with('Detalle de precios', array('class' => 'col-md-12'))->end()
        ;

        $formMapper
                ->with('Generalidades')
                ->add('codigo')
                ->add('nombre')
                ->add('idPresentacion', 'sonata_type_model_list', array(// permitir buscar un item de un catalogo
                    'label' => 'Presentacion',
                    'btn_add' => 'Agregar',
                    'btn_list' => 'Buscar',
                    'btn_delete' => FALSE,
                    'csrf_token_id' => 'lista.html.twig',
                    'btn_catalogue' => 'SonataNewBundle'
                        ), array(
                    'placeholder' => '*****'
                ))
                ->add('minimo')
                ->add('maximo')
                ->add('precioVenta')
                ->end()
        ;
        if ($id) {  // cuando se edite el registro
            if ($entity->getActivo() == TRUE) { // si el registro esta activo
                $formMapper
                        ->with('Listados')
                        ->add('activo', null, array('label' => 'Activo', 'required' => FALSE, 'attr' => array('checked' => 'checked')));
            } else { // si el registro esta inactivo
                $formMapper
                        ->with('Listados')
                        ->add('activo', null, array('label' => 'Activo', 'required' => FALSE));
            }
        } else { // cuando se crea el registro
            $formMapper
                    ->with('Listados')
                    ->add('activo', null, array('label' => 'Producto activo', 'required' => FALSE, 'attr' => array('checked' => 'checked')));
        }
        $formMapper
                ->add('idSubgrupo', 'sonata_type_model_list', array(// permitir buscar un item de un catalogo
                    'label' => 'Sub-grupo',
                    'btn_add' => 'Agregar',
                    'btn_list' => 'Buscar',
                    'btn_delete' => FALSE,
                    'csrf_token_id' => 'lista.html.twig',
                    'btn_catalogue' => 'SonataNewBundle'
                        ), array(
                    'placeholder' => '*****'
                ))
                ->add('idEditorial', 'sonata_type_model_list', array(// permitir buscar un item de un catalogo
                    'label' => 'Editorial',
                    'btn_add' => 'Agregar',
                    'btn_list' => 'Buscar',
                    'btn_delete' => FALSE,
                    'csrf_token_id' => 'lista.html.twig',
                    'btn_catalogue' => 'SonataNewBundle'
                        ), array(
                    'placeholder' => '*****'
                ))
                ->add('idMarca', 'sonata_type_model_list', array(// permitir buscar un item de un catalogo
                    'label' => 'Marca',
                    'btn_add' => 'Agregar',
                    'btn_list' => 'Buscar',
                    'btn_delete' => FALSE,
                    'csrf_token_id' => 'lista.html.twig',
                    'btn_catalogue' => 'SonataNewBundle'
                        ), array(
                    'placeholder' => '*****'
                ))
                ->add('exento')
                ->add('enPromocion')
                ->add('pistola')

//                ->add('foto', 'file', array('required' => false))
                ->end()
                ->with('Detalle de precios')
                ->add('precioProducto', 'sonata_type_collection', array('label' => 'Tipo de precio'), array('edit' => 'inline', 'inline' => 'table'))
                ->end()
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('codigo')
                ->add('nombre')
                ->add('exento')
                ->add('minimo')
                ->add('maximo')
                ->add('enPromocion')
                ->add('pistola')
                ->add('foto')
                ->add('activo')
                ->add('createdBy')
                ->add('createdAt')
                ->add('updatedBy')
                ->add('updatedAt')
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

        //Campos de auditoria de DETALLE
        $primerPrecioCalculado = (float) $val->getPrecioVenta();
        foreach ($val->getPrecioProducto() as $objDetalle) {
            //calculo de precio
            $porcentajeDescuento = (integer) $objDetalle->getIdTipoPrecio()->getPorcentajeDescuento();
            $nuevoPrecio = $primerPrecioCalculado - ($primerPrecioCalculado * ($porcentajeDescuento / 100));
            // llenando datos de deltalle
            $objDetalle->setIdProducto($val);
            $objDetalle->setIdEmpresa($empresa);
            $objDetalle->setPrecio($nuevoPrecio);
            //llendando variables de auditoria DETALLE
            $objDetalle->setCreatedBy($userId);
            $objDetalle->setCreatedAt(new \DateTime());
        }
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

        //Campos de auditoria de DETALLE
        $primerPrecioCalculado = (float) $val->getPrecioVenta();
        foreach ($val->getPrecioProducto() as $objDetalle) {

            //calculo de precio
            $porcentajeDescuento = (integer) $objDetalle->getIdTipoPrecio()->getPorcentajeDescuento();
            $nuevoPrecio = $primerPrecioCalculado - ($primerPrecioCalculado * ($porcentajeDescuento / 100));
            // llenando datos de deltalle
            $objDetalle->setIdProducto($val);
            $objDetalle->setIdEmpresa($empresa);
            $objDetalle->setPrecio($nuevoPrecio);

            if ($objDetalle->getId() == NULL) {
                $objDetalle->setCreatedBy($userId);
                $objDetalle->setCreatedAt(new \DateTime());
            } else {
                //llendando variables de auditoria DETALLE
                $objDetalle->setUpdatedBy($userId);
                $objDetalle->setUpdatedAt(new \DateTime());
            }
        }
    }

}
