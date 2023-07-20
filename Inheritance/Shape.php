<?php
class Shape {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function showName(){
        echo "My name is " . $this->name . '<br>';
    }
}
?>