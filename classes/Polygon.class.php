<?php

class Polygon extends Shape {

    public $points = [];


    function addPoints($x,$y){
        // compte des éléments du tableau
        $lastIndex = count($this->points);

        // ajout d'un nouveau point
        array_push($this->points, new Point());

        // positionne le point aux bonnes coordonnées
        $this->points[$lastIndex]->move($x,$y);
    }
    function getPoints(){

        $points="";

        foreach ($this->points as $point) {

            $points .= "$point->x ,$point->y ";
        }
        return $points;
    }
    function draw() {

        return array($this->getPoints(), $this->color, $this->stroke, $this->opacity);
    }

}
