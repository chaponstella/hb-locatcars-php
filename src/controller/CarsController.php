<?php


namespace App\Controller;

class CarsController {
    
    public function index() {

$cars = [
    [
        "brand" => "Ford",
        "model" => "Fiesta"
    ],
    [
        "brand" => "BMW",
        "model" => "Série 1"
    ]
    ];

        include_once __DIR__ . '/../../template/cars/index.php';
    }
}