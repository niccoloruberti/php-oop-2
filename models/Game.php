<?php

class Game extends Product {
    public $feature;
    public $dimension;

    function __construct ($name, $price, $feature, $dimension) {
        parent::__construct($name, $price);
        $this->feature = $dimension;
        $this->dimension = $dimension;
    }

}

?>