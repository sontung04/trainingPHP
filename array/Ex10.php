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
    <h2>Đây là chương trình kiểm tra 1 dãy ký tự nhập vào có phải là palindrome hay không.</h2>
    <form method="post" action="Ex9.php">
        <label>Nhập vào 1 chuỗi ký tự
            <input type="text" name="n">
        </label>
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $arr = explode(" ",$_POST['n']); // loại bỏ dấu cách
    $string = "";
    for($i = 0 ; $i<count($arr) ; $i++){
        $string .= $arr[$i];
    }
    $string = strtolower($string);   // để không phân biệt chữ cái hoa và thường
    $arr = str_split($string,1); //tách mỗi 1 ký tự thành 1 phần tử của mảng
    $is_pal = true;
    for($i = 0 ; $i < count($arr) ; $i++){
        if($arr[$i] != $arr[count($arr) - $i - 1]){
            $is_pal = false;
            break;
        }
    }
    if($is_pal) {
        echo "Đây là palindrome";
    } else {
        echo "Đây không phải là palindrome";
    }
}
?>