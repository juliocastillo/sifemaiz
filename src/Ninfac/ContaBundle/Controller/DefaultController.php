<?php

namespace Ninfac\ContaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="index", options={"expose"=true})
     * @Method("GET")
     */
    /* utilizado desplegar nombre de la empresa.
     *
     */
    public function indexAction(Request $request) {
        if ($this->get('session')->get('empresaId') == NULL) { //abrir 
            return $this->redirectToRoute('conta_empresa_select');
        }
        return $this->render('NinfacContaBundle:Default:index.html.twig');
    }
}
