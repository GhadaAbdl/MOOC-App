<?php

namespace Mooc\ProfilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mooc\UserBundle\Entity\User;
use Mooc\UserBundle\Form\UserType;

class HomeController extends Controller
{
    public function HomeAction()
    {
        return $this->render('MoocProfilBundle:Home:home.html.twig');
    }
    
    public function alluserAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $users = $em->getRepository("MoocUserBundle:User")->findAll();
        return $this->render('MoocProfilBundle:Home:alluser.html.twig', array('users' => $users));
    }
    
    public function otheruserAction(User $user)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $users = $em->getRepository("MoocUserBundle:User")->findOneBy(array('id'=>$user->getId()));
        return $this->render('MoocProfilBundle:Home:otheruser.html.twig', array('user' => $users));
    }
    
    public function addAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $c = new User();
        $form = $this->createForm(new UserType(), $c);
          
        $request = $this->getRequest();
        if($request->isMethod('POST')){
            $form->submit($request); 
            if($form->isValid())
            {
            $c = $form->getData();
            $c->setEmailCanonical($c->getEmail());
            $c->setUsernameCanonical($c->getUsername());
            $c->setSurname($c->getUsername());
            $c->setType("Organism");
            $c->setRoles(array('ROLE_ORGANISM'));
            $c->setEnabled(false);
            $em->persist($c);
            $em->flush(); 
            return $this->redirect($this->generateUrl("mooc_profil_homepage"));
            }
        } 
        return $this->render('MoocProfilBundle:Home:add.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    
           
    public function disableAction(User $User)
    {
        $em = $this->getDoctrine()->getEntityManager();
   
          
            
            $User->setEnabled(FALSE);
            $em->persist($User);
            $em->flush();
            
   
        
        
              return $this->redirect($this->generateUrl("fos_user_security_logout"));

    }
    
     public function certifuserAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userid=$user->getId();
        $em = $this->getDoctrine()->getEntityManager();
        $certificates = $em->getRepository("MoocQuizzBundle:Certification")->findBy(array('idUser'=>$userid));
        return $this->render('MoocProfilBundle:Home:certifuser.html.twig', array('certificates' => $certificates));
    }
    
    
}
