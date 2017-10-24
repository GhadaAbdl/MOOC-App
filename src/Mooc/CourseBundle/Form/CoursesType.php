<?php

namespace Mooc\CourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Translation\Tests\String;
class CoursesType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('courseTitle','text',array('attr' => 
                array('class' => 'form-control','placeholder'=>'course title')))
            ->add('description','textarea',array('attr' => 
                array('class' => 'form-control',
                      'placeholder'=>'Content',
                       'row'=>'2')))
            ->add('objectives','textarea',array('attr' => 
                array('class' => 'form-control',
                      'placeholder'=>'Content',
                       'row'=>'2')))
            ->add('trainingDurationDays')
            ->add('trainingDurationHours')
            
             
            ->add('videolink','text',array('attr' => 
                array('class' => 'form-control','placeholder'=>'video link')))
            ->add('discipline' )
            ->add('discipline', 'choice', array('choices' => array(
                'Android' => 'Android',
                'IOS' => 'IOS',
                'TIZEN' => 'TIZEN',),
                'empty_value' => 'discpline')
                ,array('attr' => 
                array('class' => 'form-control' ))    
                    )  
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\CourseBundle\Entity\Courses'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_coursebundle_courses';
    }
}
