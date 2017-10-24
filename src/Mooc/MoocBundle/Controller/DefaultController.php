<?php

namespace Mooc\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mooc\MoocBundle\Entity\Courses;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Form\RechercheType;

class DefaultController extends Controller
{
    public function indexAction()
    {
      $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository("MoocMoocBundle:Courses")->findAll();
        $videos=$em->getRepository("MoocMoocBundle:VideoConference")->selectVideoDQL();
        return $this->render("MoocMoocBundle:Default:index.html.twig", array('cour' => $courses , 'video' => $videos ));
    }
    
   public function aboutAction()
    {
      
        return $this->render("MoocMoocBundle:Default:about.html.twig");
    }
      public function termAction()
    {
      
        return $this->render("MoocMoocBundle:Default:terms.html.twig");
    }
    }

