<?php
    $size = rand(2,10);
    $matrix = [[]];
    $print_matrix = '<table border="1" style="text-align: center">'; //in ra ma trận ngẫu nhiên bằng HTML
    for( $i = 0 ; $i < $size ; $i++ ){  //tạo ma trận ngẫu nhiên
        $print_matrix .= '<tr style="height:40px">';
        for( $j = 0 ; $j < $size ; $j++ ){
            $matrix[$i][$j] = rand(-10,10);
            $print_matrix .= '<td style="width:40px">'. $matrix[$i][$j] . '</td>';
        }
        $print_matrix .= '</tr>';
    }
    $print_matrix .= '</table>';
    echo "Ma trận được tạo ngẫu nhiên: " . '<br>';
    echo $print_matrix;
    $mainDiag_sum = 0;
    $antiDiag_sum = 0;
    for ( $i = 0; $i < $size ; $i++ ){
        $mainDiag_sum += $matrix[$i][$i];
        $antiDiag_sum += $matrix[$i][$size - 1 - $i];
    }
    echo "Tổng các phần tử trên đường chéo chính: " . $mainDiag_sum . '<br>';
    echo "Tổng các phần tử trên đường chéo phụ: " . $antiDiag_sum;
?>
