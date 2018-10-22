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
        $em = $this->getDoctrine()->getEntityManager();

        $empresaId = $request->get('empresaId') ? $request->get('empresaId') : $this->get('session')->get('empresaId');
        if ($this->get('session')->get('empresaId') == NULL) { //abrir 
            if ($empresaId == NULL) { // entrar por primera vez
                // abrir empresa consolidadora por default
                $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                        ->findOneBy(array('consolidadora' => TRUE));
                if ($empresa) { //si la consulta retorna una empresa consolidadora
                    $this->get('session')->set('empresaId', $empresa->getId());
                    $this->get('session')->set('empresaNombre', $empresa->getNombre());
                    return $this->redirectToRoute('conta_periodo_select');
                } else { //si la consulta no retorne ninguna empresa.
                    $this->get('session')->set('empresaId', NULL);
                    $this->get('session')->set('empresaNombre', 'Sin nombre');
                    return $this->redirectToRoute('conta_empresa_open');
                }
            } else { // abrir la empresa solicitada manualmente
                $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                        ->find($empresaId);
                $this->get('session')->set('empresaId', $empresa->getId());
                $this->get('session')->set('empresaNombre', $empresa->getNombre());
            }
        } else {
            $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                    ->find($empresaId);
            $this->get('session')->set('empresaId', $empresa->getId());
            $this->get('session')->set('empresaNombre', $empresa->getNombre());
            $this->get('session')->set('periodoId', NULL);
            $this->get('session')->set('anioId', NULL);
            $this->get('session')->set('mesId', NULL);
            $this->get('session')->set('anioNombre', NULL);

            return $this->redirectToRoute('conta_periodo_select');
        }
        return $this->render('NinfacContaBundle:Default:index.html.twig');
    }

    /**
     * @Route("/conta/periodo/open", name="conta_periodo_open", options={"expose"=true})
     * @Method("GET")
     */
    /* utilizado para abrir el periodo contable.
     *
     */
    public function contaPeriodoOpenAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $periodoId = $request->get('periodoId') ? $request->get('periodoId') : $this->get('session')->get('periodoId');
        $periodo = $em->getRepository('NinfacContaBundle:CtlPeriodocontable')
                ->find($periodoId);
        $anioId = $periodo->getIdAnio();
        $mesId = $periodo->getIdMes()->getId();
        $this->get('session')->set('periodoId', (int) $periodoId);
        $this->get('session')->set('anioId', $anioId);
        $this->get('session')->set('mesId', $mesId);
        $this->get('session')->set('anioNombre', $anioId->getNombre());

        return $this->render('NinfacContaBundle:Default:index.html.twig');
    }

    /**
     * @Route("/conta/catalogo/import/open", name="conta_catalogo_import_open", options={"expose"=true})
     * @Method("GET")
     */
    /* utilizado para abrir el periodo contable.
     *
     */
    public function contaCatalogoImportOpenAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $empresaOrigenId = $request->get('empresaOrigenId');
        $anioOrigenId = $request->get('anioOrigenId');
        $nivelCuentaId = $request->get('nivelCuentaId');
        //-----
        $anioAbiertoId = $this->get('session')->get('anioId')->getId();
        $empresaAbiertoId = $this->get('session')->get('empresaId');
        
        $em->getRepository('NinfacContaBundle:ConPartidacontable')
                ->importCatalogo($empresaAbiertoId, $anioAbiertoId, $empresaOrigenId, $anioOrigenId, $nivelCuentaId);

        //$periodoId = $request->get('periodoId') ? $request->get('periodoId') : $this->get('session')->get('periodoId');
//        $anioId = $periodo->getIdAnio();
//        $mesId = $periodo->getIdMes()->getId();
//        $this->get('session')->set('periodoId', (int) $periodoId);
//        $this->get('session')->set('anioId', $anioId);
//        $this->get('session')->set('mesId', $mesId);
//        $this->get('session')->set('anioNombre', $anioId->getNombre());

        return $this->render('NinfacContaBundle:Default:info.html.twig', array(
                    'mensaje' => 'Proceso de importación completo.'
        ));
    }

}
