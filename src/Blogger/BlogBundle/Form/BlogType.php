<?php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BlogType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('author')
            ->add('category', 'choice', array(
                  'choices' => array('Nacional' => 'Nacional', 'Internacional' => 'Internacional',
                                     'Economia' => 'Economia', 'Desporto' => 'Desporto')))
            ->add('blog')
            ->add('image', 'file')
            ->add('tags')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Blogger\BlogBundle\Entity\blog'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'Blogger_BlogBundle_blog';
    }
}
