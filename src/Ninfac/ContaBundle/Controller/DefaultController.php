<?php

namespace Ninfac\ContaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index", options={"expose"=true})
     * @Method("GET")
     */
     /* utilizado desplegar nombre de la empresa.
      *
      */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $empresa_id = $request->get('empresa_id');
        $periodo_id = $request->get('periodo_id');
        if ($empresa_id == NULL) // entrar por primera vez
        {
            // abrir empresa consolidadora por default
            $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                          ->findOneBy(array('consolidadora' => TRUE));
            if ($empresa){ //si la consulta retorna una empresa consolidadora
              $this->get('session')->set('empresa_id', $empresa->getId());
              $this->get('session')->set('empresa_nombre', $empresa->getNombre());
            } else { //si la consulta no retorne ninguna empresa.
              $this->get('session')->set('empresa_id', NULL);
              $this->get('session')->set('empresa_nombre', 'Sin nombre');
            }
        }
        else
        { // abrir la empresa solicitada
            $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                          ->find($empresa_id);
            $this->get('session')->set('empresa_id', $empresa->getId());
            $this->get('session')->set('empresa_nombre', $empresa->getNombre());
            if ($periodo_id == NULL) //Reset periodo contable
            {
                $this->get('session')->set('periodo_id', NULL);
            }
            else // seleccionar periodo contable
            {
                $this->get('session')->set('periodo_id', (int) $periodo_id);
            }
        }
        return $this->render('NinfacContaBundle:Default:index.html.twig');
    }
}
