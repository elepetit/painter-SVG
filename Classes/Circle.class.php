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

            return array($this->position->x, $this->position->y, $this->radius, $this->radiusY, $this->color, $this->stroke, $this->opacity);
        }
        else{

            return array($this->position->x, $this->position->y, $this->radius, $this->color, $this->stroke, $this->opacity);
        }

    }

}
