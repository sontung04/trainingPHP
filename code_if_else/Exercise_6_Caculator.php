<!DOCTYPE html>
<html>
    <body>
        <form action="Exercise_6_Caculator.php" method="post";>
            <h1>Đây là máy tinh đơn giản </h1>
            Nhập toán hạng 1:
            <input type="text" name="a"> <br>
            Nhập toán hạng 2:
            <input type="text" name="b"> <br>
            Nhập toán tử (+,-,*,/,^)
            <input type="text" name="c"> <br>
            <input type="submit"> <br>
        </form>
    </body>
</html>
<?php

if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $A = $_POST['a'];
    $B = $_POST['b'];
    $C = $_POST['c'];
    if( ($B == 0 && $C == '/') ) {
        echo "Phép tính không hợp lệ";
    } else {
        switch($C) {
            case '+':
                echo "Kết quả của phép tính là: " . ($A + $B);
                break;
            case '-':
                echo "Kết quả của phép tính là: " . ($A - $B);
                break;
            case '*':
                echo "Kết quả của phép tính là: " . ($A * $B);
                break;
            case '/':
                echo "Kết quả của phép tính là: " . ($A / $B);
                break;
            case '^':
                echo "Kết quả của phép tính là: " . ($A ** $B);
                break;
            default:
                echo "Phép tính không hợp lệ";
                break;
        }
    }
}

?>