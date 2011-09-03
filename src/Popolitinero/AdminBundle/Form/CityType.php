<?php

namespace Popolitinero\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CityType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('postal_code')
            ->add('nb_inhabitants')
            ->add('nevralgic_point', new BusStopType())
        ;
    }
    
    public function getName()
    {
        return 'popolitinero_adminbundle_citytype';
    }
}
