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
        return $this->renderer->drawRect($rectangle);
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
        return $this->renderer->drawCircle($cercle);
    }


    public function drawPolygon($shape, $bckColor, $bdrColor){

        $polygon= new Polygon();

        for ($i=0;$i<count($shape);$i+=2){

            $polygon->addPoints($shape[$i], $shape[$i+1]);
        }
        $polygon->setColor($bckColor);
        $polygon->setStroke($bdrColor);
        Tools::save_txt('shape.txt',[$this->renderer->drawPolygon($polygon->draw())]);
        return $this->renderer->drawPolygon($polygon->draw());
    }

    public function drawPath($path, $bdrColor, $bckColor){
        Tools::save_txt('shape.txt', [$this->renderer->drawPath($path, $bdrColor, $bckColor)]);
        return ($this->renderer->drawPath($path, $bdrColor, $bckColor));
    }

    public function clearShape(){
        Tools::clear_txt('shape.txt');
        return;
    }

    public function addShape($shapeType, array $data=[]){

        $posX = $_GET['posX'];
        $posY = $_GET['posY'];
        $radius = $_GET['radius'];
        $radiusY = $_GET['radiusY'];
        $bckColor = $_GET['bckColor'];
        $bdrColor = $_GET['bdrColor'];
        $path = $_GET['path'];
        $coords = explode(',',$_GET['coords']);

        switch ($shapeType){
            case 'square':
                return $this->drawSquare($posX,$posY,$radius, $bckColor, $bdrColor);
                break;
            case 'circle':
                return $this->drawCircle($posX,$posY, $radius, $radiusY, $bckColor, $bdrColor);
                break;
            case 'polygon':
                return $this->drawPolygon($coords, $bckColor, $bdrColor);
                break;
            case 'path':
                return $this->drawPath($path,$bdrColor, $bckColor);
                break;
            case 'clear':
                $this->clearShape();
                break;

        }
    }

}
