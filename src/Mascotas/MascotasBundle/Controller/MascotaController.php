<?php

namespace Mascotas\MascotasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mascotas\MascotasBundle\Entity\Mascota;
use Mascotas\MascotasBundle\Entity\Document;
use Mascotas\MascotasBundle\Form\MascotaType;

/**
 * Mascota controller.
 *
 * @Route("/mascota")
 */
class MascotaController extends Controller
{
    /**
     * Lists all Mascota entities.
     *
     * @Route("/", name="mascota")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MascotasMascotasBundle:Mascota')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Creates a new Mascota entity.
     *
     * @Route("/", name="mascota_create")
     * @Method("POST")
     * @Template("MascotasMascotasBundle:Mascota:new.html.twig")
     */
    public function createAction(Request $request)
    {   
        $usuario = $this->getUser();
        $entity  = new Mascota();
        $entity->setUsuario($usuario);
        $form = $this->createForm(new MascotaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $entity->setUsuario($this->getUser());
            $archivo = $form['foto_cargada']->getData();
            $documento = new Document();

            $documento->setFile($archivo);

            $entity->setFoto($documento);
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('panel_index', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to create a new Mascota entity.
     *
     * @Route("/new", name="mascota_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Mascota();
        $form   = $this->createForm(new MascotaType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Mascota entity.
     *
     * @Route("/{id}", name="mascota_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Mascota')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mascota entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $fotopath = $entity->getFoto()->getWebPath();
        return array(
            'entity'      => $entity,
            'foto' => $fotopath,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Mascota entity.
     *
     * @Route("/{id}/edit", name="mascota_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MascotasMascotasBundle:Mascota')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mascota entity.');
        }

        $editForm = $this->createForm(new MascotaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Mascota entity.
     *
     * @Route("/{id}", name="mascota_update")
     * @Method("PUT")
     * @Template("MascotasMascotasBundle:Mascota:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('MascotasMascotasBundle:Mascota')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Mascota entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new MascotaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('panel_index'));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Mascota entity.
     *
     * @Route("/{id}", name="mascota_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MascotasMascotasBundle:Mascota')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Mascota entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('panel_index'));
    }

    /**
     * Creates a form to delete a Mascota entity by id.
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
