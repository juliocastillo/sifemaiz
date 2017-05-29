<?php

namespace Ninfac\ContaBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

use Sonata\AdminBundle\Route\RouteCollection;

use Ninfac\ContaBundle\Entity\CtlPeriodocontable;

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
            ->add('consolidadora', NULL, array(
                'label' => 'Empresa consolidadora'
            ))
            ->add('idAnioinicio',null, array(
                'label' => 'Año de inicio en el sistema'
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
    * Recibe como parametro una entidad;
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
    }


    /*
    * Metodo que se ejecuta antes de realizar una insercion.
    * Recibe como parametro una entidad;
    * con los valores del formulario.
    *
    */

    public function postPersist($val) {

        /*
         * creando el periodo contable mensual
         */
        $em = $this->getConfigurationPool()->getContainer()->get('doctrine')->getEntityManager();
        $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
            ->find($val);
        $Anioinicio = $val->getIdAnioinicio();

        for ($i=1;$i<=12;$i++){
            $PeriodoContable = new CtlPeriodocontable();
            $mes = $em->getRepository('NinfacContaBundle:CtlMes')
                    ->find($i);
            $PeriodoContable->setIdAnio($Anioinicio);
            $PeriodoContable->setIdEmpresa($empresa);
            $PeriodoContable->setIdMes($mes);
            $PeriodoContable->setActivo(FALSE);
            $em->persist($PeriodoContable);
        }
        $em->flush();
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
