<?php
$arr = ['123456'];
echo "var_dump array before swapped: ";
var_dump($arr);
echo '<br>';
$string = "7890";
echo "var_dump string before swapped: ";
var_dump($string);
echo '<br>';
$arr = implode("",$arr);
echo "var_dump array after swapped: ";
var_dump($arr);
echo '<br>';
$string = explode(" ", $string);
echo "var_dump string after swapped: ";
var_dump($string);
?>