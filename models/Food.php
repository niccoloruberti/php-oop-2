<?php

class Food extends Product {
    public $weigth;
    public $ingredients;

    function __construct ($name, $price, $weigth, $ingredients) {
        parent::__construct($name, $price);
        $this->weigth = $weigth;
        $this->ingredients = $ingredients;
    }

}

?>