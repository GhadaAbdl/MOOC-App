<?php

namespace Mooc\CourseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Mooc\CourseBundle\Entity\Chapter;
use Mooc\CourseBundle\Form\ChapterType;

/**
 * Chapter controller.
 *
 */
class ChapterController extends Controller
{
 
    /**
     * Lists all Chapter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MoocCourseBundle:Chapter')->findAll();

        return $this->render('MoocCourseBundle:Chapter:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Chapter entity.
     *
     */
    public function createAction($chapternumber,$idCourse,Request $request )
    {
        $entity = new Chapter();
        
        
        $form = $this->createCreateForm($entity,$chapternumber,$idCourse);
        
        $form->handleRequest($request);
$entity->setChapternumber($chapternumber);
        $entity->setIdCourse($idCourse);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $chapternumber++;
            $last_id=$entity->getIdChapter();
            return $this->redirect($this->generateUrl('mooc_quizz_addnm',array('id_course' => $idCourse, 'id_chapter' => $entity->getIdChapter(),'chapterNumber'=>$chapternumber))) ;  
        }
        return $this->render('MoocCourseBundle:Chapter:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
             
            
        ));
    }
    
    
    
    
     
    /**
     * Creates a form to create a Chapter entity.
     *
     * @param Chapter $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    public  function createCreateForm(Chapter $entity,$idCourse,$chapternumber)
    {
         
        $form = $this->createForm(new ChapterType(), $entity, array(
            'action' => $this->generateUrl('chapter_create',array('idCourse' => $idCourse, 'chapternumber' => $chapternumber)),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    
    /**
     * Displays a form to create a new Chapter entity.
     *
     */
//    public function newAction()
//    {
//        $entity = new Chapter();
//        $form   = $this->createCreateForm($entity);
//
//        return $this->render('MoocCourseBundle:Chapter:new.html.twig', array(
//            'entity' => $entity,
//            'form'   => $form->createView(),
//        ));
//    }
    public function finalnewAction($chapternumber,$idCourse)
    {
        $chapter = new Chapter();
        $form = $this->createForm( $chapter );
        $request = $this->get('request');
        if ($form->handleRequest($request)->isValid()  ) {
            $em = $this->getDoctrine()->getManager();
            $chapter->setIdCourse($idCourse);
            $em->persist($chapter);
            $em->flush();
            
            
            
            
            
            return $this->redirect($this->generateUrl('mooc_quizz_add',
                    array('id_chapter' => $chapter->getIdChapter())));        
            
        }
         

       
   
         return $this->render('MoocCourseBundle:Chapter:finalchapter.html.twig', array(
            'entity' => $chapter,
            'form'   => $form->createView(),
             'idCourse'=>$idCourse,
             'chapternumber' => $chapternumber,
        ));
}
    
    public function newAction($chapternumber,$idCourse)
    {
        $chapter = new Chapter();
        $form = $this->createCreateForm( $chapter,$idCourse,$chapternumber);
        $request = $this->get('request');
        
        if ($form->handleRequest($request)->isValid()  ) {
            $em = $this->getDoctrine()->getManager();
            $chapter->setIdCourse($idCourse);
            $em->persist($chapter);
            $em->flush();
            $chapternumber++;
            return $this->redirect($this->generateUrl('chapter_create',
                    array('idCourse' => $idCourse, 'chapternumber' => $chapternumber)));        
            
        }
         

       
   
         return $this->render('MoocCourseBundle:Chapter:new.html.twig', array(
            'entity' => $chapter,
            'form'   => $form->createView(),
             'idCourse'=>$idCourse,
             'chapternumber' => $chapternumber,
        ));
}
    /**
     * Finds and displays a Chapter entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Chapter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chapter entity.');
        }
        

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocCourseBundle:Chapter:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Chapter entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Chapter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chapter entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocCourseBundle:Chapter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Chapter entity.
    *
    * @param Chapter $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Chapter $entity)
    {
        $form = $this->createForm(new ChapterType(), $entity, array(
            'action' => $this->generateUrl('chapter_update', array('id' => $entity->getIdChapter())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Chapter entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Chapter')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Chapter entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('chapter_edit', array('id' => $id)));
        }

        return $this->render('MoocCourseBundle:Chapter:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Chapter entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MoocCourseBundle:Chapter')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Chapter entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('chapter'));
    }

    /**
     * Creates a form to delete a Chapter entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('chapter_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
    
     public function finalchapterAction($num_chapitre,$idCourse)
    {
          
        $chapter = new Chapter();
        $form = $this->createForm(new ChapterType(), $chapter);
        $form->add('finish','submit');
        $request = $this->get('request'); 
        
         
        
        if ($form->handleRequest($request)->isValid()  ) {
            $em = $this->getDoctrine()->getManager();
            $chapter->setIdCourse($idCourse);
            $chapter->setChapternumber($num_chapitre);
            $em->persist($chapter);
       
            $em->flush();
           
            return $this->redirectToRoute('mooc_quizz_add', array('id_chapter' => $chapter->getIdChapter()));
        }
         

       
   
         return $this->render('MoocCourseBundle:Chapter:finalchapter.html.twig', array(
            'entity' => $chapter,
            'form'   => $form->createView(),
             'chapternumber' => $num_chapitre,
             'idCourse'=> $idCourse
        ));
}
 
}
