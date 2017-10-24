<?php

namespace Mooc\QuizzBundle\Controller;

use Mooc\QuizzBundle\Entity\Certification;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DateTime;
class CertificationController extends Controller {

    public function addCertificationAction() {
         $badge=0;
        $Certification = new Certification();
        $idQuizz = $_GET['idQuizz'];
        $user=$this->container->get('security.context')->getToken()->getUser();
        $idUser = $user->getId();
        $note = $_GET['note'];
        $datePassed = date_create(date("Y/m/d"));
        $Certification->setIdUser($idUser);
        $Certification->setQuizzName($idQuizz);
        $Certification->setGrade($note);
        $Certification->setDatePassed($datePassed);
        $em = $this->getDoctrine()->getManager();
        $listeQuizz = $em->getRepository('MoocQuizzBundle:Certification')->findBy(
                array('idQuizz' => $idQuizz, 'idUser' => $idUser)
        );
        if (count($listeQuizz)>0) {
           $Certif="You already passed this quizz you can't get this certificate";
            } 
        else {
            if ($note>13)
            {$Certif="Congratulations on achieving the golden badge in this Quizz !";
            $badge=3;
            }
            else if ($note<13 &&$note>=8)
            {$Certif="Well done on achieving the silver badge in this Quizz";
            $badge=2;
            }
            else if ($note<8)
            {$Certif="You failed this quizz.";
            $badge=1;
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($Certification);
            $em->flush();
            }
        return $this->render('MoocQuizzBundle:Quizz:certification.html.twig' ,array ('certif'=>$Certif,'note'=>$note,'badge'=>$badge));
    }
    public function resultAction()
    {
     $note = substr($_GET['note'] , 2, 2)-25;   
     return $this->render('MoocQuizzBundle:Quizz:result.html.twig' ,array ('note'=>$note));   
    }

}
