<?php

namespace Ninfac\ContaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class HerramientasController extends Controller
{
    /**
     *
     * @author julio castillo
     * analista programador
     */
    /**
     * @Route("/conta/empresa/open", name="conta_empresa_open", options={"expose"=true})
     * @Method("GET")
     */
    public function contaEmpresaOpen()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $empresas = $em->getRepository('NinfacContaBundle:CtlEmpresa')->findBy(array('activo'=>true));
        return $this->render('NinfacContaBundle:Herramientas:empresa_abrir.html.twig', array(
            'empresas' => $empresas
        ));
    }


    /**
     *
     * @author julio castillo
     * analista programador
     */
    /**
     * @Route("/conta/periodo/select", name="conta_periodo_select", options={"expose"=true})
     * @Method("GET")
     */
    public function contaPeriodoSelect()
    {
        $empresa_id = $this->get('session')->get('empresa_id');
        // var_dump($empresa_id); exit();
        $em = $this->getDoctrine()->getEntityManager();
        $periodos = $em->getRepository('NinfacContaBundle:CtlPeriodocontable')->findBy(array('idEmpresa'=>$empresa_id, 'activo'=>true));
        return $this->render('NinfacContaBundle:Herramientas:periodo_seleccionar.html.twig', array(
            'periodos' => $periodos
        ));
    }
}
