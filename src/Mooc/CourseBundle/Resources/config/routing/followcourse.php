<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('followcourse', new Route('/', array(
    '_controller' => 'MoocCourseBundle:Followcourse:index',
)));

$collection->add('followcourse_show', new Route('/{id}/show', array(
    '_controller' => 'MoocCourseBundle:Followcourse:show',
)));

$collection->add('followcourse_new', new Route('/new', array(
    '_controller' => 'MoocCourseBundle:Followcourse:new',
)));

$collection->add('followcourse_create', new Route(
    '/create',
    array('_controller' => 'MoocCourseBundle:Followcourse:create'),
    array('_method' => 'post')
));

$collection->add('followcourse_edit', new Route('/{id}/edit', array(
    '_controller' => 'MoocCourseBundle:Followcourse:edit',
)));

$collection->add('followcourse_update', new Route(
    '/{id}/update',
    array('_controller' => 'MoocCourseBundle:Followcourse:update'),
    array('_method' => 'post|put')
));

$collection->add('followcourse_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'MoocCourseBundle:Followcourse:delete'),
    array('_method' => 'post|delete')
));

return $collection;
