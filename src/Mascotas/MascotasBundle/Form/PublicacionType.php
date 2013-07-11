<?php

namespace Mascotas\MascotasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PublicacionType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                //->add('usuario')
                //->add('id')
                ->add('tipo', 'choice', array(
                    'choices' => array(
                        'Encontrado' => 'Encontrado', 
                        'Perdido' => 'Perdido',
                        'Busca Pareja' => 'Busca Pareja',
                        'Regalo Mascota' => 'Regalo Mascota')
                ))
                ->add('fechapublicacion', 'date', array(
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd'
                ))
                ->add('aviso', 'textarea')
                ->add('foto_subida', 'file', array('required' => false))
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
