<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('username');
        
        $builder->add('email', 'email');
        
        $builder->add('password', 'repeated', array(
           'first_name'  => 'Palavra-passe:',
           'second_name' => 'Confirmar:',
           'type'        => 'password',
        ));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blogger\BlogBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'user';
    }
}