<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistroType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('User', new UserType());
        $builder->add('Termos', 'checkbox', array('property_path' => 'TermosAceites'));
    }

    public function getName()
    {
        return 'registro';
    }
}