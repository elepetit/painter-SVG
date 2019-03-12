<?php


class Circle extends Shape {

    public $radius;
    public $radiusY;

    function setRadius($radius){
        $this->radius = $radius;

    }
    function setRadiusY($radiusY){
        $this->radiusY = $radiusY;

    }

    function draw(){

        if($this->radiusY){

            return array($this->posX, $this->posY, $this->radius, $this->radiusY, $this->color, $this->stroke, $this->opacity);
        }
        else{

            return array($this->posX, $this->posY, $this->radius, $this->color, $this->stroke, $this->opacity);
        }

    }

}
