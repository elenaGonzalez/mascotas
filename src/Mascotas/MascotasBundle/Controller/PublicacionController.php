<?php

namespace Mascotas\MascotasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mascotas\MascotasBundle\Form\PublicacionType;
use Mascotas\MascotasBundle\Entity\Publicacion;
use Mascotas\MascotasBundle\Entity\Document;
/**
 * Publicacion controller.
 *
 * @Route("/publicacion")
 */
class PublicacionController extends Controller
{
    /**
     * Lists all Publicacion entities.
     *
     * @Route("{pagina_actual}/", name="publicacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($pagina_actual = 1)
    {
        
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MascotasMascotasBundle:Publicacion')->getPagina($pagina_actual);
        $max_pax = $em->getRepository('MascotasMascotasBundle:Publicacion')->getCantidad();
        
        return array(
            'entities' => $entities,
            'max_pag' => $max_pax,
            'pagina_actual' => $pagina_actual,            
        );
    }

    /**
     * Creates a new Publicacion entity.
     *
     * @Route("/", name="publicacion_create")
     * @Method("POST")
     * @Template("MascotasMascotasBundle:Publicacion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Publicacion();
        $form = $this->createForm(new PublicacionType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $entity->setUsuario($this->getUser());
            
            $file = $form['foto_subida']->getData();
            $document = new Document();
            
            $document->setFile($file);            
            
            $entity->setFoto($document);
                        
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('publicacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Publicacion entity.
     *
     * @Route("/new", name="publicacion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Publicacion();
        $form   = $this->createForm(new PublicacionType(), $entity);
        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Publicacion entity.
     *
     * @Route("/{id}/{comentario_nro_pagina}", name="publicacion_show")
     * @Method("GET")
     * @Template()
     */
    
    public function showAction($id, $comentario_nro_pagina = 1)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publicacion entity.');
        }
        
        $deleteForm = $this->createDeleteForm($id, $comentario_nro_pagina);
         $rpC = $em->getRepository('MascotasMascotasBundle:Comentario');
        $comentarios = $rpC->getComentarios($entity->getId(), $comentario_nro_pagina);
        $max_pag =  $rpC->getCantidad($id);
        
        $fotopath = $entity->getFoto()->getWebPath();
        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
            'comentarios' => $comentarios,
            'foto' => $fotopath,
            'max_pag' => $max_pag,
            'pagina_actual' => $comentario_nro_pagina,
        );
    }

    /**
     * Displays a form to edit an existing Publicacion entity.
     *
     * @Route("/{id}/edit", name="publicacion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publicacion entity.');
        }

        $editForm = $this->createForm(new PublicacionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Publicacion entity.
     *
     * @Route("/{id}", name="publicacion_update")
     * @Method("PUT")
     * @Template("MascotasMascotasBundle:Publicacion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publicacion entity.');
        }
        //if ($entity->getUsuario()->getId() !== $this->getUser()->getId()){
        //    throw \Symfony\Component\Security\Core\SecurityContext::ACCESS_DENIED_ERROR;
     //   }
        
        //$deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PublicacionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('publicacion', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    
    
    /**
     * Deletes a Publicacion entity.
     *
     * @Route("/{id}", name="publicacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {   
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Publicacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('publicacion'));
    }
    
     /**
     * Creates a form to delete a Publicacion entity by id.
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
}
