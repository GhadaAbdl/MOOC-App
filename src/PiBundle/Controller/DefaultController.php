<?php

namespace PiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PiBundle:Default:index.html.twig', array('name' => $name));
    }
}
