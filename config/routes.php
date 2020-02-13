<?php

$router = $container->getRouter();
$router->setNamespace('App\Controller');
$router->get('/cars', 'CarsController@index');
$router->get('/cars/(\d+)', 'CarsController@show');


$router->get('/users', 'UsersController@index');
$router->get('/users/(\d+)', 'UsersController@show');

    
$router->run();