<!DOCTYPE html>
<html>
<body>
<form action="beginning.php" method="post";>
    <h1>Đây là chương trình kiểm tra xem 1 năm có phải năm nhuận hay không </h1>
    Nhập năm:
    <input type="text"  name="a">
    <input type="submit">
    <br>
</form>
</body>
</html>
<?php
$A=(int)$_POST['a'];
if ($A-$_POST['a']!=0) echo "Đây không phải là 1 năm";
else if ($A%4==0 && $A%100!=0) echo "Đây là năm nhuận";
else echo "Đây không phải năm nhuận";
?>