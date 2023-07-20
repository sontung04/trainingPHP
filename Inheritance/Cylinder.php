<?php
include_once "Circle.php";
class Cylinder extends Circle {
    public $height;
    public function __construct($name , $radius , $height) {
        parent::__construct($name , $radius);
        $this->height = $height;
    }
    public function calculateArea() {
        return 2 * pi() * $this->radius * ( $this->height +  $this->radius ); // 2πrh + 2πr^2
    }
    public function calculateVolume() {
        return pi() * $this->radius ** 2 * $this->height; // πr^2*h
    }
}
?>