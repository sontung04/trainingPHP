!DOCTYPE html>
<html>
<body>
<form action="beginning.php" method="post";>
    <h1>Đây là máy tinh đơn giản </h1>
    Nhập toán hạng 1:
    <input type="text"  name="a"> <br>
    Nhập toán hạng 2:
    <input type="text"  name="b"> <br>
    Nhập toán tử (+,-,*,/,^)
    <input type="text"  name="c"> <br>
    <input type="submit">
    <br>
</form>
</body>
</html>
<?php
$A=$_POST['a'];
$B=$_POST['b'];
$C=$_POST['c'];
if ($B==0 && $C=='/') echo "Phép tính không hợp lệ";
else {
    echo "Kết quả của phép tính là: ";
    if ($C == '+') echo $A+$B;
    else if($C=='-') echo $A-$B;
    else if($C=='*') echo $A*$B;
    else if($C=='/') echo $A/$B;
    else echo $A**$B;
}
?>