<?php

namespace Mooc\CourseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MoocCourseBundle:Default:index.html.twig', array('name' => $name));
    }
}
