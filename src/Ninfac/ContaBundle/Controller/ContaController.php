<?php

namespace Ninfac\ContaBundle\Controller;

use Ninfac\ContaBundle\Service\ConsultaCatalogos;
use Ninfac\ContaBundle\Entity\ConPartidacontable;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContaController extends Controller {
    /**
     *
     * @author julio castillo
     * analista programador
     */

    /**
     * @Route("/conta/partidacontable/admin", name="conta_partidacontable_admin", options={"expose"=true})
     * @Method({"GET", "POST"})
     */
    public function contaPartidacontableAdminAction(Request $request) {
        //instanciando Service
        $consultaCatalogos = $this->container->get('conta.consulta_catalogos');

        /*
         * instanciar variables y objetos de la tabla principal
         */
        if ($this->get('session')->get('empresaId')) {
            $empresaId = $this->get('session')->get('empresaId');
        } else {
            return $this->render('NinfacContaBundle:Default:warning.html.twig', array(
                        'mensaje' => 'No hay contabilidad abierta ...'
            ));
        }
        if ($this->get('session')->get('anioId')) {
            $anioId = $this->get('session')->get('anioId')->getId();
        } else {
            return $this->render('NinfacContaBundle:Default:warning.html.twig', array(
                        'mensaje' => 'No hay periodo contable abierto ...'
            ));
        }
        return $this->redirectToRoute('sonata_admin_redirect');
        
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
    public function contaPeriodoSelectAction() {
        if ($this->get('session')->get('empresaId') == NULL) {
            return $this->render('NinfacContaBundle:Default:warning.html.twig', array(
                        'mensaje' => 'No hay empresa abierta ...'
            ));
        }
        $empresaId = $this->get('session')->get('empresaId');
        // var_dump($empresaId); exit();
        $em = $this->getDoctrine()->getEntityManager();
        $periodos = $em->getRepository('NinfacContaBundle:CtlPeriodocontable')->findBy(array('idEmpresa' => $empresaId, 'activo' => true),array('idMes'=>'ASC'));
        return $this->render('NinfacContaBundle:Herramientas:periodo_seleccionar.html.twig', array(
                    'periodos' => $periodos
        ));
    }

    /**
     *
     * @author julio castillo
     * analista programador
     */

    /**
     * @Route("/conta/empresa/select", name="conta_empresa_select", options={"expose"=true})
     * @Method("GET")
     */
    public function contaEmpresaSelectAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $empresas = $em->getRepository('NinfacContaBundle:CtlEmpresa')->findBy(array('activo' => true));
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
     * @Route("/conta/catalogo/import/select", name="conta_catalogo_import_select", options={"expose"=true})
     * @Method("GET")
     */
    public function contaCatalogoImportSelectAction() {
        if ($this->get('session')->get('anioId')) {
            $anioId = $this->get('session')->get('anioId')->getId();
        } else {
            return $this->render('NinfacContaBundle:Default:warning.html.twig', array(
                        'mensaje' => 'No hay periodo contable abierto ...'
            ));
        }
        
        $em = $this->getDoctrine()->getEntityManager();
        $empresas   = $em->getRepository('NinfacContaBundle:CtlEmpresa')->findAll();
        $niveles    = $em->getRepository('NinfacContaBundle:CtlNivelCuentacontable')->findBy(array('activo' => true));
        $anios      = $em->getRepository('NinfacContaBundle:CtlAnio')->findAll();
        return $this->render('NinfacContaBundle:Herramientas:catalogo_import.html.twig', array(
                    'empresas'  => $empresas,
                    'niveles'   => $niveles,
                    'anios'     => $anios
        ));
    }

    
    
    // METODOS PARA EJUCUTAR LAS ACCIONES SOLICITADAS
    
       /**
     * @Route("/conta/empresa/open", name="conta_empresa_open", options={"expose"=true})
     * @Method("GET")
     */
    /* utilizado desplegar nombre de la empresa.
     *
     */
    public function contaEmpresaOpenAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        $empresaId = $request->get('empresaId');
        // abrir la empresa solicitada manualmente
        $empresa = $em->getRepository('NinfacContaBundle:CtlEmpresa')
                ->find($empresaId);
        $this->get('session')->set('empresaId', $empresa->getId());
        $this->get('session')->set('empresaNombre', $empresa->getNombre());
        $this->get('session')->set('empresaOrigen', $empresa->getOrigen());
        return $this->redirectToRoute('conta_periodo_select');
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

        try { // guardar el nuevo catalogo importada
            $em->getRepository('NinfacContaBundle:ConPartidacontable')
                    ->importCatalogo($empresaAbiertoId, $anioAbiertoId, $empresaOrigenId, $anioOrigenId, $nivelCuentaId);
        } catch (\Exception $e) { // ejecutar si hay un error a la hora de hacer el guardado
            return $this->render('NinfacContaBundle:Default:warning.html.twig', array(
                        'mensaje' => 'No se pudo importar el catalogo ... error retornado: ' . $e
            ));
        }
        //mostrar mensaje de finalización
        return $this->render('NinfacContaBundle:Default:info.html.twig', array(
                    'mensaje' => 'Proceso de importación completo.'
        ));
    }

 
}
