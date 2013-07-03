<?php

namespace Mascotas\MascotasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ComentarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           // ->add('usuario')
            ->add('comentario','textarea')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mascotas\MascotasBundle\Entity\Comentario'
        ));
    }

    public function getName()
    {
        return 'mascotas_mascotasbundle_comentariotype';
    }
}
