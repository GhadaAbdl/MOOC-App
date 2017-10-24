<?php

namespace Mooc\MoocBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\VideoConference;
use Mooc\MoocBundle\Form\VideoConferenceType;
use Mooc\MoocBundle\Form\RechercheVideoType;
use Mooc\MoocBundle\Form\VideoType;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of videoconferenceController
 *
 * @author AsusPc
 */
class videoconferenceController extends Controller {

    //Fonction Ajouter
    public function videoAction() {
      
        $videoconference = new videoconference ;
        $form = $this->createForm(new VideoConferenceType, $videoconference );
        $request = $this->getRequest();
        
        if($request->isMethod('Post')){
            
            $form->bind($request);
if($form->isValid()){
    
    $contact = $form->getData();
    
    $em = $this->getDoctrine()->getManager();
    $em->persist($contact);
    $em->flush();
    
    
            return $this->redirect($this->generateUrl('pidev_mooc_videoconferenceShow'));

    
}
            }


        return $this->render('MoocMoocBundle:VideoConference:VideoConferenceAdd.html.twig',array('form'=>$form->createView()));
    }

    // Affichage liste video + pagination + Recherche 
    // Pour Formateur
    
    public function videoshowAction(Request $request)

    {
         $em    = $this->get('doctrine.orm.entity_manager');
    $dql   = "SELECT a FROM MoocMoocBundle:VideoConference a";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query,
        $request->query->get('page', 1)/*page number*/,
        10/*limit per page*/
    );

         $video = new VideoConference();
        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository("MoocMoocBundle:VideoConference")->findAll();
        $Form = $this->createForm(new RechercheVideoType(), $video);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isRequired()) {
        
            $videos = $em->
                            getRepository("MoocMoocBundle:VideoConference")->findVideoDQL($video->getCourse());
            $rech= $Form['course']->getData();
        }
    
    return $this->render("MoocMoocBundle:VideoConference:VideoConferenceList.html.twig", array('pagination' => $pagination ,'Form' => $Form->createView(), 'patients' => $videos,'rech'=>$rech ));
  
        
        
    }
    
      // Fonction Update
    // Pour Formateur
     public function editAction($id, Request $request){
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('MoocMoocBundle:VideoConference')->find($id);
        
        $form = $this->createForm(new VideoType(), $modele);
        $form->remove('Add');
        $form->add('Valid', 'submit');
        
        if($form->handleRequest($request)->isValid()){
            $em->flush();
            return $this->redirectToRoute('pidev_mooc_videoconferenceShow');
        }
        
        return $this->render('MoocMoocBundle:VideoConference:VideoConferencEdit.html.twig', 
                array('form'=>$form->createView()));
        
        
    }
      // Fonction delete
    // Pour Formateur
  public function deleteAction($id){
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('MoocMoocBundle:VideoConference')->find($id);
        $em->remove($modele);
        $em->flush();
        return $this->redirectToRoute('pidev_mooc_videoconferenceShow');
    }
    
      //Participe + recherche + pagination
    // Pour Aprennant
    
      public function participateAction($id ,Request $request){
      
        $modele = new VideoConference();
        $em = $this->getDoctrine()->getManager();
        $modele = $em->getRepository('MoocMoocBundle:VideoConference')->find($id);
        $modele->setParticipate($modele->getParticipate()+1);
        $em->persist($modele);
        $em->flush();
              $em    = $this->get('doctrine.orm.entity_manager');
    $dql   = "SELECT a FROM MoocMoocBundle:VideoConference a";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query,
        $request->query->get('page', 1)/*page number*/,
        10/*limit per page*/
    );

      
        
             
           $video = new VideoConference();
        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository("MoocMoocBundle:VideoConference")->findAll();
        $Form = $this->createForm(new RechercheVideoType(), $video);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isRequired()) {
        
            $videos = $em->
                            getRepository("MoocMoocBundle:VideoConference")->findVideoDQL($video->getCourse());
            $rech= $Form['course']->getData();
        }
    
    return $this->render("MoocMoocBundle:VideoConference:VideoConferenceList.html.twig", array('pagination' => $pagination ,'Form' => $Form->createView(), 'patients' => $videos,'rech'=>$rech ));
  
        
        
    }
    
      // Affichage liste video + pagination + Recherche 
    // Pour Formateur
    
    public function videoshowAppAction(Request $request)

    {
         $em    = $this->get('doctrine.orm.entity_manager');
    $dql   = "SELECT a FROM MoocMoocBundle:VideoConference a";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query,
        $request->query->get('page', 1)/*page number*/,
        10/*limit per page*/
            
            
    );
       $video = new VideoConference();
        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository("MoocMoocBundle:VideoConference")->findAll();
        $Form = $this->createForm(new RechercheVideoType(), $video);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isRequired()) {
        
            $videos = $em->
                            getRepository("MoocMoocBundle:VideoConference")->findVideoDQL($video->getCourse());
            $rech= $Form['course']->getData();
        }
    
    // parameters to template
    return $this->render("MoocMoocBundle:VideoConference:VideoConferenceApp.html.twig", array('pagination' => $pagination ,'Form' => $Form->createView(), 'patients' => $videos,'rech'=>$rech ));
  
        
    }
    
      // Affichage video Link
    // Pour Formateur +Apprennant
    
     public function videoyoutubeAction($id)
    { $em = $this->getDoctrine()->getManager();
     $modele = new VideoConference();
                 $modele = $em->getRepository('MoocMoocBundle:VideoConference')->find($id);
                 $em->persist($modele);
        $em->flush();

      
        return $this->render('MoocMoocBundle:VideoConference:Video.html.twig ', array('video' => $modele));
    }
    
      // Recherche
    // Pour Formateur
    
     public function VideoSearchAction()

    {
        $video = new VideoConference();
        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository("MoocMoocBundle:VideoConference")->findAll();
        $Form = $this->createForm(new RechercheVideoType(), $video);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isRequired()) {
        
            $videos = $em->
                            getRepository("MoocMoocBundle:VideoConference")->findVideoDQL($video->getCourse());
            $rech= $Form['course']->getData();
        }
        return $this->render("MoocMoocBundle:VideoConference:SearchResult.html.twig", array('Form' => $Form->createView(), 'video' => $videos,'rech'=>$rech ));
    }
    
    
          // Recherche 
    // Pour Apprenant
     public function VideoSearchAppAction()

    {
        $video = new VideoConference();
        $em = $this->getDoctrine()->getManager();
        $videos = $em->getRepository("MoocMoocBundle:VideoConference")->findAll();
        $Form = $this->createForm(new RechercheVideoType(), $video);
        $request = $this->get('request_stack')->getCurrentRequest();
        $Form->handleRequest($request);
        if ($Form->isRequired()) {
        
            $videos = $em->
                            getRepository("MoocMoocBundle:VideoConference")->findVideoDQL($video->getCourse());
            $rech= $Form['course']->getData();
        }
        return $this->render("MoocMoocBundle:VideoConference:SearchResultApp.html.twig", array('Form' => $Form->createView(), 'video' => $videos,'rech'=>$rech ));
    }
    
}

