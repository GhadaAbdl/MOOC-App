<?php

namespace PiBundle\Controller;

use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller {

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('PiBundle:Users');

        $resultat = $repo->CountApprenant();
        return $this->render('PiBundle:Users:test.html.twig', array('m' => $resultat));
    }
    public function ListeUsersAction(){
        return $this->render('PiBundle:Users:ListeUsers.html.twig');
    }
    public function chartAction() {
//        $em=  $this->getDoctrine()->getEntityManager();
//$query=$em->createQuery('SELECT AVG(s.quantite) as Quantite ,s.typeStock as TYPE FROM PidevTunisiaMallBundle:Stock s group by s.quantite');
//$resultat = $query->getResult();
////var_dump($resultat);
//$data = array();
//foreach ($resultat as $values)
//{
//    $a = array($values['TYPE'], intval($values['Quantite']));
//    array_push($data, $a);
//    
//}
//Fin de la conversation

        $em = $this->getDoctrine()->getManager();
        $courses = $em->getRepository("MoocMoocBundle:Courses")->findAll();
       
        $repo = $em->getRepository('PiBundle:Users');
        $liste = $repo->ListOrganisation();
        $l= count($liste);
        $resultat = $repo->CountApprenant();
        $r = count($resultat);
        $resultat1 =$repo->CountFormateur();
        $a= count($resultat1);
        $presult= $repo->CountPedagogue();
        $p=  count($presult);
        $total = $repo->findAll();
        $users = count($total);
        // Chart
        $series = array(
            array("name" => "Formateur", "data" => array($r, 2, 4, 5, 6, 3, 8))
        );
//           Statistique en fonction du temps (Formateur)
        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text('Rapport sur les Formateurs');
        $ob->xAxis->title(array('text' => "Temps"));
        $ob->yAxis->title(array('text' => "Nombre de Formateur"));
        $ob->series($series);
//           PieChart sur tout les utilisateurs
        $ob1 = new Highchart();
        $ob1->chart->renderTo('piechart');
        $ob1->title->text('Les types d\'utilisateur');
        $ob1->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $data = array(
            array('Formateur', $r ),
            array('Organisme', $l),
            array('Apprenant', $a),
            array('Pedagogue', $p),
        );
        $ob1->series(array(array('type' => 'pie', 'name' => 'Nombre', 'data' => $data)));
         $user = $this->container->get('security.context')->getToken()->getUser();
        return $this->render('PiBundle:Users:Acceuil.html.twig', array(
                    'chart' => $ob,
                    'nbr' => $users,
                    'pie' => $ob1,
                    'liste' => $liste,
                    'nbrorg'=>$l,
            'cour' => $courses,
                    'user'=>$user->getSurname()));
    }
    public function ProfilOrganismeAction($surname){
        $em = $this->getDoctrine()->getEntityManager();
        $users = $em->getRepository("MoocUserBundle:User")->findOneBy(array('surname'=>$surname));
        return $this->render('MoocProfilBundle:Home:otheruser.html.twig', array('user' => $users));
    }
    public function AccepterOrganismeAction($id) {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('PiBundle:Users');
//        $liste = $repo->ListOrganisation();
//        $resultat = $repo->CountApprenant();
//        $r = count($resultat);
//        $total = $repo->findAll();
//        $users = count($total);// Chart
//     $series = array(array("name" => "Formateur", "data" => array($r, 2, 4, 5, 6, 3, 8)));//           Statistique en fonction du temps (Formateur)
//        $ob = new Highchart();
//        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
//        $ob->title->text('Rapport sur les Formateurs');
//        $ob->xAxis->title(array('text' => "Temps"));
//        $ob->yAxis->title(array('text' => "Nombre de Formateur"));
//        $ob->series($series);//           PieChart sur tout les utilisateurs
//        $ob1 = new Highchart();
//        $ob1->chart->renderTo('piechart');
//        $ob1->title->text('Browser market shares at a specific website in 2010');
//        $ob1->plotOptions->pie(array(
//            'allowPointSelect' => true,
//            'cursor' => 'pointer',
//            'dataLabels' => array('enabled' => false),
//            'showInLegend' => true        ));
//        $data = array(  array('Formateur', 45.0),
//            array('Organisme', 26.8),
//            array('Apprenant', 12.8),
//            array('Pedagogue', 8.5),        );
//        $ob1->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
        
        $repo->AccepteOrganisme($id);
        
        return $this->chartAction();
    }
    

}
