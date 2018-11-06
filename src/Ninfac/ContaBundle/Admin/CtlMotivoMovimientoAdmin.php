<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CtlMotivoMovimientoAdmin extends AbstractAdmin {

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('nombre')
                ->add('idTipoMovimiento')
                ->add('activo')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('nombre')
                ->add('idTipoMovimiento')
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
                ->add('nombre')
                ->add('idTipoMovimiento')                
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
                ->add('nombre')
                ->add('idTipoMovimiento')
                ->add('activo')
        ;
    }

}
