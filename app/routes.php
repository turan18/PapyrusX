<?php


$router->get('','PagesController@home');
$router->get('login','PagesController@home');
$router->post('login','SessionController@store');

$router->get('register','PagesController@register');
$router->post('register','UsersController@store');

$router->get('dashboard','PagesController@dashboard');
$router->get('create-class','PagesController@class_creation');
$router->post('create-class','CourseController@store');

$router->get('course','CourseController@show');
$router->post('course','RosterController@delete');
$router->get('course-edit','CourseController@update');
$router->post('course-edit','InvitationController@store');


