<?php

namespace Mooc\MoocBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints as Assert;

class VideoConferenceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('course')
            ->add('chapter')
            ->add('date')
            ->add('time')
            ->add('duration')
            ->add('note')
            ->add('link')
            ->add('participate','hidden',array(
     
     'data' => '0'))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\MoocBundle\Entity\VideoConference'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'mooc_moocbundle_videoconference';
    }
}
