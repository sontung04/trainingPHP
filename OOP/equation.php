<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quadratic equation</title>
</head>
<body>
<form action="equation.php" method="post">
    <h1>Solve quadratic equation</h1>
    <label>
        <input style="width:20px" type=text" name="a"> x^2+
    </label>
    <label>
        <input style="width:20px" type=text" name="b">x+
    </label>
    <label>
        <input style="width:20px" type=text" name="c">
    </label>
    <input type="submit">
</form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    class quadEquation {
        private $a;
        private $b;
        private $c;
        public function __construct($a , $b , $c) {
            $this->a = $a;
            $this->b = $b;
            $this->c = $c;
        }
        public function delta() {
            return $this->b ** 2 - 4 * $this->a * $this->c; //b^2-4ac
        }
        public function getRoot1() {
            if($this->delta()>=0){
                return (- $this->b + sqrt( $this->delta() )) / (2 * $this->a); //(-b+sqrt(delta)/2a)
            } else {
                return - $this->b / (2 * $this->a) .                        // phần thưc: -b/2a
                    ' + ' . sqrt( - $this->delta() ) / (2 * $this->a) . 'i'; // phần ảo: i*sqrt(-delta)/2a
            }
        }
        public function getRoot2() {
            if($this->delta() >= 0){
                return (- $this->b - sqrt( $this->delta() )) / (2 * $this->a);
            } else {
                return - $this->b / (2 * $this->a) .                        //phần thực
                    ' - ' . sqrt( - $this->delta() ) / (2 * $this->a) . 'i'; // phần ảo
            }
        }
    }

    $parameter = new quadEquation($_POST['a'],$_POST['b'],$_POST['c']);

    if($_POST['a'] == 0){

        if($_POST['b'] == 0){

            if($_POST['c'] == 0){
                echo "This equation has infinite solutions.";
            } else {
                echo "This equation has no solution.";
            }
        } else {
            echo "This equation has one solution: " . ( - $_POST['c'] / $_POST['b'] );
        }
    } else {
        echo "This equation has two solutions: x1 = " . $parameter->getRoot1() . " and x2 = " . $parameter->getRoot2();
    }
}
?>