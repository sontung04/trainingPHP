<?php
include_once "Shape.php";
class Circle extends Shape {
    public $radius;
    public function __construct($name , $radius) {
        $this->name = $name;
        $this->radius = $radius;
    }
    public function calculateArea() {
        echo "Area of this circle is " . pi() * ($this->radius ** 2) . '<br>';
    }
    public function calculatePerimeter() {
        echo "Perimeter of this circle is " .  2 * pi() * $this->radius . '<br>';
    }
}
?>