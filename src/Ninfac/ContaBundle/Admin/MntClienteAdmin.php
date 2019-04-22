<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Ninfac\ContaBundle\Entity\MntCuentacontable;

class MntClienteAdmin extends AbstractAdmin {

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('consignatario')
                ->add('nombre')
                ->add('razonSocial')
                ->add('giro')
                ->add('registro')
                ->add('nit')
                ->add('dui')
                ->add('direccion')
                ->add('telefono')
                ->add('email')
                ->add('exento')
                ->add('extranjero')
                ->add('contacto')
                ->add('activo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('consignatario')
                ->add('nombre')
                ->add('razonSocial')
                ->add('giro')
                ->add('registro')
                ->add('extranjero')
                ->add('contacto')
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
                ->with('Geograficos', array('class' => 'col-md-6'))->end()
        ;
        $formMapper
                ->with('Generalidades')
                ->add('consignatario', null, array('label' => 'Cliente consignatario (bodega)'))
                ->add('nombre')
                ->add('razonSocial')
                ->add('giro')
                ->add('registro')
                ->add('nit')
                ->add('dui')
                ->add('exento')
                ->add('idCuentacontable', null, array('label' => 'Cuenta contable'))
                ->add('idEmpleadoVendedor', null, array('label' => 'Empleado vendedor asignado'))
                ->end()
                ->with('Geograficos')
                ->add('extranjero')
                ->add('idPais')
                ->add('idMunicipio')
                ->add('direccion')
                ->add('telefono')
                ->add('email', 'email')
                ->add('contacto')
                ->add('idTipoPrecio', null, array('label' => 'Tipo de precio'))
                ->add('idTipoDocumento', null, array('label' => 'Tipo de documento'))
                ->add('activo')
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
                ->add('consignatario')
                ->add('nombre')
                ->add('razonSocial')
                ->add('giro')
                ->add('registro')
                ->add('nit')
                ->add('dui')
                ->add('direccion')
                ->add('telefono')
                ->add('email')
                ->add('exento')
                ->add('extranjero')
                ->add('contacto')
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
