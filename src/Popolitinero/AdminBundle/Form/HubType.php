<?php

namespace Popolitinero\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class HubType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('fullname')
            ->add('coverage_ratio_of_user_needs')
            //->add('is_active')
            ->add('master_city', new CityType())
        ;
    }
    public function getName()
    {
        return 'popolitinero_adminbundle_hubtype';
    }
}
