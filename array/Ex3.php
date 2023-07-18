<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <form action="Ex3.php" method="post">
        <label for="a">Nhập vào 1 chuỗi bất kỳ (cách nhau bởi dấu cách (" "):</label>
        <input type="text" name="a">
        <input type="submit">
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $arr = explode(" ",$_POST['a']);
    echo "Chuỗi đảo ngược của chuỗi đã nhập vào là: ";
    for( $i = count($arr) - 1 ; $i >= 0 ; $i --){
        echo $arr[$i] . " ";
    }
}
?>