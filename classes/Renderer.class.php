<?php
/**
 * Created by PhpStorm.
 * User: emmanuellepetit
 * Date: 2019-03-12
 * Time: 09:20
 */

class Renderer
{

    public function renderScheme($fileName){

        return Tools::get_txt($fileName);

    }
    public function drawRect($rectangle){


        $attrs = json_encode(array('type'=>'rect', 'x'=> $rectangle->posX, 'y'=> $rectangle->posX, 'width'=>$rectangle->width, 'height'=> $rectangle->height, 'fill'=> $rectangle->color, 'stroke' => $rectangle->stroke, 'opacity' => $rectangle->opacity)) ;

        return $attrs;

    }

    public function drawCircle($circle){

        return

            json_encode(array('type'=>'ellipse', 'cx'=>$circle->posX, 'cy'=> $circle->posY, 'rx'=> $circle->radius, 'ry'=> $circle->radiusY, 'fill' => $circle->color, 'stroke'=> $circle->stroke, 'opacity'=>$circle->opacity));
    }

    public function drawPolygon($polygon){

        return json_encode(array('type'=>'polygon', 'points'=>$polygon->getPoints(), 'fill'=> $polygon->color, 'stroke'=>$polygon->stroke, 'opacity'=>$polygon->opacity));
    }

    public function drawPath($path,$bdrColor, $bckColor, $opacity){

        return json_encode(array('type'=> 'path', 'd'=>$path, 'fill'=>$bckColor, 'stroke'=>$bdrColor, 'opacity'=>$opacity));

    }
}
