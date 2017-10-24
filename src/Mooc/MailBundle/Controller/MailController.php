<?php
namespace Mooc\MailBundle\Controller;
use Swift_Message;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MailBundle\Entity\Mail;
use Mooc\MailBundle\Form\MailType;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MailControler
 *
 * @author AsusPc
 */
class MailController extends Controller {

    
    public function indexAction() {
        
        return $this->render('MoocMailBundle:Default:mail.html.twig', array()); }
        
   public function sendMailAction(Request $request) 
           
           { $to = "next.mooc@gmail.com"; $mail = new Mail(); 
           $form= $this->createForm(new MailType(), $mail);
           $request->get('request'); $form->handleRequest($request) ;
           if ($form->isValid()) { $message = Swift_Message::newInstance() 
                   ->setSubject($mail->getNom()) 
                   ->setFrom($mail->getFromAdd()) 
                   ->setTo($to) 
                   ->setBody($mail->getText()); 
           $this->get('mailer')->send($message); 
           return $this->render('MoocMailBundle:Default:mail.html.twig', array('to' => $to, 'fromAdd' => $mail-> getFromAdd() )); } return $this->redirect($this->generateUrl('my_app_mail_form'));} 
           
     public function newAction() 
             { $mail = new Mail();
             $form= $this-> createForm(new MailType(), $mail); 
             $request = $this->get('request'); 
                     $form->handleRequest($request) ; 
             if ($form->isValid()) 
                 { $this->sendMailAction('next.mooc@gmail.com', $mail-> getFromAdd(), $mail->getNom(), $mail->getText()); } return $this->render('MoocMailBundle:Default:new.html.twig', array('form' => $form->createView())) ; }      
           
           }     
        
        

