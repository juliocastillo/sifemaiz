<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CtlPeriodocontableAdmin extends AbstractAdmin {

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('idEmpresa', null, array(
                    'label' => 'Empresa'
                        )
                )
                ->add('idAnio', null, array(
                    'label' => 'Año'
                        )
                )
                ->add('idMes', null, array(
                    'label' => 'Mes'
                        )
                )
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper) {
        $listMapper
                ->add('idAnio')
                ->add('idMes')
                ->add('activo', NULL, array('editable' => TRUE))
                ->add('idEmpresa')
                ->add('_action', null, array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    ),
                ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper) {
        $entity = $this->getSubject();   //obtiene el elemento seleccionado en un objeto
        $id = $entity->getId();

        $formMapper
                ->add('idEmpresa', null, array(
                    'label' => 'Empresa'
                        )
                )
                ->add('idAnio', null, array(
                    'label' => 'Año'
                        )
                )
                ->add('idMes', null, array(
                    'label' => 'Mes'
                        )
                )

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

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper) {
        $showMapper
                ->add('id')
                ->add('idAnio')
                ->add('idMes')
        ;
    }

    /*
     * Metodo que se ejecuta antes de realizar una insercion.
     * Recibe como parametro una entidad;
     * con los valores del formulario.
     *
     */

    public function prePersist($val) {
        $em = $this->getConfigurationPool()->getContainer()->get('doctrine')->getEntityManager();
        $empresaId = $this->getRequest()->getSession()->get('empresaId');
//          var_dump($empresaId);exit();
        $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                ->find($empresaId);
        $val->setIdEmpresa($empresa);
    }

}
