<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MntPrecioProductoAdmin extends AbstractAdmin
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
            ->add('idTipoPrecio', null, array('label' => 'Tipo de precio',
                'attr' => array('style' => 'width:500px'),
                ))
            ->add('precio', null, array('label' => 'Precio (calculo automatico)',
                'read_only'=>true,
                'attr' => array('style' => 'width:300px')))
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
    }
}
