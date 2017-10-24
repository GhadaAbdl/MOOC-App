<?php
namespace Mooc\MoocBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RechercheVideoType extends AbstractType {

    public function buildForm(FormBuilderInterface
    $builder, array $options) {
        $builder
                ->add('course','text',array('required'=>false));
    }

    public function getName() {
        // return 'Modele';
    }

}
