<?php

namespace Popolitinero\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class BusStopType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('latitude')
            ->add('longitude')
        ;
    }

    public function getName()
    {
        return 'popolitinero_adminbundle_busstoptype';
    }
}
