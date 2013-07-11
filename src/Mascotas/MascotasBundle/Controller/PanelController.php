<?php
namespace Mascotas\MascotasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Panel controller.
 *
 * @Route("/panel")
 */
class PanelController extends Controller
{
    /**
     * Lists all Comentario entities.
     *
     * @Route("/", name="panel_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(){
        $usuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MascotasMascotasBundle:Publicacion')->findByUsuario($usuario);
        $comentarios = $em ->getRepository('MascotasMascotasBundle:Comentario')->findByUsuario($usuario);        
        
        return array(
            'entities' => $entities,
            'comentarios' => $comentarios,
            'usuario' => $usuario,
        );
    }

      
     /**
     *Crea un panel de administracion 
     *@Route("/admin" , name="panel_admin")
     *@Method("GET")
     *@Template()
     */
    public function adminAction()
    {   
        $usuario = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MascotasMascotasBundle:Usuario')->findAll();
        $publicaciones= $em->getRepository('MascotasMascotasBundle:Publicacion')->findAll();
        $comentarios =$em->getRepository('MascotasMascotasBundle:Comentario')->findAll();
       
        return array(
        'entities' => $entities,
        'publicaciones' =>$publicaciones,
        'comentarios' => $comentarios,
        );
    }
}

?>
