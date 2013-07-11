<?php

namespace Mascotas\MascotasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Mascotas\MascotasBundle\Entity\Contacto;
use Mascotas\MascotasBundle\Form\ContactoType;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template("")
     */
    public function indexAction()
    {
       
       return $this->redirect($this->generateUrl('publicacion'));
    }
    
     /**
     * @Route("/contact",name="email_contacto")
     * @Template()
     */
    public function contactAction()
    {
        $contacto = new Contacto();
        $form = $this->createForm(new ContactoType(), $contacto);
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if($form->isValid()){
                $contacto= $form->getData();
                $message = \Swift_Message::newInstance()
                        ->setSubject('Demo de contacto')
                        ->setFrom(array('elebeatrizgonzalez@hotmail.com' => 'Servicio de Contacto'))
                        ->setTo($contacto->getEmail())                        
                        ->setContentType('text/html')
                        ->setBody($this->renderView('MascotasMascotasBundle:Default:email.saludo.html.twig',
                                array('contacto' => $contacto)));
               $this->get('mailer')->send($message);
               
               $this->get('session')->setFlash('notice',
                        'Tu mensaje ha sido enviado, recibirás un email en la brevedad. Gracias');

                // Redirect - This is important to prevent users re-posting
                // the form if they refresh the page
                return $this->redirect($this->generateUrl('email_contacto'));
            } else {
                $this->get('session')->setFlash('error',
                        'El formulario tiene errores el mail no se ha enviado');
            }
        }
        
        return array(
            'form' => $form->createView()
        );
    }
}
