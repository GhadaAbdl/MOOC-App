<?php

namespace Mooc\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MoocProfilBundle:Default:index.html.twig');
    }
}
