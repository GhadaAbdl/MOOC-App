<?php

namespace Mooc\CourseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mooc\CourseBundle\Entity\Courses;
use Mooc\CourseBundle\Form\CoursesType;

/**
 * Courses controller.
 *
 */
class CoursesController extends Controller {

    /**
     * Lists all Courses entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
    $user = $this->container->get('security.context')->getToken()->getUser();
    if($user->hasRole("ROLE_PEDAGOGUE")){
        $entities = $em->getRepository('MoocCourseBundle:Courses')->findAll();
    }
    else 
    {
        
        $entities = $em->getRepository('MoocCourseBundle:Courses')->findBy(array('validation'=>1));
    }
        return $this->render('MoocCourseBundle:Courses:index.html.twig', array(
                    'entities' => $entities,
                    'All'=>'All Courses',
                    'id_user'=>$user->getId(),
                    
        ));
    }
    
    public function FindByTypeAction($type) {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();
          if($user->hasRole("ROLE_PEDAGOGUE")){
              
              $entities = $em->getRepository('MoocCourseBundle:Courses')->findBy(array('discipline'=>$type));
          }
          else {
        $entities = $em->getRepository('MoocCourseBundle:Courses')->findBy(array('discipline'=>$type,'validation'=>1));
          }
        return $this->render('MoocCourseBundle:Courses:index.html.twig', array(
                    'entities' => $entities,
                    'All'=>$type,
                    'id_user'=>$user->getId(),
        ));
    }
    
    
    
    
    //////////////////
    
    
    
    
    /**
     * Creates a new Courses entity.
     *
     */
    public function createAction(Request $request) {
        $user = $this->container->get('security.context')->getToken()->getUser();
        
        $entity = new Courses();
        $entity->setContent(' ');
        $entity->setValidation(0);
        $entity->setNumberofchapters(1);
        $entity->setIdwriter($user->getId());
        $entity->setRating(0);
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        
        if ($form->isValid()) { 
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
                
            
            
            return $this->redirectToRoute('chapter_new', array(
                        'idCourse' => $entity->getIdCourse(),
                        'chapternumber' => '1',
                        
                         
            ));
        }

        return $this->render('MoocCourseBundle:Courses:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Courses entity.
     *
     * @param Courses $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Courses $entity) {
        $form = $this->createForm(new CoursesType(), $entity, array(
            'action' => $this->generateUrl('courses_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }
    
    

    /**
     * Displays a form to create a new Courses entity.
     *
     */
    public function newAction() {
        $entity = new Courses();
        $form = $this->createCreateForm($entity);

        return $this->render('MoocCourseBundle:Courses:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Courses entity.
     *
     */
    public function showAction($id) {

        $em = $this->getDoctrine()->getManager();
        
        $entity = $em->getRepository('MoocCourseBundle:Courses')->find($id);
        $comments = $em->getRepository('MoocCourseBundle:Commentscourse')->findBy(array('idCourse' => $id));
        $listchapter = $em->getRepository('MoocCourseBundle:Chapter')->findBy(array('idCourse' => $id));
        $q=$em->getRepository('MoocQuizzBundle:Quizz')->findBy(array('idChapter'=>$listchapter[0]->getIdChapter()));
        if (count($q)>0)
        {$quizz=1;}
        else
        {$quizz=0;}
        
        $request = $this->getRequest();
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Courses entity.');
        }
        $chapterCount=count($listchapter);

        //////////////////////////////
        $CourseChapters = $this->get('knp_paginator')->paginate(
                $listchapter, $request->query->get('page', 1)/* page number */, 1/* limit per page */
        );
      
            
//////////////////////////////
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocCourseBundle:Courses:show.html.twig', array(
                    'chapterCount'=>$chapterCount,
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
                    'comments' => $comments,
                    'entities' => $CourseChapters,
                    'id_chapter'=>$listchapter[0]->getIdChapter() ,
                    'quizz'=> $quizz,
        ));
    }

    /**
     * Displays a form to edit an existing Courses entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Courses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Courses entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MoocCourseBundle:Courses:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Courses entity.
     *
     * @param Courses $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Courses $entity) {
        $form = $this->createForm(new CoursesType(), $entity, array(
            'action' => $this->generateUrl('courses_update', array('id' => $entity->getIdCourse())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Courses entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MoocCourseBundle:Courses')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Courses entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('courses_edit', array('id' => $id)));
        }

        return $this->render('MoocCourseBundle:Courses:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Courses entity.
     *
     */
    public function deleteAction(Request $request, $id) {


        $em = $this->getDoctrine()->getManager();
        $entity = new Courses();
        $entity = $em->getRepository('MoocCourseBundle:Courses')->find($id);
        $the_id_user = $entity->getIdwriter();
            
        $follows=$em->getRepository('MoocCourseBundle:Followcourse')->findBy(array('idCourse'=>$entity->getIdCourse()));
        $comments=$em->getRepository('MoocCourseBundle:Commentscourse')->findBy(array('idCourse'=>$entity->getIdCourse()));
        $chapters=$em->getRepository('MoocCourseBundle:Chapter')->findBy(array('idCourse'=>$entity->getIdCourse()));
 


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Courses entity.');
        }
 

        
        foreach   ( $follows as $test)
        {  $em->remove($test) ;}
        $em->remove($entity);
        foreach   ($comments as $test )
        {  $em->remove($test) ;}
        $chap=new \Mooc\CourseBundle\Entity\Chapter();
        foreach ($chapters as $chap)
        {
      $quizz=$em->getRepository('MoocQuizzBundle:Quizz')->findBy(array('idChapter'=>$chap->getIdChapter()));
      $em->remove($chap);
      foreach($quizz as $q)
      { $quizzcontent=$em->getRepository('MoocQuizzBundle:QuizzContent')->findBy(array('idQuizz'=>$q->getId()));
      $em->remove($q);
      foreach($quizzcontent as $qc)
      {
      $em->remove($qc);
      }
      
        }}
         
        $em->flush();


        return $this->redirect($this->generateUrl('MyCourses_show'));
    }

    /**
     * Creates a form to delete a Courses entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('courses_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

    public function showMyCoursesAction() {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MoocCourseBundle:Courses')->findBy(array('idwriter' => $user->getId()));
        
        


        $deleteForm = $this->createDeleteForm($user->getId());
        
        return $this->render('MoocCourseBundle:Courses:MyCourses.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    
        public function ValidationAction(  $id) {
        $em = $this->getDoctrine()->getManager();
        $entity= new Courses();
        $entity = $em->getRepository('MoocCourseBundle:Courses')->find($id);
        $entity->setValidation(1);
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Courses entity.');
        }
         $em->persist($entity);
            $em->flush();
 

            return $this->redirect($this->generateUrl('courses' ));
        
    } 
    
    public function followCourseAction($idCourse,$idUser) {
        $em = $this->getDoctrine()->getManager();
        $entity= new \Mooc\CourseBundle\Entity\Followcourse();
        
        $entity->setIdUser($idUser);
        $entity->setInscriptiondate(new \Datetime());
        $entity->setidCourse($idCourse);
        $entity->setNote(0);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Courses entity.');
        }
         $em->persist($entity);
            $em->flush();
 

            return $this->redirect($this->generateUrl('courses' ));
    }
    
}
