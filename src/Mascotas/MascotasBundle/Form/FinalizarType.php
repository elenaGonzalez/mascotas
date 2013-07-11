<?php

namespace Mascotas\MascotasBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FinalizarType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('motivo','textarea')
                ->getForm();
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Mascotas\MascotasBundle\Entity\Publicacion'
        ));
    }

    public function getName() {
        return 'mascotas_mascotasbundle_finalizartype';
    }

}

