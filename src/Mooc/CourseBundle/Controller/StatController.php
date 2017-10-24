<?php

namespace Mooc\CourseBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mooc\CourseBundle\Entity\Courses;
use Mooc\CourseBundle\Form\CoursesType;
use Ob\HighchartsBundle\Highcharts\Highchart;

/**
 * Courses controller.
 *
 */
class StatController extends Controller {

    public function StatAction() {

        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('Browser market shares at a specific website in 2010');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => false),
            'showInLegend' => true
        ));
        $data = array(
            array('Firefox', 45.0),
            array('IE', 26.8),
            array('Chrome', 12.8),
            array('Safari', 8.5),
            array('Opera', 6.2),
            array('Others', 0.7),
        );
        $ob->series(array(array('type' => 'pie', 'name' => 'Browser share', 'data' => $data)));
         return $this->render('MoocCourseBundle::Stat:Stat.html.twig', array(
        'chart' => $ob
    ));
   }

}
