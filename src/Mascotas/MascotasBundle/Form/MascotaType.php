<?php

namespace Mascotas\MascotasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MascotaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('nombre')
            ->add('raza')
            ->add('sexo','choice', array( 'choices' => array('macho'=>'macho','hembra'=>'hembra')))
            ->add('foto_cargada','file', array('required' => false))
            ->getForm();
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mascotas\MascotasBundle\Entity\Mascota'
        ));
    }

    public function getName()
    {
        return 'mascotas_mascotasbundle_mascotatype';
    }
}
