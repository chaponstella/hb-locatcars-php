<?php

use App\Service\ServiceContainer;


$dbConfirguration = [
    'db' => [
    'dsn' => 'mysql:dbname=cars;host=localhost;charset=utf8',
    'username' => 'root',
    'password'=> ''
    ]
];

require_once __DIR__ . '/../vendor/autoload.php';

$container = new ServiceContainer($dbConfirguration);

require_once __DIR__ . '/routes.php';   
