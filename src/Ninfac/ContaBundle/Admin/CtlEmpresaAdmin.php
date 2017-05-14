<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Sonata\AdminBundle\Route\RouteCollection;

class CtlEmpresaAdmin extends AbstractAdmin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('origen')
            ->add('nombre')
            ->add('registro')
            ->add('nit')
            ->add('consolidadora')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('origen')
            ->add('nombre')
            ->add('registro')
            ->add('nit')
            ->add('consolidadora')
            ->add('activo')
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
    protected function configureFormFields(FormMapper $formMapper)
    {
        $entity = $this->getSubject();   //obtiene el elemento seleccionado en un objeto
        $id = $entity->getId();

        $formMapper
            ->add('origen')
            ->add('nombre')
            ->add('registro')
            ->add('nit')
            ->add('consolidadora');
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
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('origen')
            ->add('nombre')
            ->add('registro')
            ->add('nit')
            ->add('consolidadora')
            ->add('activo')
        ;
    }

    /*
       * Metodo que se ejecuta antes de realizar una insercion.
       * Recibe como parametro una entidad; en este caso de tipo CtlPais
       * con los valores del formulario.
       *
       */

      public function prePersist($val) {
          $userId = $this->getConfigurationPool()
                         ->getContainer()->get('security.token_storage')
                         ->getToken()->getUser()
                         ->getId();
          $val->setCreatedBy($userId);
          $val->setCreatedAt(new \DateTime());

        //   $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        //   $val->setUserAdd($user);
        //   $val->setDateAdd(new \DateTime());
      }

      /*
       * Metodo que se ejecuta antes de realizar una actualizacion.
       * Recibe como parametro una entidad; en este caso de tipo CtlPais
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

        //   $user = $this->getConfigurationPool()->getContainer()->get('security.context')->getToken()->getUser();
        //   $val->setUserMod($user);
        //   $val->setDateMod(new \DateTime());
      }




}
