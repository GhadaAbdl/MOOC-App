<?php


namespace PiBundle\Admin;
use PiBundle\Entity\Courses;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CoursesAdmin extends Admin {
    protected function configureFormFields(FormMapper $formMapper)
    {
         $formMapper
                 ->add('description', 'text')
        ->add('objectives', 'text')
        
        
     ->add('validation', 'choice', array(
    'choices'  => array(
        '1' => 'Valide' ,
         '0'=>'Non valide' ,
       
       
    ),
)
)
    ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('description');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('description')
            
            ->add('objectives')
        ;
    }
   public function toString($object)
    {
        return $object instanceof Courses
            ? $object->getIdCourse()
          : 'Courses'; // shown in the breadcrumb on the create view
  }
}

