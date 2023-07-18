
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    Ma trận ban đầu:
    <table border="1" style="text-align:center">
        <tr style="height:40px">
            <td style="width:40px">2</td>
            <td style="width:40px">4</td>
            <td style="width:40px">3</td>
        </tr>
        <tr style="height:40px">
            <td style="width:40px">5</td>
            <td style="width:40px">3</td>
            <td style="width:40px">7</td>
        </tr>
        <tr style="height:40px">
            <td style="width:40px">5</td>
            <td style="width:40px">1</td>
            <td style="width:40px">2</td>
        </tr>
    </table>
    <form action="Ex8.php" method="post">
        <label for="n">Nhập số lần quay: </label>
        <input type="text" name="n">
        <input type="submit">
    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $matrix = [
        [2 , 4 , 3],
        [5 , 3 , 7],
        [5 , 1 , 2],
    ];
    function rotate($mat){
        $temp = $mat[0][0];
        $mat[0][0] = $mat[2][0];
        $mat[2][0] = $mat[2][2];
        $mat[2][2] = $mat[0][2];
        $mat[0][2] = $temp;
        $temp = $mat[0][1];
        $mat[0][1] = $mat[1][0];
        $mat[1][0] = $mat[2][1];
        $mat[2][1] = $mat[1][2];
        $mat[1][2] = $temp;
        return $mat;
    }
    function print_matrix($matrix){
        $print_matrix = '<table border="1" style="text-align:center">';
        for( $i = 0 ; $i < 3 ; $i++ ){
            $print_matrix .= '<tr style="height:40px">';
            for( $j = 0 ; $j < 3 ; $j++ ){
                $print_matrix .= '<td style="width:40px">'. $matrix[$i][$j] . '</td>';
            }
            $print_matrix .= '</tr>';
        }
        $print_matrix .= '</table>';
        echo $print_matrix;
    }
    $n=$_POST['n'];
    while($n != 0){
        $matrix = rotate($matrix);
        $n--;
    }
    echo "Ma trận sau khi quay: ";
    print_matrix($matrix);
}
?>
