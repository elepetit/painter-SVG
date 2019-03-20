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

if(array_key_exists('ajax', $_GET)){

    if($_GET['pointX']===''){

        $shapeType = $_GET['tool'];
        echo $program->addShape($shapeType, $_GET);
    }

    exit;
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
    exit;
}
if(array_key_exists('redraw', $_GET)){

    echo $renderer->renderScheme('shape.txt');
    exit;
}

include "views/index.xhtml";
