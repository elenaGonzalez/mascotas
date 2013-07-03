<?php

namespace Mascotas\MascotasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mascotas\MascotasBundle\Entity\Comentario;
use Mascotas\MascotasBundle\Form\ComentarioType;

/**
 * Comentario controller.
 *
 * @Route("/comentario")
 */
class ComentarioController extends Controller
{
    /**
     * Lists all Comentario entities.
     *
     * @Route("/", name="comentario")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MascotasMascotasBundle:Comentario')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Comentario entity.
     *
     * @Route("/create/{publicacion_id}", name="comentario_create")
     * @Method("POST")
     * @Template("MascotasMascotasBundle:Comentario:new.html.twig")
     */
    public function createAction( $publicacion_id){
        $entity  = new Comentario();
        $publicacion = $this->getPublication($publicacion_id);
        $entity->setPublicacion($publicacion);
        $form = $this->createForm(new ComentarioType(), $entity);
        
        $request = $this->getRequest();
        $form->bind($request);
        
        if ($form->isValid()) {
            $entity->setUsuario($this->getUser());
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            
            //return $this->redirect($this->generateUrl('comentario_show', array('id' => $entity->getId())));
            return $this->redirect(
                            $this->generateUrl('publicacion_show', array(
                                'id' => $entity->getPublicacion()->getId() .
                                '#comentario-' . $entity->getId()
                    )));
        }
        
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'publicacion' => $publicacion,
        );
    }

    /**
     * Displays a form to create a new Comentario entity.
     *
     * @Route("/new/{publicacion_id}", name="comentario_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction($publicacion_id)
    {
        $entity = new Comentario();        
        $entity->setPublicacion($this->getPublication($publicacion_id));
        
        
        $form   = $this->createForm(new ComentarioType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),            
            'publicacion' => $entity->getPublicacion(),
        );
    }

    /**
     * Finds and displays a Comentario entity.
     *
     * @Route("/{id}", name="comentario_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Comentario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Comentario entity.
     *
     * @Route("/{id}/edit", name="comentario_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {   
        $entity->setUsuario($this->getUser());
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Comentario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentario entity.');
        }

        $editForm = $this->createForm(new ComentarioType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Comentario entity.
     *
     * @Route("/{id}", name="comentario_update")
     * @Method("PUT")
     * @Template("MascotasMascotasBundle:Comentario:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Comentario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Comentario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ComentarioType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comentario_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Comentario entity.
     *
     * @Route("/{id}", name="comentario_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MascotasMascotasBundle:Comentario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Comentario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comentario'));
    }

    /**
     * Creates a form to delete a Comentario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
    private function getPublication($id){        
        $em = $this->getDoctrine()->getManager();
        $publicacion = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);
        
        if (!$publicacion){
            throw $this->createNotFoundException('No se pude recuperar la publicación para este comentario.');
        }
        
        return $publicacion;
    }
    
    
}
