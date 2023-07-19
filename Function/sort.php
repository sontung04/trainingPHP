<?php
$n = rand(5,30);
$arr = [];
echo "Mảng được tạo ngẫu nhiên: ";
$color = [];
for($i = 0 ; $i < $n ; $i++){
    $arr[$i] = rand(-500 , 500);
    echo $arr[$i] . ' ';
}
sort($arr);
echo '<br>' . "Mảng sau khi được sắp xếp bằng hàm sort: ";
foreach($arr as $var){
echo $var . " ";
}
?>
