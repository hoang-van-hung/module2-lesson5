<?php
namespace name1;

class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius=$radius;
        $this->color= $color;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function getCircleAre(){
        return pi()*pow($this->radius,2);
    }
    public function toString(){
        echo "Radius ".$this->radius;
        echo "Color ".$this->color;
        echo "Area ".$this->getCircleAre();

    }

}