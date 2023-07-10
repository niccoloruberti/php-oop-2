<?php

class Product {
    public $name;
    public $price;
    public $animalType;
    public $imgUrl;

    function __construct ($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

?>