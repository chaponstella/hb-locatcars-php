<?php

namespace App\Model;

class Car {

    private $id;
    private $brand;
    private $model;



    public function getId() {
        return $this->id;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function setId(int $id) {
        return $this->id = $id;
    }

    public function setBrand(string $brand) {
        return $this->brand = $brand;
    }

    public function setModel(string $model) {
        return $this->model = $model;
    }

    }