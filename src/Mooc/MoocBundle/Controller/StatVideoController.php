<?php
namespace Mooc\MoocBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Mooc\MoocBundle\Entity\VideoConference;
use Mooc\MoocBundle\Form\VideoConferenceType;

use Ob\HighchartsBundle\Highcharts\Highchart;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of StatVideoController
 *
 * @author ASPIRE
 */
class StatVideoController extends Controller {

    public function StatAction(){
        
        $ob = new Highchart();
$ob->chart->renderTo('linechart');
$ob->title->text('Statistique');
$ob->plotOptions->pie(array(
    'allowPointSelect'  => true,
    'cursor'    => 'pointer',
    'dataLabels'    => array('enabled' => false),
    'showInLegend'  => true
));
$em=  $this->getDoctrine()->getEntityManager();
$query=$em->createQuery('SELECT AVG(s.participate) as Participate ,s.course as Course FROM MoocMoocBundle:VideoConference s group by s.participate');
$resultat = $query->getResult();
//var_dump($resultat);
$data = array();
foreach ($resultat as $values)
{
    $a = array($values['Course'], intval($values['Participate']));
    array_push($data, $a);
    
}
    
   
       $ob->series(array(array('type' => 'pie','name' => 'Browser share', 'data' => $data)));
  return $this->render('MoocMoocBundle:VideoConference:statVideo.html.twig', array(
    'chart' => $ob
          
          ));
        
        
    }

    
}
