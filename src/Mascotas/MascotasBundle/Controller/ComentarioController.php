<?php

namespace Mascotas\MascotasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mascotas\MascotasBundle\Entity\Comentario;
use Mascotas\MascotasBundle\Form\ComentarioType;
use Symfony\Component\Security\Acl\Domain\UserSecurityIdentity;
use Symfony\Component\Security\Acl\Permission\MaskBuilder;
use Symfony\Component\Security\Acl\Domain\ObjectIdentity;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

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
     * @Route("/{$publicacion_id}/{$pag_actual}", name="comentario")
     * @Method("GET")
     * @Template()
     */
    public function indexAction($publicacion_id , $pag_actual = 1)
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MascotasMascotasBundle:Comentario')->getPagina($pag_actual, $publicacion_id);
        $max_pag = $em->getRepository('MascotasMascotasBundle:Comentario')->getCantidad($publicacion_id);
        
        return array(
            'entities' => $entities,
            'max_pag' => $max_pag,
            'pagina_actual' => $pag_actual,
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
            
            $aclProvider= $this->get('security.acl.provider');
            $objectIdentity = ObjectIdentity::fromDomainObject($entity);
            $acl = $aclProvider->createAcl($objectIdentity);
            
            $securityContext = $this->get('security.context');
            $user = $securityContext->getToken()->getUser();
            $securityIdentity = UserSecurityIdentity:: fromAccount($user);
            
            $acl->insertObjectAce($securityIdentity, MaskBuilder::MASK_OPERATOR);
            $aclProvider->updateAcl($acl);
            
        return $this->redirect(
               $this->generateUrl('publicacion_show', array('id' =>$entity->getPublicacion()->getId()))
            );
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
     * @Route("/{id}/editar/comentario", name="comentario_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {   
        //$entity->setUsuario($this->getUser());
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MascotasMascotasBundle:Comentario')->find($id);
        $securityContext = $this->get('security.context');
        
        if ((false === $securityContext->isGranted('EDIT', $entity))
                and !($securityContext->isGranted('ROLE_ADMIN', $this->getUser()))) {
                   throw new AccessDeniedException("Acceso no autorizado");
        }
        
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
        $securityContext = $this->get('security.context');
        if(false === $securityContext->isGranted('EDIT', $entity)
                and !$securityContext->isGranted('ROLE_ADMIN', $this->getUser())){
            throw new AccessDeniedException();
        }
        
        
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ComentarioType(), $entity);
        $editForm->bind($request);
        
        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();
            
           if ($securityContext->isGranted('ROLE_ADMIN', $this->getUser())){
                return $this->redirect($this->generateUrl('panel_admin'));
           }else{
                return $this->redirect($this->generateUrl('panel_index'));
           }
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
            $securityContext = $this->get('security.context');
            
            if ((false === $securityContext->isGranted('DELETE', $entity))
                    and !($securityContext->isGranted('ROLE_ADMIN', $this->getUser()))) {
                throw new AccessDeniedException();
            //return $this->redirect($this->generateUrl('publicacion'));
             }
            if (!$entity) {
                throw $this->createNotFoundException('No se puede encontrar el comentario.');
            }
             
            $em->remove($entity);
            $em->flush();
        }
          if($securityContext->isGranted('ROLE_ADMIN', $this->getUser())){
                    return $this->redirect($this->generateUrl('panel_admin'));
                }else{
                    return $this->redirect($this->generateUrl('panel_index'));
                }
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
