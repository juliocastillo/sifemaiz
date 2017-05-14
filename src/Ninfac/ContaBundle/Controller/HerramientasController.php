<?php

namespace Ninfac\ContaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HerramientasController extends Controller
{
    /**
     *
     * @author julio castillo
     * analista programador
     */
    /**
     * @Route("/conta/empresa/select", name="conta_empresa_select", options={"expose"=true})
     * @Method("GET")
     */
    public function contaEmpresaSelect()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $empresas = $em->getRepository('NinfacContaBundle:CtlEmpresa')->findBy(array('activo'=>true));
        return $this->render('NinfacContaBundle:Empresa:seleccionar_empresa.html.twig', array(
            'empresas' => $empresas
        ));
    }
}
