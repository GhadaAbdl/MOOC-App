<?php

namespace Mooc\CourseBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChapterType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('chaptertitle','text',array('attr' => 
                array('class' => 'form-control','placeholder'=>'chapter title')))
             
         
            ->add('chaptercontent','textarea',array('attr' => 
                array('class' => 'form-control',
                      'placeholder'=>'Content',
                       'row'=>'5')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\CourseBundle\Entity\Chapter'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_coursebundle_chapter';
    }
}
