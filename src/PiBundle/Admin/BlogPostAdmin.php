<?php

namespace PiBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;

use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use PiBundle\Entity\BlogPost;
class BlogPostAdmin extends Admin {

   
     protected function configureFormFields(FormMapper $formMapper)
    {
         $formMapper
        ->add('title', 'text')
        ->add('body', 'textarea')
        ->add('category', 'entity', array(
            'class' => 'PiBundle\Entity\Category',
            'choice_label' => 'name',
        ))
                  ->add('category', 'sonata_type_model', array(
            'class' => 'PiBundle\Entity\Category',
            'property' => 'name',
        ))
    ;
    
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('title')
                ->add('category', null, array(), 'entity', array(
                'class'    => 'PiBundle\Entity\Category',
                'property' => 'name',
            ));
    }

    
        protected function configureListFields(ListMapper $listMapper)
    {
         $listMapper
            ->addIdentifier('title')
            ->add('category.name')
            ->add('draft')
        ;
    }
    

   public function toString($object)
    {
        return $object instanceof BlogPost
            ? $object->getTitle()
            : 'Blog Post'; // shown in the breadcrumb on the create view
    }

    

}
