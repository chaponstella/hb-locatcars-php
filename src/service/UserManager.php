<?php

namespace App\Service;

use App\model\User;
use PDO;

class UserManager implements ManagerInterface{

private $pdo;

public function arrayToObject(array $array){
    $user = new User;
    $user->setId($array['id']);
    $user->setNom($array['nom']);
    $user->setPsw($array['psw']);

    return $user;

}

public function __construct(PDO $pdo) {
    $this->pdo = $pdo;
}

    public function findAll(){

        $query = "SELECT * FROM user";
        $statement = $this->pdo->prepare($query);
        $statement->execute();

        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        $users = [];

        foreach($data as $d) {
        $users[]= $this->arrayToObject($d);

    }
        return $users;

    }

    public function findOneById(int $id){
        $query = "SELECT * FROM `user` WHERE id= :id";
        $statement = $this->pdo->prepare($query);
        $statement->execute(['id' => $id]);

        $data = $statement->fetch(PDO::FETCH_ASSOC);

        $user = $this->arrayToObject($data);
        return $user;

    }

    public function findByField(string $field, string $value){

    }
}
