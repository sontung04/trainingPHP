<?php
include_once "Rectangle.php";
class Rectanglular extends Rectangle {
    public $height;
    public function __construct($name , $width , $length , $height) {
        parent::__construct($name , $width , $length);
        $this->height = $height;
    }
    public function calculateArea() {
        return 2 * $this->height * ($this->length + $this->width) + 2 * $this->length * $this->width;
    }
    public function calculateVolume() {
        return $this->length * $this->width * $this->height;
    }
}
?>