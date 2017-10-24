<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('courses', new Route('/', array(
    '_controller' => 'MoocCourseBundle:Courses:index',
)));

$collection->add('courses_show', new Route('/{id}/show', array(
    '_controller' => 'MoocCourseBundle:Courses:show',
)));

$collection->add('courses_new', new Route('/new', array(
    '_controller' => 'MoocCourseBundle:Courses:new',
)));

$collection->add('courses_create', new Route(
    '/create',
    array('_controller' => 'MoocCourseBundle:Courses:create'),
    array('_method' => 'post')
));

$collection->add('courses_edit', new Route('/{id}/edit', array(
    '_controller' => 'MoocCourseBundle:Courses:edit',
)));

$collection->add('courses_Validation', new Route('/{id}', array(
    '_controller' => 'MoocCourseBundle:Courses:Validation',
)));

$collection->add('courses_update', new Route(
    '/{id}/update',
    array('_controller' => 'MoocCourseBundle:Courses:update'),
    array('_method' => 'post|put')
));

$collection->add('courses_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'MoocCourseBundle:Courses:delete'),
    array('_method' => 'get|delete')
));
 
$collection->add('courses_follow', new Route(
    '/{idCourse}/{idUser}', 
    array('_controller' => 'MoocCourseBundle:Courses:followCourse'),
    array('_method' => 'get|delete')
));

 
 
return $collection;
