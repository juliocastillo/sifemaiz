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

 
}
