<?php
$n = rand(0,9);
$arr = [1,2,3,4,5,6,7,8,9,10];
echo "Array before deleted: ";
print_r($arr);
echo '<br>';
echo "Delete a random location: " . ($n) . '<br>';
unset($arr[$n]);
echo "Array after deleted: ";
print_r($arr);
?>
