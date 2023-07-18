<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Palindrome</title>
</head>
<body>
<form method="post" action="Ex8.php">
    <label>Nhập vào 1 chuỗi ký tự
        <input type="text" name="n">
    </label>
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $arr = explode(" ",$_POST['n']); //loại bỏ dấu cách
    $string = "";
    for($i = 0 ; $i<count($arr) ; $i++){
        $string .= $arr[$i];
    }
    $arr = str_split($string,1);
    $counter = 1;
    $char = $arr[0];
    echo "Dãy sau khi được chuyển đổi: ";
    for($i = 1 ; $i < count($arr) ; $i++){
        if($arr[$i] != $char){
            echo $char . $counter;
            $counter = 0;
            $char = $arr[$i];
        }
        $counter++;
        if($i == count($arr) - 1) {
            echo $char . $counter;
        }
    }
}
?>