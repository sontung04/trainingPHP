<?php
echo "This array is randomly created (range from -500 to 500): ";
$i = rand(5,30);
$arr = [];
$max = -500;
$min = 500;
for($j = 0 ; $j < $i ; $j++) {
    $arr[$j] = rand(-500,500);
    echo $arr[$j] . " ";
    if ( $max < $arr[$j] ) {
        $max = $arr[$j];
    }
    if ( $min > $arr[$j] ) {
        $min = $arr[$j];
    }
}
echo '<br>';
echo "Max = " . $max;
echo '<br>';
echo "Min = " . $min;
?>
