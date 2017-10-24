<?php
namespace Mooc\MoocBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\Courses;
use Mooc\MoocBundle\Form\RechercheType;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of coursesController
 *
 * @author AsusPc
 */
class coursesController extends Controller {

    
        public function rechercheCourAction() {
     
        return $this->render("MoocMoocBundle:Courses:search.html.twig");
    }
 public function CourSearchAction()

    {
        $course = new Courses();
        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository("MoocMoocBundle:Courses")->findAll();
        $Form = $this->createForm(new RechercheType(), $course);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isRequired()) {
        
            $courses = $em->
                            getRepository("MoocMoocBundle:Courses")->findCourseDQL($course->getCourseTitle());
            $rech= $Form['courseTitle']->getData();
        }
        return $this->render("MoocMoocBundle:Courses:search.html.twig", array('Form' => $Form->createView(), 'patients' => $courses,'rech'=>$rech ));
    }
    
    }
    
