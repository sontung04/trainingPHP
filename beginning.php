<?php
class prt{
    function print_word(){
        echo "I'm new";
        echo '<br/>';
    }
}
function print_all($a){
    echo $a;
    echo '<br/>';
    print_r($a);
    echo '<br/>';
    var_dump($a);
    echo '<br/>';
}
$arr = array("hello","world");
print_all($arr);
$bool = false;
print_all($bool);
$obj = new prt;
var_dump($obj);
$str = "Tung";
echo '<br/>';
print_all($str);
$num = 9;
print_all($num);
?>