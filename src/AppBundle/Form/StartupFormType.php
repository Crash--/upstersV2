<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StartupFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('GPSLat')
            ->add('GPSLong')
            ->add('website')
            ->add('description')
            ->add('phone')
            ->add('email')
            ->add('facebook');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'AppBundle\Entity\Startup'
        ]);
    }

    public function getName()
    {
        return 'app_bundle_startup_form_type';
    }
}
