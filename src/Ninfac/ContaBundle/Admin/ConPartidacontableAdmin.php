<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ConPartidacontableAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
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

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
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

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
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

    protected function configureShowFields(ShowMapper $showMapper)
    {
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
}
