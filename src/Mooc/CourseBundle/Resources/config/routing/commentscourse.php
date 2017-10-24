<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('commentscourse', new Route('/', array(
    '_controller' => 'MoocCourseBundle:Commentscourse:index',
)));

$collection->add('commentscourse_show', new Route('/{id}/show', array(
    '_controller' => 'MoocCourseBundle:Commentscourse:show',
)));

$collection->add('commentscourse_new', new Route('/new', array(
    '_controller' => 'MoocCourseBundle:Commentscourse:new',
)));

$collection->add('commentscourse_create', new Route(
    '/create',
    array('_controller' => 'MoocCourseBundle:Commentscourse:create'),
    array('_method' => 'post')
));

$collection->add('commentscourse_edit', new Route('/{id}/edit', array(
    '_controller' => 'MoocCourseBundle:Commentscourse:edit',
)));

$collection->add('commentscourse_update', new Route(
    '/{id}/update',
    array('_controller' => 'MoocCourseBundle:Commentscourse:update'),
    array('_method' => 'post|put')
));

$collection->add('commentscourse_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'MoocCourseBundle:Commentscourse:delete'),
    array('_method' => 'post|delete')
));

return $collection;
