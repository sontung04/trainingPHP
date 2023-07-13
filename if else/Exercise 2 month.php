<!DOCTYPE html>
<html>
<body>
<form action="beginning.php" method="post";>
    <h1>Đây là chương trình in ra tên tiếng anh của tháng trong năm ứng với 1 số tương ứng</h1>
    Nhập vào 1 số là tháng trong năm: <input type="text" name="a">
    <br>
    <input type = "submit">
    <br>
</form>
</body>
</html>
<?php
$A=(int)$_POST['a'];
if ($A<1 || $A>12 || $A-$_POST['a']!=0) echo "Đây không phải tháng trong năm";
else
    switch($A){
        case 1:
            echo "January";
            break;
        case 2:
            echo "February";
            break;
        case 3:
            echo "March";
            break;
        case 4:
            echo "April";
            break;
        case 5:
            echo "May";
            break;
        case 6:
            echo "June";
            break;
        case 7:
            echo "July";
            break;
        case 8:
            echo "August";
            break;
        case 9:
            echo "September";
            break;
        case 10:
            echo "October";
            break;
        case 11:
            echo "November";
            break;
        case 12:
            echo "December";
            break;
    }
?>
