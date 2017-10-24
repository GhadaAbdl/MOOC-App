<?php

namespace Mooc\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MoocQuizzBundle:Default:index.html.twig', array('name' => $name));
    }
}
