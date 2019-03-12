<?php

class Shape {

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

    function draw(){}

}
