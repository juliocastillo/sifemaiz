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
     /* utilizado para menu principal del sistema.
      *
      */
    public function indexAction(Request $request)
    {
            $em = $this->getDoctrine()->getEntityManager();
            $empresa_id = $request->get('empresa_id');
            if ($empresa_id != NULL)
            { //Solo sucede cuando se ha decidido abrir una empresa
                $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                              ->find($empresa_id);
                $this->get('session')->set('empresa_id', $empresa->getId());
                $this->get('session')->set('empresa_nombre', $empresa->getNombre());
            } else { // si se va a ingresar por primera vez o ya hay una empresa abierta
                $empresa_id = $this->get('session')->get('empresa_id');
                if (!$empresa_id){ //si no hay empresa abierta abrir la consolidadora
                    $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                                  ->findOneBy(array('consolidadora' => TRUE));
                } else { //sino hay empresa abierta abrir continuar con la misma
                    $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                                  ->find($empresa_id);
                }
                if ($empresa){ //si la consulta retorna una empresa
                    $this->get('session')->set('empresa_id', $empresa->getId());
                    $this->get('session')->set('empresa_nombre', $empresa->getNombre());
                } else { //si la consulta no retorne ninguna empresa.
                    $this->get('session')->set('empresa_id', null);
                    $this->get('session')->set('empresa_nombre', 'ninguna empresa consolidadora');
                }
            }

        return $this->render('NinfacContaBundle:Default:index.html.twig', array(
            'empresa' => $empresa->getNombre()
        ));
    }
}
