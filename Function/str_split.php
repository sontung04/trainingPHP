<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String-splitting</title>
</head>
<body>
    <form action="str_split.php" method="post">
        <label>Insert a random string
            <input type="text" name="str">
        </label>
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $str = $_POST['str'];
    $str = str_split($str,1);
    echo "String after splitted: ";
    foreach($str as $val){
        echo $val . " ";
    }
}
?>
