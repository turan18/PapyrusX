<?php


$router->get('','PagesController@home');

$router->get('register','PagesController@register');
$router->post('register','UsersController@store');

$router->get('dashboard','PagesController@dashboard');
$router->get('create-class','PagesController@class_creation');