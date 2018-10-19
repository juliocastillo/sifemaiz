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
     * @Route("/user/password/change", name="user_password_change", options={"expose"=true})
     * @Method({"GET"})
     */
    public function userPasswordChangeAction()
    {
        return $this->render('NinfacContaBundle:Herramientas:usuario_password_cambiar.html.twig', array(
                    'error' => ''
        ));
    }


    /**
     *
     * @author julio castillo
     * analista programador
     */
    /**
     * @Route("/user/password/check", name="user_password_check", options={"expose"=true})
     * @Method({"GET", "POST"})
     */
    public function userPasswordCheckAction(Request $request) {
        $em = $this->getDoctrine()->getEntityManager();
        //obtener los datos ingresados en el formulario
        $oldpassword = $request->get('_oldpassword');
        $newpassword = $request->get('_newpassword');
        $new2password = $request->get('_new2password');

        // la confirmación del password
        if ($newpassword == $new2password) {


            /* cambiar al nuevo password */

            // id del usuario logueado
            $userId = $this->container->get('security.token_storage')->getToken()->getUser()->getId();

            // obtener passwrod almacenado
            $user = $em->getRepository('ApplicationSonataUserBundle:User')->find($userId);

            //codificando el passwrod
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $new2password);
            $encoded_oldpassword = $encoder->encodePassword($user, $oldpassword);

            //echo $encoder_oldpassword.$user->getPassword();

            //die();

            //verificar el password guardado
            if ($user->getPassword() == $encoded_oldpassword) {
                $user->setPassword($encoded);
                $em->persist($user);
                $em->flush();
                $mensaje = 'El password se ha cambiado correctamente';
                $class = 'glyphicon glyphicon-check';
            } else { // si el password es incorrecto
                $mensaje = 'Password incorrecto, no se pudo cambiar al nuevo password';
                $class = 'glyphicon glyphicon-alert';
            }
        } else {
            $mensaje = 'El password no coincide, no se pudo cambiar al nuevo password';
            $class = 'glyphicon glyphicon-alert';
        }

        return $this->render('NinfacContaBundle:Herramientas:usuario_password_cambiar.html.twig', array(
                    'error' => $mensaje,
                    'class' => $class
        ));
    }


}
