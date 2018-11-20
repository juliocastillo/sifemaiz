<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class MntEmpleadoAdmin extends AbstractAdmin
{
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
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
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
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
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
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
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
        ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
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
            ->add('createdBy')
            ->add('createdAt')
            ->add('updatedBy')
            ->add('updatedAt')
        ;
    }
}
