<?php
/**
 * Created by PhpStorm.
 * User: Alan
 * Date: 11/03/2019
 * Time: 22:46
 */

class Point {

    public $x;
    public $y;

    function move($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    function get($coord){
        /*
            if($coord == 'x'){
                return $this->x;
            } elseif( $coord == 'y')  {
                return $this->y;
            }

            if($coord == 'x')
                return $this->x;
            return $this->y;

            return $coord == 'x' ? $this->x : $this->y;
        */
        return $this->{$coord};
    }
}