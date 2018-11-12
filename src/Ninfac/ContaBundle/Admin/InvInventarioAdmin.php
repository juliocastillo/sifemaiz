<?php

namespace Ninfac\ContaBundle\Admin;

use Ninfac\ContaBundle\Entity\CtlTipoMovimiento;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class InvInventarioAdmin extends AbstractAdmin {

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('fecha')
                ->add('numeroDocumento')
                ->add('comentario')
        ;
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('fecha', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'd/m/Y',
                    'attr' => array('style' => 'width:100px', 'maxlength' => '10'),
                ))
                ->add('numeroDocumento')
                ->add('comentario')
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
        $formMapper
                ->with('Origen', array('class' => 'col-md-6'))->end()
                ->with('Destino', array('class' => 'col-md-6'))->end()
        ;
        $formMapper
                ->with('Origen')
                ->add('idClienteBodega')
//                ->add('idTipoMovimiento1', ChoiceType::class, array(
//                    "mapped" => false,
//                    "multiple" => false,
//                    "attr" => array(
//                        'class' => "form-control"
//                    ),
//                    'choices' => array(
//                        'Blogger' => 'ROLE_BLOGGER',
//                        'Administrator' => 'ROLE_ADMIN'
//                    )
//                ))
                ->add('idTipoMovimiento', EntityType::class, array(
                    "mapped" => false,
                    'class' => CtlTipoMovimiento::class,
                    'choice_label' => 'nombre',
                    "multiple" => false,
                    'empty_value' => '...Seleccione...',
//                    "expanded" => true
                ))
                ->add('idMotivoMovimiento')
                ->add('idTipoDocumento')
                ->end()
        ;
        $formMapper
                ->with('Destino')
                ->add('idClienteOrigenTraslado')
                ->add('fecha', null, array(
                    'label' => 'Fecha',
                    'widget' => 'single_text', // un sólo input para la fecha, no tres.
                    'format' => 'dd/MM/y',
                    'attr' => array(
                        'data-date-end-date' => '0d',
                        'class' => 'bootstrap-datepicker',
                        'style' => 'width:200px', 'maxlength' => '25'
            )))
                ->add('numeroDocumento')
                ->add('comentario')
                ->end()
                ->with('Elementos del Catalogo')
                ->add('inventarioDetalle', 'sonata_type_collection', array('label' => 'Elemento'), array('edit' => 'inline', 'inline' => 'table'))
                ->end()
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('fecha')
                ->add('numeroDocumento')
                ->add('comentario')
        ;
    }

}
