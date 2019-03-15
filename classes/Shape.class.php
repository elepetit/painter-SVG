<?php

abstract class Shape {
    /**
     * abstraite ne peut etre instanciée
     * pas de mebres privés
     * peut avoir function abstraites qui seront obligatoirement présentes chez les enfants
     */

    public $posX;
    public $posY;
    public $color;
    public $opacity;
    public $stroke;

    public function __construct() {
        $this->color = "red";
        $this->stroke = "black";
        $this->opacity = 1;
        $this->posX = 0;
        $this->posY = 0;
    }

    function setColor($color){
        $this->color = $color;
    }


    function setPosition($posX, $posY){
        $this->posX = $posX;
        $this->posY = $posY;
    }

    function setStroke($stroke){
        $this->stroke = $stroke;
    }

    function setOpacity($opacity){
        $this->opacity = $opacity;
    }

    abstract public function draw();

}
