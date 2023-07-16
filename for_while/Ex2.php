<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prime number</title>
</head>
<body>
    <form action="Ex2.php" method="post">
        <label for="n">Amount of prime number: </label>
        <input style="text" id="n" name="N">
    </form>
</body>
</html>
<?php
function prime($a){
    if( $a <=1 ) {
        return false;
    }
    for( $i = 2 ; $i <= sqrt($a) ; $i++ ){
        if( $a % $i == 0 ) {
            return false;
        }
    }
    return true;
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $n = $_POST['N'];
    $a = 2;
    while( $n > 0 ){
        if(prime($a)){
            echo $a . " ";
            $n--;
        }
        $a++;
    }
}
?>
