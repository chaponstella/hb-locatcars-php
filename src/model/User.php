<?php

namespace App\Model;

class User {

    private $id;
    private $nom;
    private $psw;



    public function getId() {
        return $this->id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPsw() {
        return $this->psw;
    }

    public function setId(int $id) {
        return $this->id = $id;
    }

    public function setNom(string $nom) {
        return $this->nom = $nom;
    }

    public function setPsw(string $psw) {
        return $this->psw = $psw;
    }

    }