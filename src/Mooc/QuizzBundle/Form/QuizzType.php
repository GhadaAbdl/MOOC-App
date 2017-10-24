<?php

namespace Mooc\QuizzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class QuizzType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    
   
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
                
                ->add('duration','integer', array('label' => 'Quizz duration'))
                ->add('name','text', array('label' => 'Quizz name'))
        ;
    }
   

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\QuizzBundle\Entity\Quizz'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'mooc_quizzbundle_quizz';
    }

}
