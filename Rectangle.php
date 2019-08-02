<?php


class Rectangle implements Resizeable
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWith(){
        return $this->width;
    }
    public function getHeight(){
        return $this->height;
    }
    public function setWith($width){
        $this->width=$width;
    }
    public function setHeight($height){
        $this->height=$height;
    }
    public function getArea(){
        return $this->height*$this->width;
    }

    public function resize($size)
    {
        $this->width+=$this->width*$size/100;
        $this->height+=$this->height*$size/100;
    }
}
