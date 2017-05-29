<?php

namespace Ninfac\ContaBundle\Controller;

use Ninfac\ContaBundle\Entity\ConPartidacontable;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContaController extends Controller
{
    /**
     *
     * @author julio castillo
     * analista programador
     */
    /**
     * @Route("/conta/partidacontable/edit", name="conta_partidacontable_edit", options={"expose"=true})
     * @Method("GET")
     */
    public function contaPartidacontableEditAction(Request $request)
    {

        $task = new ConPartidacontable();
        $task->setNumero(25);
        $task->setCreatedAt(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('numero', TextType::class)
            ->add('createdAt', DateType::class)
            ->add('save', SubmitType::class, array('label' => 'Guardar'))
            ->getForm();

        return $this->render('NinfacContaBundle:Conta:partidacontable_edit.html.twig', array(
            'form' => $form->createView(),
            'titulo' => 'Partida contable',
            'icon'   => 'glyphicon glyphicon-usd',
            'with'   => '860px'
        ));
        // $em = $this->getDoctrine()->getEntityManager();
        // $empresas = $em->getRepository('NinfacContaBundle:CtlEmpresa')->findBy(array('activo'=>true));
        // return $this->render('NinfacContaBundle:Conta:partidacontable_edit.html.twig', array(
        //     'titulo' => 'Partida contable',
        //     'icon'   => 'glyphicon glyphicon-usd',
        //     'with'   => '860px'
        // ));
    }
}
