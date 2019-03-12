<?php
require_once "classes/SvgColors.class.php";
require_once "classes/Program.class.php";
require_once "classes/Shape.class.php";
require_once "classes/Circle.class.php";
require_once "classes/Rectangle.class.php";
require_once "classes/Tools.class.php";
require_once "classes/Polygon.class.php";
require_once "classes/Point.class.php";
require_once "classes/Renderer.class.php";



$renderer = new Renderer();
$program = new Program($renderer);
$colors = $program->getColors();
$shapes = $renderer->renderScheme('shape.txt');

if(array_key_exists('shapeBtn', $_GET)){

    $posX = $_GET['posX'];
    $posY = $_GET['posY'];
    $radius = $_GET['radius'];
    $radiusY = $_GET['radiusY'];
    $bckColor = $_GET['bckColor'];
    $bdrColor = $_GET['bdrColor'];
    $path = $_GET['path'];
    $coords = explode(',',$_GET['coords']);
    var_dump($coords);
    switch ($_GET['shapeBtn']){
        case 'square':
            $program->drawSquare($posX,$posY,$radius, $bckColor, $bdrColor);
            break;
        case 'circle':
            $program->drawCircle($posX,$posY, $radius, $radiusY, $bckColor, $bdrColor);
            break;
        case 'polygon':
            $program->drawPolygon($coords, $bckColor, $bdrColor);
            break;
        case 'path':
            $program->drawPath($path,$bdrColor, $bckColor);
            break;
        case 'clear':
            $program->clearShape();
            break;
        default:
            return;
    }

    header('location: index.php');

}


if(array_key_exists('pointX', $_GET)){

    if($_GET['coords']){
        $coords = explode(',',$_GET['coords']);
    }
    else {
        $coords = [];
    }
    $x = intval($_GET['pointX']);
    $y = intval($_GET['pointY']);
    array_push($coords, $x,$y);
    $saveCoords = implode(',', $coords);

}

include "views/index.phtml";
