<?php

namespace Mooc\MailBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MailType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
     $builder 
             ->add('nom', 'text') 
             ->add('prenom', 'text') 
             ->add('tel', 'integer') 
             ->add('fromAdd', 'email') 
             ->add('text', 'text') 
             ->add('valider', 'submit') ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Mooc\MailBundle\Entity\Mail'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
       return 'Mail';
    }
}
