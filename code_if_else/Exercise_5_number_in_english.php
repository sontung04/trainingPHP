<!DOCTYPE html>
<html>
<body>
<form action="Exercise_5_number_in_english.php" method="post";>
    <h1>Đây là chương trình in ra cách đọc tiếng Anh của 1 số nguyên không âm nhỏ hơn 1000 </h1>
    Nhập 1 số nguyên không âm:
    <input type="text"  name="a">
    <input type="submit">
    <br>
</form>
</body>
</html>
<?php

if($_SERVER ['REQUEST_METHOD'] == 'POST') {
    function eng($x){  // đọc số hàng trăm và đơn vị
        switch ($x){
            case 1:
                return "one";
                break;
            case 2:
                return "two";
                break;
            case 3:
                return "three";
                break;
            case 4:
                return "four";
                break;
            case 5:
                return "five";
                break;
            case 6:
                return "six";
                break;
            case 7:
                return "seven";
                break;
            case 8:
                return "eight";
                break;
            case 9:
                return "nine";
                break;
        }
    }
    function tenth($tens,$units){ //tên số từ 10-99
        switch ($tens){
            case 0:
                return eng($units);
                break;
            case 1:
                switch ($units){ //do từ 10 đến 19 có cách đọc khác
                    case 0:
                        return "ten";
                        break;
                    case 1:
                        return "eleven";
                        break;
                    case 2:
                        return "twelve";
                        break;
                    case 3:
                        return "thirteen";
                        break;
                    case 4:
                        return "fourteen";
                        break;
                    case 5:
                        return "fifteen";
                        break;
                    case 8:
                        return "eighteen"; //do nếu cho 8 vào phần if bên dưới kết quả sẽ ra eightteen thay vì eighteen
                        break;
                }
                if( $units >= 6 && $units <= 9 && $units != 8) //từ 16 đến 19 chỉ cần tên số hàng đơn vị + "teen"
                    return eng($units)."teen";
                break;
            case 2:
                return "twenty".( $units == 0 ? "" : ("-".eng($units) ) );   //do từ 21 đến 29 phải có dấu "-" (ví dụ: 21: twenty-one), nhưng số tròn chục không cần "-"
                break;
            case 3:
                return "thirty".( $units == 0 ? "" : ("-".eng($units) ) );
                break;
            case 4:
                return "forty".( $units == 0 ? "" : ("-".eng($units) ) );
                break;
            case 5:
                return "fifty".( $units == 0 ? "" : ("-" . eng($units) ) );
                break;
            case 8:
                return "eighty".( $units == 0 ? "" : ("-".eng($units) ) );  // lý do tương tự như trên
        }
        if($tens>=6 && $units<=9 && $units!=8)
            return eng($tens)."ty".( $units == 0 ? "" : ("-" . eng($units) ) );
    }
    $b=(int)$_POST['a'];
    if ( $b - $_POST['a'] != 0 || $b < 0 ) {
        echo "Đây không phải là số nguyên không âm";
    }
    elseif( $b == 0 ) {
        echo "zero";
    }
    else {
        $hundred=floor($b/100);                     //xác định chữ số hàng trăm
        $ten=floor(($b-$hundred*100)/10);           //xác định chữ số hàng chục
        $unit=floor($b-$hundred*100-$ten*10);       //xác định chữ số hàng đơn vị
        if ($b>=100) echo eng($hundred)." hundred ".tenth($ten,$unit);
        else echo tenth($ten,$unit);
    }
}

?>