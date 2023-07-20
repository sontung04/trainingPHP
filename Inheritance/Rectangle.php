<?php
include_once "Shape.php";
class Rectangle extends Shape {
    public $width;
    public $length;
    public function __construct($name , $width , $length) {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea() {
        return  $this->length * $this->width;
    }
    public function calculatePerimeter() {
        return ($this->length + $this->width) * 2;
    }
}
?>