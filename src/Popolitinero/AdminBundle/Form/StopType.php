<?php

namespace Popolitinero\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class StopType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('is_terminus')
            ->add('is_on_demand')
            ->add('latitude')
            ->add('longitude')
            ->add('city')
        ;
    }

    public function getName()
    {
        return 'popolitinero_adminbundle_stoptype';
    }
}
