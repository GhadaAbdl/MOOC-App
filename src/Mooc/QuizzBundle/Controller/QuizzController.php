<?php

namespace Mooc\QuizzBundle\Controller;

use Mooc\QuizzBundle\Entity\Quizz;
use Mooc\QuizzBundle\Entity\QuizzContent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\QuizzBundle\Form\QuizzType;
use Mooc\QuizzBundle\Form\QuizzContentType;

class QuizzController extends Controller {

    public function addQuizzAction($id_chapter) {
        $Quizz = new Quizz();
         $user = $this->container->get('security.context')->getToken()->getUser();
        $request = $this->get('request');
        $form = $this->createForm(new QuizzType(), $Quizz);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $Quizz->setIdUser($user->getId());
            $Quizz->setIdChapter($id_chapter);
            $Quizz->setMandatory(1);
            $Quizz->setDate(date_create(date("Y/m/d")));
            $em->persist($Quizz);
            $em->flush();
            $idQuizz = $Quizz->getId();
            return $this->redirectToRoute('mooc_question_addM', array('idQuizz' => $idQuizz, 'questionNumber' => 1));
        }

        return $this->render('MoocQuizzBundle:Quizz:addquizz.html.twig', array('form' => $form->createView(),
        ));
    }
    public function addQuizzNonMandatoryAction($id_course,$id_chapter,$chapterNumber) {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $Quizz = new Quizz();
        $request = $this->get('request');
        $form = $this->createFormBuilder($Quizz)
            ->add('name')
            ->getForm();
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $Quizz->setIdUser($user->getId());
            $Quizz->setIdChapter($id_chapter);
            $Quizz->setMandatory(0);
            $Quizz->setDuration(0);
            $Quizz->setDate(date_create(date("Y/m/d")));
            $em->persist($Quizz);
            $em->flush();
            $idQuizz = $Quizz->getId();
             return $this->redirectToRoute('mooc_question_add', array('idQuizz' => $idQuizz, 'questionNumber' => 1,'id_course'=>$id_course,'id_chapter'=>$id_chapter,'chapterNumber'=>$chapterNumber));
        }

        return $this->render('MoocQuizzBundle:Quizz:addquizz.html.twig', array('form' => $form->createView(),
        ));
    }
  public function addQuestionMAction() {

        $QuizzContent = new QuizzContent();
        $form = $this->createForm(new QuizzContentType(), $QuizzContent);
        $request = $this->get('request');
        $idQuizz = $_GET['idQuizz'];
        $questionNumber = $_GET['questionNumber'];
        if ($form->handleRequest($request)->isValid() && $questionNumber < 16) {
            $em = $this->getDoctrine()->getManager();
            $QuizzContent->setIdQuizz($idQuizz);
            $em->persist($QuizzContent);
            $em->flush();
            $questionNumber++;
            return $this->redirectToRoute('mooc_question_addM', array('idQuizz' => $idQuizz, 'questionNumber' => $questionNumber));
        } else if ($questionNumber >= 16) {
            
            return $this->redirect($this->generateUrl('MyCourses_show',array('id' => 0 ))) ;
        }

        return $this->render('MoocQuizzBundle:Quizz:addquestion.html.twig', array('questionNumberTwig' => $questionNumber, 'form1' => $form->createView()));
    }
    public function addQuestionAction($id_course,$id_chapter,$chapterNumber) {

        $QuizzContent = new QuizzContent();
        $form = $this->createForm(new QuizzContentType(), $QuizzContent);
        $request = $this->get('request');
        $idQuizz = $_GET['idQuizz'];
        $questionNumber = $_GET['questionNumber'];
        if ($form->handleRequest($request)->isValid() && $questionNumber < 16) {
            $em = $this->getDoctrine()->getManager();
            $QuizzContent->setIdQuizz($idQuizz);
            $em->persist($QuizzContent);
            $em->flush();
            $questionNumber++;
            return $this->redirectToRoute('mooc_question_add', array('idQuizz' => $idQuizz, 'questionNumber' => $questionNumber,'id_course'=>$id_course,'id_chapter'=>$id_chapter,'chapterNumber'=>$chapterNumber));
        } else if ($questionNumber >= 16) {
            
            return $this->redirect($this->generateUrl('chapter_new',array('chapternumber' => $chapterNumber, 'idCourse' => $id_course ))) ;
        }

        return $this->render('MoocQuizzBundle:Quizz:addquestion.html.twig', array('questionNumberTwig' => $questionNumber, 'form1' => $form->createView(),'id_course'=>$id_course,'id_chapter'=>$id_chapter,'chapterNumber'=>$chapterNumber));
    }

    public function getQuizzAction($idChapter) {
        $em = $this->getDoctrine()->getManager();
        $Q =$em->getRepository('MoocQuizzBundle:Quizz')->findBy(array('idChapter' => $idChapter));
        $listeQuizz = $em->getRepository('MoocQuizzBundle:QuizzContent')->findBy(
                array('idQuizz' => $Q[0]->getId())
        );
        $Quizz = $em->getRepository('MoocQuizzBundle:Quizz')->findBy(
                array('idQuizz' => $Q[0]->getId())
        );
        return $this->render('MoocQuizzBundle:Quizz:passquizz.html.twig', array('listeQuizz' => $listeQuizz, 'Quizz' => $Quizz));
    }
     public function getNmQuizzAction($idChapter) {
        $em = $this->getDoctrine()->getManager();
        $Q =$em->getRepository('MoocQuizzBundle:Quizz')->findBy(array('idChapter' => $idChapter));
        $listeQuizz = $em->getRepository('MoocQuizzBundle:QuizzContent')->findBy(
                array('idQuizz' => $Q[0]->getId())
        );
        $Quizz = $em->getRepository('MoocQuizzBundle:Quizz')->findBy(
                array('idQuizz' => $Q[0]->getId())
        );
        return $this->render('MoocQuizzBundle:Quizz:passnmquizz.html.twig', array('listeQuizz' => $listeQuizz, 'Quizz' => $Quizz));
    }

    public function listQuizzAction() {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.context')->getToken()->getUser();

        $listeQuizz = $em->getRepository('MoocQuizzBundle:Quizz')->findBy(
                array('idUser' => $user->getId())
        );
        return $this->render('MoocQuizzBundle:Quizz:listquizz.html.twig', array('listeQuizz' => $listeQuizz));
    }

    public function listQuestionAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $listeQuestion = $em->getRepository('MoocQuizzBundle:QuizzContent')->findBy(
                array('idQuizz' => $id)
        );

        return $this->render('MoocQuizzBundle:Quizz:listquestion.html.twig', array('listeQuestion' => $listeQuestion));
    }

    public function updateQuizzAction($id) {
        
        $em = $this->getDoctrine()->getManager();
        $quizz = $em->getRepository('MoocQuizzBundle:Quizz')->find($id);
        $request = $this->get('request');
        if (NULL === $quizz) {
            throw new NotFoundHttpException("Quizz introuvable");
        }
        $form = $this->createForm(new QuizzType(), $quizz);
        if ($form->handleRequest($request)->isValid()) {
            $em->flush();
            return $this->redirectToRoute('mooc_quizz_list');
        }
        return $this->render('MoocQuizzBundle:Quizz:updatequizz.html.twig', array('form' => $form->createView(),
                    'listeQuizz' => $quizz)
        );
    }

    public function updateQuestionAction($id) {
        $em = $this->getDoctrine()->getManager();
        $quizzContent= new QuizzContent();
        $quizzContent = $em->getRepository('MoocQuizzBundle:QuizzContent')->find($id);
        $request = $this->get('request');
        if (NULL === $quizzContent) {
            throw new NotFoundHttpException("Quizz introuvable");
        }
        $form = $this->createForm(new QuizzContentType(), $quizzContent);
        if ($form->handleRequest($request)->isValid()) {
            $em->flush();
            return $this->redirectToRoute('mooc_quizzcontent_list',array('id'=>$quizzContent->getIdQuizz()));
        }
        return $this->render('MoocQuizzBundle:Quizz:updatequestion.html.twig', array('form' => $form->createView(),
                    'listeQuestion' => $quizzContent)
        );
    }

}
