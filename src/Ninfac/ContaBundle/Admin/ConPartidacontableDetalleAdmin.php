<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ConPartidacontableDetalleAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
    }

    protected function configureListFields(ListMapper $listMapper)
    {
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('idCuentacontable', NULL, array(
                    'empty_value' => '...Seleccione...',
                    'label' => 'Cuenta',
                    'attr' => array('style'=>'width:300px'),
                ))
            ->add('concepto', 'text', array(
                            'attr' => array(
                                'style' => 'width:400px', 
                                'maxlength' => '25')))
            ->add('debe', null, array(
                            'attr' => array(
                                'style' => 'width:100px', 
                                'maxlength' => '25'
                                )))
            ->add('haber', null, array(
                            'attr' => array(
                                'style' => 'width:100px', 
                                'maxlength' => '25'
                                )))
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
    }
}
