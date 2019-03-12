<?php

class Polygon extends Shape {

    public $points = [];


    function addPoints($x,$y){
        // compte des éléments du tableau
        $lastIndex = count($this->points);

        // ajout d'un nouveau point
        array_push($this->points, new Point());

        // positionne le point au bonnes coordonées
        $this->points[$lastIndex]->move($x,$y);
    }

    function draw() {
        $points = "";

        foreach ($this->points as $point) {
            $points .= "$point->x,$point->y ";
        }

        return $points;
    }

}
