<?php
include_once "Rectangle.php";
class Rectanglular extends Rectangle {
    public $height;
    public function __construct($name , $length , $width , $height) {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
        $this->name = $name;
    }
    public function calculateArea() {
        echo "Area of this rectangular is " . ( 2 * $this->height * ($this->length + $this->width) + 2 * $this->length * $this->width ) . '<br>';
    }
    public function calculateVolume() {
        echo "Volume of this rectangular is " . ( $this->length * $this->width * $this->height ) . '<br>';
    }
}
?>