<!DOCTYPE html>
<html>
<body>
<form action="Exercise_1_triangle.php" method="post">
    <h1>Đây là chương trình kiểm tra 3 số có phải là 3 cạnh của 1 tam giác hay không</h1>
    Nhập vào cạnh a: <input type="text" name="a">
    <br>
    Nhập vào cạnh b: <input type="text" name="b">
    <br>
    Nhập vào cạnh c: <input type="text" name="c"><br>
    <input type = "submit">
    <br>
</form>
</body>
</html>
<?php

if( $_SERVER ['REQUEST_METHOD'] == 'POST' ) {
    $A = $_POST['a'];
    $B = $_POST['b'];
    $C = $_POST['c'];
    if($A < 0 || $B < 0 || $C < 0 ){
        echo "đây không phải là 3 cạnh của 1 tam giác.";
    }
    if( $A + $B > $C && $A + $C > $B && $B + $C > $A ){
        if( $A ** 2 + $B ** 2 == $C ** 2 || $A ** 2 + $C ** 2 == $B ** 2 || $B ** 2 + $C ** 2 == $A ** 2 ){
            echo "đây là 3 cạnh của 1 tam giác vuông.";
        }
        elseif( $A ** 2 + $B ** 2 > $C ** 2 || $A ** 2 + $C ** 2 > $B ** 2 || $B ** 2 + $C ** 2 > $A ** 2 ){
            echo "đây là 3 cạnh của 1 tam giác nhọn.";
        }
        else{
            echo "đây là 3 cạnh của 1 tam giác tù.";
        }
    }
    else{
        echo "đây không phải là 3 cạnh của 1 tam giác.";
    }
}

?>
