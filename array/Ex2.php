<?php
echo "This array is randomly created (range from -500 to 500): ";
function quickSort( $arr ){
    if( count($arr) <= 1 ){
        return $arr;
    } else {
        $l = [];
        $r = [];
        $pivot = $arr[0];
        for( $i = 1 ; $i < count($arr) ; $i++){
            if( $arr[$i] < $pivot ){
                $l[] = $arr[$i];
            } else {
                $r[] = $arr[$i];
            }
        }
        return array_merge( quickSort($l) , array($pivot) , quickSort($r) );
    }
}
$n = rand(5,30); //số phần tử của mảng
$array = [];
for($j = 0; $j < $n ; $j++) {//tạo mảng ngẫu nhiên
    $array[$j] = rand(-500, 500);
    echo $array[$j] . " ";
}
$sorted_arr = quickSort($array);
echo '<br>'."Mảng sau khi sắp xếp: ";
echo implode(" ",$sorted_arr);
?>