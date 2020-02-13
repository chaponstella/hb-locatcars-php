<?php

namespace App\Service;

use App\model\Car;
use PDO;

class CarManager implements ManagerInterface{

private $pdo;

public function arrayToObject(array $array){
    $car = new Car;
    $car->setId($array['id']);
    $car->setBrand($array['brand']);
    $car->setModel($array['model']);

    return $car;

}

public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
}

    public function findAll(){

        $query = "SELECT * FROM car";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        $cars = [];

        foreach($data as $d) {
        $cars[]= $this->arrayToObject($d);

    }
        return $cars;

    }

    public function findOneById(int $id){

        $query = "SELECT * FROM `car` WHERE id= :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute(['id' => $id]);

        $data = $statement->fetch(PDO::FETCH_ASSOC);

        $cars = $this->arrayToObject($data);
        return $cars;

    }

    

    public function findByField(string $field, string $value){

    }
}