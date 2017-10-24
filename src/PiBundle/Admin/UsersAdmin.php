<?php


namespace PiBundle\Admin;
use PiBundle\Entity\Users;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UsersAdmin extends Admin {
    protected function configureFormFields(FormMapper $formMapper)
    {
         $formMapper
                 ->add('surname', 'text')
        ->add('name', 'text')
        
        ->add('birth_date', 'date')
    
            
                 ->add('email','email')
                 ->add('enabled', 'choice', ['choices'  => array(
        '0' => 'Waiting for more information ',
        '1' => 'Done',
        '3' => 'First subscribe',
        
       
    ),
    ])
     ->add('type', 'choice', array(
    'choices'  => array(
        'Aprenant' => 'Apprenant',
        'Formateur' => 'Formateur',
        'Pedagogue' => 'Pedagogue',
        'Organism' => 'Organisme',
       
    ),
)
)
    ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name')
                ->add('type');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            
            ->add('type')
        ;
    }
   public function toString($object)
    {
        return $object instanceof Users
            ? $object->getName()
          : 'Users'; // shown in the breadcrumb on the create view
  }
}

