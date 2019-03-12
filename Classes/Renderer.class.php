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

        return

        "<rect x='$rectangle->posX' y='$rectangle->posX' width='$rectangle->width' height='$rectangle->height' fill='$rectangle->color' stroke='$rectangle->stroke' opacity='$rectangle->opacity'></rect>";

    }

    public function drawCircle($circle){

        return

            "<ellipse cx='$circle->posX' cy='$circle->posY' rx='$circle->radius' ry='$circle->radiusY' fill='$circle->color' stroke='$circle->stroke' opacity='$circle->opacity'></ellipse>";
    }

    public function drawPolygon($points){

        return "<polygon points='$points' ></polygon>";
    }
    public function drawPath($path,$bdrColor, $bckColor){

        return "<path d='".$path." fill='".$bckColor."' stroke='".$bdrColor."'/>";
    }
}
