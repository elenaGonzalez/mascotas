<?php

namespace Mascotas\MascotasBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Seguridad controller.
 *
 * @Route("/login")
 */
class SeguridadController extends Controller
{
    /**
     * Lists all Comentario entities.
     *
     * @Route("/", name="login")
     * @Method("GET")
     * @Template()
     */
    public function loginAction()
    {
        $request = $this->getRequest();
        $session = $request->getSession();
 
        // Devuelve el error de login si es que hay uno
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        }
 
        return $this->render('MascotasMascotasBundle:Seguridad:login.html.twig', array(
            // ultimo username ingresado por el usuario
            'last_username' => $session->get(SecurityContext::LAST_USERNAME),
            'error'         => $error,
        ));
        return $this->redirect($this->generateUrl('publicacion', array('id' => $entity->getId())));
    }
}
