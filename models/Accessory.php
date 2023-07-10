<?php

class Accessory extends Product {
    public $material;
    public $dimension;

    function __construct ($name, $price, $material, $dimension) {
        parent::__construct($name, $price);
        $this->material = $material;
        $this->dimension = $dimension;
    }

}

?>