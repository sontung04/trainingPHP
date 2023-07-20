<?php
include_once "Rectangular.php";
include_once "Cylinder.php";
include_once "Circle.php";
include_once "Rectangle.php";
$radius = 10;
$height = 20;
$width = 30;
$length = 40;
$circle = new Circle("circle" , $radius);
$cylinder = new Cylinder("cylinder" , $height , $radius);
$rectangle = new Rectangle("rectangle" ,$length , $width);
$rectangular = new Rectanglular("rectangular" , $length , $width , $height);
$circle->showName();
echo "Area of this circle is: " . $circle->calculateArea() . '<br>';
echo "Perimeter of this circle is: " . $circle->calculatePerimeter() . '<br><br>';
$cylinder->showName();
echo "Area of this cylinder is: " . $cylinder->calculateArea() . '<br>';
echo "(Wrong) Perimeter of this cylinder is: " . $cylinder->calculatePerimeter() . '<br>';
echo "Volume of this cylinder is: " . $cylinder->calculateVolume() . '<br><br>';
$rectangle->showName();
echo "Area of this rectangle is: " . $rectangle->calculateArea() . '<br>';
echo "Perimeter of this rectangle is: " . $rectangle->calculatePerimeter() . '<br><br>';
$rectangular->showName();
echo "Area of this rectangular is: " . $rectangular->calculateArea() . '<br>';
echo "(Wrong) Perimeter of this rectangular is: " . $rectangular->calculatePerimeter() . '<br>';
echo "Volume of this rectangular is: " . $rectangular->calculateVolume() . '<br>';
?>