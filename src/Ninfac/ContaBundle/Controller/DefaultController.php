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
        $empresaId = $request->get('empresaId');
        $periodoId = $request->get('periodoId');
        if ($empresaId == NULL) // entrar por primera vez
        {
            // abrir empresa consolidadora por default
            $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                          ->findOneBy(array('consolidadora' => TRUE));
            if ($empresa){ //si la consulta retorna una empresa consolidadora
              $this->get('session')->set('empresaId', $empresa->getId());
              $this->get('session')->set('empresaNombre', $empresa->getNombre());
            } else { //si la consulta no retorne ninguna empresa.
              $this->get('session')->set('empresaId', NULL);
              $this->get('session')->set('empresaNombre', 'Sin nombre');
            }
        }
        else
        { // abrir la empresa solicitada
            $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                          ->find($empresaId);
            $this->get('session')->set('empresaId', $empresa->getId());
            $this->get('session')->set('empresaNombre', $empresa->getNombre());
            if ($periodoId == NULL) //Reset periodo contable
            {
                $this->get('session')->set('periodoId', NULL);
                $this->get('session')->set('anioId', NULL);
                $this->get('session')->set('mesId', NULL);
            }
            else // seleccionar periodo contable
            {
                $periodo = $em->getRepository('NinfacContaBundle:CtlPeriodocontable')
                              ->find($periodoId);
                $anioId  = $periodo->getIdAnio();
                $mesId  = $periodo->getIdMes()->getId();
                $this->get('session')->set('periodoId', (int) $periodoId);
                $this->get('session')->set('anioId', $anioId);
                $this->get('session')->set('mesId', $mesId);
            }
        }
        return $this->render('NinfacContaBundle:Default:index.html.twig');
    }
}
