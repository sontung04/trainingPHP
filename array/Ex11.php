<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>translate</title>
</head>
<body>
<h2>Đây là chương trình dịch từ tiếng Anh sang tiếng Việt đơn giản</h2>
<form method="post" action="Ex11.php">
    <label>Nhập vào 1 từ (hello, bye, good morning);
        <input type="text" name="n">
    </label>
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $arr=[ "hello" => "Xin chào" , "bye" => "Tạm biệt", "good morning" => "Chào buổi sáng" ];
    $str = strtolower($_POST['n']);
    $invalid = true;
    foreach($arr as $eng => $vi){
        if($eng == $str) {
            echo $vi;
            $invalid = false;
        }
    }
    if($invalid) {
        echo "Không dịch được.";
    }
}
?>