<?php


class Rectangle extends Shape {

    protected $width;
    protected $height;

    function setSize($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    function draw(){
        return
            array($this->posX, $this->width, $this->height, $this->color, $this->stroke, $this->opacity);
    }
}
