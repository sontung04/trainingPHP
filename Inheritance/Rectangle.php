<?php
include_once "Shape.php";
class Rectangle extends Shape {
    public $width;
    public $length;
    public function __construct($name , $width , $length) {
        $this->name = $name;
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea() {
        echo "Area of this rectangle is " . $this->length * $this->width . '<br>';
    }
    public function calculatePerimeter() {
        echo "Perimeter of this rectangle is " . ($this->length + $this->width) * 2 . '<br>';
    }
}
?>