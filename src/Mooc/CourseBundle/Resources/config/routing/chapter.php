<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('chapter', new Route('/', array(
    '_controller' => 'MoocCourseBundle:Chapter:index',
)));

$collection->add('chapter_show', new Route('/{id}/show', array(
    '_controller' => 'MoocCourseBundle:Chapter:show',
)));

$collection->add('chapter_new', new Route('/new/{chapternumber}/{idCourse}', array(
    '_controller' => 'MoocCourseBundle:Chapter:new',
)));

$collection->add('chapter_create', new Route(
    '/create/{chapternumber}/{idCourse}',
    array('_controller' => 'MoocCourseBundle:Chapter:create'),
    array('_method' => 'post|get')
));
$collection->add('chapter_Finishcreate', new Route(
    '/create/{chapternumber}/{idCourse}',
    array('_controller' => 'MoocCourseBundle:Chapter:Finishcreate'),
    array('_method' => 'post')
));

$collection->add('chapter_edit', new Route('/{id}/edit', array(
    '_controller' => 'MoocCourseBundle:Chapter:edit',
)));

$collection->add('chapter_update', new Route(
    '/{id}/update',
    array('_controller' => 'MoocCourseBundle:Chapter:update'),
    array('_method' => 'post|put')
));

$collection->add('chapter_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'MoocCourseBundle:Chapter:delete'),
    array('_method' => 'post|delete')
));

return $collection;
