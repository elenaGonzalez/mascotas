<?php

namespace Mascotas\MascotasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mascotas\MascotasBundle\Form\PublicacionType;
use Mascotas\MascotasBundle\Form\FinalizarType;
use Mascotas\MascotasBundle\Entity\Publicacion;
use Mascotas\MascotasBundle\Entity\Document;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;

/**
 * Publicacion controller.
 *
 * @Route("/publicacion")
 */
class PublicacionController extends Controller {

    /**
     * Lists all Publicacion entities.
     *
     * @Route("{pagina_actual}/{tipo}", defaults = {"pagina_actual" = 1, "tipo" = null }, name="publicacion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($pagina_actual, $tipo) {

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MascotasMascotasBundle:Publicacion')->getPagina($pagina_actual, $tipo);
        $max_pax = $em->getRepository('MascotasMascotasBundle:Publicacion')->getCantidad($tipo);

        return array(
            'entities' => $entities,
            'max_pag' => $max_pax,
            'pagina_actual' => $pagina_actual,
            'tipo' => $tipo, 
        );
    }

    /**
     * Creates a new Publicacion entity.
     *
     * @Route("/", name="publicacion_create")
     * @Method("POST")
     * @Template("MascotasMascotasBundle:Publicacion:new.html.twig")
     */
    public function createAction(Request $request) {
        $entity = new Publicacion();
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
            $aclProvider = $this->get('security.acl.provider');
            $objectIdentity = ObjectIdentity::fromDomainObject($entity);
            $acl = $aclProvider->createAcl($objectIdentity);
            $securityContext = $this->get('security.context');
            $user = $securityContext->getToken()->getUser();
            $securityIdentity = UserSecurityIdentity:: fromAccount($user);
            $acl->insertObjectAce($securityIdentity, MaskBuilder::MASK_OPERATOR);
            $aclProvider->updateAcl($acl);

            return $this->redirect($this->generateUrl('publicacion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Publicacion entity.
     *
     * @Route("/new", name="publicacion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction() {
        $entity = new Publicacion();
        $form = $this->createForm(new PublicacionType(), $entity);
        return array(
            'entity' => $entity,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Publicacion entity.
     *
     * @Route("/{id}/{comentario_nro_pagina}", requirements={"id" = "\d+", "comentario_nro_pagina" = "\d+"}, name="publicacion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id, $comentario_nro_pagina = 1) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Esta publicación no puede ser encontrada');
        }

        /* if($comentario_nro_pagina <1){
          $comentario_nro_pagina=1;
          } */
        $deleteForm = $this->createDeleteForm($id, $comentario_nro_pagina);
        $rpC = $em->getRepository('MascotasMascotasBundle:Comentario');
        $comentarios = $rpC->getComentarios($entity->getId(), $comentario_nro_pagina);
        $max_pag = $rpC->getCantidad($id);

        $fotopath = $entity->getFoto()->getWebPath();

        return array(
            'entity' => $entity,
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
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);

        $securityContext = $this->get('security.context');

        if ((false === $securityContext->isGranted('EDIT', $entity)) and !($securityContext->isGranted('ROLE_ADMIN', $this->getUser()))) {
            throw new AccessDeniedException();
            //return $this->redirect($this->generateUrl('publicacion'));
        }

        if (!$entity) {
            throw $this->createNotFoundException('No es posible hallar la Publicacion buscada.');
        }

        $editForm = $this->createForm(new PublicacionType(), $entity);
        $deleteForm = $this->createDeleteForm($id);
        $editar = 'si';
        return array(
            'entity' => $entity,
            'editar' => $editar,
            'edit_form' => $editForm->createView(),
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
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);
        $securityContext = $this->get('security.context');
        if ((false === $securityContext->isGranted('EDIT', $entity)) and !($securityContext->isGranted('ROLE_ADMIN', $this->getUser()))) {
            throw new AccessDeniedException();
        }

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Publicacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new PublicacionType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $file = $editForm['foto_subida']->getData();
            if (isset($file)) {
                $document = new Document();
                $document->setFile($file);
                $entity->setFoto($document);
            }

            $em->persist($entity);
            $em->flush();
            
            if ($securityContext->isGranted('ROLE_ADMIN', $this->getUser())) {
                return $this->redirect($this->generateUrl('panel_admin'));
            } else {
                return $this->redirect($this->generateUrl('panel_index'));
            }
        }

        return array(
            'entity' => $entity,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Publicacion entity.
     *
     * @Route("/{id}", name="publicacion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);
            $securityContext = $this->get('security.context');
            if ((false === $securityContext->isGranted('DELETE', $entity)) and !($securityContext->isGranted('ROLE_ADMIN', $this->getUser()))) {
                throw new AccessDeniedException();
                //return $this->redirect($this->generateUrl('publicacion'));
            }
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Publicacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }
        if ($securityContext->isGranted('ROLE_ADMIN', $this->getUser())) {
            return $this->redirect($this->generateUrl('panel_admin'));
        } else {
            return $this->redirect($this->generateUrl('panel_index'));
        }
    }

    /**
     * Creates a form to delete a Publicacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder(array('id' => $id))
                        ->add('id', 'hidden')
                        ->getForm()
        ;
    }

    /**
     * Muestra las publicaciones del usuario
     *
     * @Route("/panel/{id}/finalizar", name="publicacion_finalizar")
     * @Method({"GET", "POST"})
     * @Template("MascotasMascotasBundle:Publicacion:finalizar.html.twig")
     */
    public function finalizarAction($id) {
        $em = $this->getDoctrine()->getManager();
        $publicacion = $em->getRepository('MascotasMascotasBundle:Publicacion')->find($id);

        if (!$publicacion) {
            throw $this->createNotFoundException(
                    'No es posible encontrar la publicación ' . $id
            );
        }
        $securityContext = $this->get('security.context');

        if ((false === $securityContext->isGranted('EDIT', $publicacion)) and !($securityContext->isGranted('ROLE_ADMIN', $this->getUser()))) {
            throw new AccessDeniedException();
        }
        $finalizarForm = $this->createForm(new FinalizarType(), $publicacion);

        if ($this->getRequest()->getMethod() === 'POST') {
            $finalizarForm->bind($this->getRequest());

            if ($finalizarForm->isValid()) {
                $publicacion->setFechafinalizacion(new \DateTime("now"));
                $em->persist($publicacion);
                $em->flush();
                if ($securityContext->isGranted('ROLE_ADMIN', $this->getUser())) {
                    return $this->redirect($this->generateUrl('panel_admin'));
                } else {
                    return $this->redirect($this->generateUrl('panel_index'));
                }
            }
        }
        return array(
            'publicacion' => $publicacion,
            'finalizar_form' => $finalizarForm->createView(),
        );
    }
    
     /**
     * Lists all Publicacion 
     *
     * @Route("/busqueda/{tipo}/{pagina}" ,defaults = {"tipo" = null, "pagina" = 1}, name = "publicacion_busqueda")
     * @Method("GET")
     * @Template("MascotasMascotasBundle:Publicacion:index.html.twig")
     */
    public function busquedaAction($tipo, $pagina) {
        
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('MascotasMascotasBundle:Publicacion')->getPagina($pagina , $tipo);        
        $max_pax = $em->getRepository('MascotasMascotasBundle:Publicacion')->getCantidad($tipo);
        
        return array(
            'entities' => $entities,
            'max_pag' => $max_pax,
            'pagina_actual' => $pagina,            
        );
    }

}
