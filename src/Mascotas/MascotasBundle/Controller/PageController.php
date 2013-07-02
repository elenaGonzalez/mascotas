<?php
namespace Mascotas\MascotasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class PageController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()
                   ->getEntityManager();

        $publicaciones = $em->createQueryBuilder()
                    ->select('b')
                    ->from('MascotasMascotasBundle:Publicacion',  'p')
                    ->addOrderBy('p.created', 'DESC')
                    ->getQuery()
                    ->getResult();

        return $this->render('MascotasMascotasBundle:Page:index.html.twig', array(
            'publicaciones' => $publicaciones
        ));
    }
}

?>
