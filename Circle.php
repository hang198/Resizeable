<?php


class Circle implements Resizeable {
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
    public function getRadius(){
        return $this->radius;
    }
    public function setRadius($radius){
        $this->radius=$radius;
    }
    public function getArea(){
        $area=$this->radius**2*pi();
        return $area;
    }
    public function resize($size)
    {
        $this->radius+=$this->radius*$size/100;
    }
}