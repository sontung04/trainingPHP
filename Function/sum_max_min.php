<?php
$n = rand(5,30);
$arr = [];
echo "This array is created randomly: ";
for($i = 0 ; $i < $n ; $i++){
    $arr[$i] = rand(-500 , 500);
    echo $arr[$i] . " ";
}
echo '<br>' . "Sum of all numbers in the array: " . array_sum($arr) . '<br>';
echo "Max value of the array: " . max($arr) . '<br>';
echo "Min value of the array: " . min($arr);
?>
