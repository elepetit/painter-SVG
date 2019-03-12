<?php

class Program {

    public $html;
    public $renderer;

    public function __construct(Renderer $renderer) {
        $this->shapes = "";
        $this->renderer = $renderer;
    }

    function getColors(){

        $svgColors = new SvgColors();
        return $svgColors->getColors();

    }

    public function drawSquare($x,$y, $radius, $bckColor, $bdrColor){

        $rectangle = new Rectangle();
        $rectangle->setSize($radius, $radius);
        $rectangle->setPosition($x, $y);
        $rectangle->setColor($bckColor);
        $rectangle->setStroke($bdrColor);
        Tools::save_txt('shape.txt',[$this->renderer->drawRect($rectangle)]);

    }


    public function drawCircle($x,$y, $radius, $radiusY, $bckColor, $bdrColor){

        $cercle = new Circle();
        $cercle->setOpacity(.2);
        $cercle->setPosition($x, $y);
        $cercle->setRadius($radius);

        $cercle->setColor($bckColor);
        $cercle->setStroke($bdrColor);
        if($radiusY>0){
            $cercle->setRadiusY($radiusY);
        }
        else{
            $cercle->setRadiusY($radius);
        }
        Tools::save_txt('shape.txt',[$this->renderer->drawCircle($cercle)]);

    }


    public function drawPolygon($shape, $bckColor, $bdrColor){

        $polygon= new Polygon();
        for ($i=0;$i<count($shape);$i+=2){

            $polygon->addPoints($shape[$i], $shape[$i+1]);
        }
        $polygon->setColor($bckColor);
        $polygon->setStroke($bdrColor);
        Tools::save_txt('shape.txt',[$this->renderer->drawPolygon($polygon->draw())]);

    }
    public function drawPath($path, $bdrColor, $bckColor){
        Tools::save_txt('shape.txt', [$this->renderer->drawPath($path, $bdrColor, $bckColor)]);
    }

    public function clearShape(){
        Tools::clear_txt('shape.txt');
    }

}
