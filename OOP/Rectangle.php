<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rectangle</title>
</head>
<body>
<form action="Rectangle.php" method="post">
    <label>Insert length
        <input type="text" name="length"> <br>
    </label>
    <label>Insert width
        <input type="text" name="width">
    </label>
    <input type="submit">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
class rectangle {
    public $length;
    public $width;
    public function __construct($leng,$wid){
        $this->length = $leng;
        $this->width = $wid;
}
    public function area(){
        return $this->length * $this->width;
    }
    public function perimeter(){
        return 2 * ($this->length + $this->width);
    }
}
$rec = new rectangle($_POST['length'],$_POST['width']);
echo "length: " . $rec->length . '<br>';
echo "width: " . $rec->width . '<br>';
echo "area: " . $rec->area() . '<br>';
echo "perimeter: " . $rec->perimeter();
}
?>