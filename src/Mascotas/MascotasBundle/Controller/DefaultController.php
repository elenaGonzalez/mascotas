<?php

namespace Mascotas\MascotasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $titulo="Bienvenido al Sistema Mascotas";
        $mens="Si amas a las mascotas, este es un Sitio que te va a encantar. No dudes en registrarte y comienza a participar";
        return array('titulo' => $titulo,'mens' => $mens);
    }
}
