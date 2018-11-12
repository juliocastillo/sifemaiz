<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class InvInventarioDetalleAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {       
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('idProducto')
            ->add('cantidad')
            ->add('precioVenta')
            ->add('total')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
    }
}
