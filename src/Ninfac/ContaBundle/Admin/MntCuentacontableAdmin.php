<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MntCuentacontableAdmin extends AbstractAdmin {

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('cuenta')
                ->add('nombre')
                ->add('activo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('cuenta')
                ->add('nombre')
                ->add('idCuentacontableDepende', NULL, array(
                    'label' => 'Cuenta de la que depende'
                ))
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
                ->add('cuenta')
                ->add('nombre')
                ->add('idTipoCuentacontable', NULL, array(
                    'label' => 'Tipo de cuenta'
                ))
                ->add('idCuentacontableDepende', NULL, array(
                    'label' => 'Cuenta de la que depende'
                ))
                ->add('idNivelCuentacontable', NULL, array(
                    'label' => 'Nivel de la cuenta'
                ))
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
                ->add('cuenta')
                ->add('nombre')
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
        $userId = $this->getConfigurationPool()
                ->getContainer()->get('security.token_storage')
                ->getToken()->getUser()
                ->getId();

        $val->setUpdatedBy($userId);
        $val->setUpdatedAt(new \DateTime());
    }

}
