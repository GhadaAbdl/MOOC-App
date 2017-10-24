<?php

namespace Mooc\QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuizzContentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            
            ->add('question','textarea', array('label' => 'Question Text'))
            ->add('answer','textarea', array('label' => 'Correct answer'))
            ->add('suggestion','textarea', array('label' => 'Wrong suggestion'))
            ->add('suggestion2','textarea', array('label' => 'Wrong suggestion'))
            ->add('suggestion3','textarea', array('label' => 'Wrong suggestion'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\QuizzBundle\Entity\QuizzContent'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_quizzbundle_quizzcontent';
    }
}
