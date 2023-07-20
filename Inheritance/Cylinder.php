<?php
include_once "Circle.php";
class Cylinder extends Circle {
    public $height;
    public function __construct($name , $height , $radius) {
        $this->name = $name;
        $this->height = $height;
        $this->radius = $radius;
    }
    public function calculateArea() {
        echo "Area of this cylinder is " . ( 2 * pi() * $this->radius * ( $this->height +  $this->radius ) ). '<br>'; // 2πrh + 2πr^2
    }
    public function calculateVolume() {
        echo "Volume of this cylinder is " . ( pi() * $this->radius ** 2 *$this->height ) . '<br>'; // πr^2*h
    }
}
?>