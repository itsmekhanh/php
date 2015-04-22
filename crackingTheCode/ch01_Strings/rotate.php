<?php
/*
 *  Rotate a N x N array 90 degrees
 * */

include "../classes/ArrayHelper.php";

function rotate($N){
    $length = count($N);

    for($i=0; $i<$length/2; $i++){
        for($j=$i; $j<$length-1-$i; $j++){
            $temp = $N[$i][$j];
            $N[$i][$j] = $N[$j][$length-1-$i];
            $N[$j][$length-1-$i] = $N[$length-1-$i][$length-1-$i-$j];
            $N[$length-1-$i][$length-1-$i-$j] = $N[$length-1-$i-$j][$i];
            $N[$length-1-$i-$j][$i] = $temp;
        }
    }
    return $N;
}

echo "Testing rotate matrix function....\n";

$rotate = [[1,2,3],[4,5,6],[7,8,9]];
ArrayHelper::printMatrix($rotate);
echo "\n";
$array = rotate($rotate);
ArrayHelper::printMatrix($array);