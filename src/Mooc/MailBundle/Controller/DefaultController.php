<?php

namespace Pidev\MailBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PidevMailBundle:Default:index.html.twig', array('name' => $name));
    }
}
