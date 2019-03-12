<?php

abstract class Shape {
    /**
     * abstraite ne peut etre instanciée
     * pas de mebres privés
     * peut avoir function abstraites qui seront obligatoirement présentes chez les enfants
     */

    //public $posX;
    //public $posY;
    public $color;
    public $opacity;
    public $stroke;
    public $position;

    public function __construct() {
        $this->color = "red";
        $this->stroke = "black";
        $this->opacity = 1;
        $this->position = new Point();
    }

    function setColor($color){
        $this->color = $color;
    }

    function setPosition($posX, $posY){
        $this->position->move($posX, $posY);
    }

    function setStroke($stroke){
        $this->stroke = $stroke;
    }

    function setOpacity($opacity){
        $this->opacity = $opacity;
    }

    abstract public function draw();

}
