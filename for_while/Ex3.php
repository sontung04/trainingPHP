<?php
function fibo($n) { //trả về số fibonaci thứ n
    if( $n == 1 || $n == 2) {
        return 1;
    } else {
        return fibo($n - 1) + fibo( $n - 2);
    }
}
$n = 20;
$sum = 0;
for( $i = 1 ; $i <= $n ; $i++ ){
    $sum += fibo($i);
}
echo $sum;
?>
