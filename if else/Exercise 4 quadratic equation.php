<!DOCTYPE html>
<html>
<body>
<form action="beginning.php" method="post";>
    <h1>Đây là chương trình giải phương trình bậc 2 </h1>
    Nhập dữ liệu:
    <input type="text" style="width: 20px" name="a"> x^2+
    <input type="text" style="width: 20px" name="b"> x+
    <input type="text" style="width: 20px" name="c"> = 0
    <br>
    <input type="submit">
    <br>
</form>
</body>
</html>
<?php
$A=$_POST['a'];
$B=$_POST['b'];
$C=$_POST['c'];
if ($A==0)
    if ($B==0)
        if ($C==0) echo "Phương trình có vô số nghiệm";
        else echo "Phương trình vô nghiệm";
    else echo "Phương trình có 1 nghiệm x=".(-$C/$B);
else {
    $delta=$B**2-4*$A*$C;
    if ($delta<0) echo "Phương trình vô nghiệm";
    else if ($delta == 0) echo "Phương trình có nghiệm kép x=".(-$B/(2*$A));
    else echo "Phương trình có 2 nghiệm x1=".((-$B+sqrt($delta))/2*$A). "và x2=".((-$B-sqrt($delta))/2*$A);
}
?>