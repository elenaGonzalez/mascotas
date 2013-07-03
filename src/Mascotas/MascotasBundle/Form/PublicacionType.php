<?php

namespace Mascotas\MascotasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PublicacionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                //->add('usuario')
                ->add('tipo', 'choice', array(
                   'choices' => array('e' => 'Encontrado', 'p' => 'Perdido')
                ))                
                ->add('fechapublicacion', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd'
                ))
                ->add('aviso', 'textarea')
                ->add('foto', 'file')
                ->add('contacto', 'textarea')
                ->getForm();
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Mascotas\MascotasBundle\Entity\Publicacion'
        ));
    }

    public function getName() {
        return 'mascotas_mascotasbundle_publicaciontype';
    }

}
