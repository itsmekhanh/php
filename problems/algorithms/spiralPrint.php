<?php
/**
 * Write a function that prints a spiral on a N x M array
 */

function spiral($A){
    $rowLength = count($A);
    $colLength = count($A[0]);

    for($i=0; $i<floor($rowLength/2); $i++){
        // top
        for($j=$i; $j<$colLength-$i-1; $j++){
            echo "[".$A[$i][$j]."]";
        }

        // right
        for($j=$i; $j<$rowLength-$i-1; $j++){
            echo "[".$A[$colLength-$i-1][$j]."]";
        }

        // bottom
        for($j=$colLength-$i-1; $j>$i; $j--){
            echo "[".$A[$rowLength-1-$i][$j]."]";
        }

        // left
        for($j=$rowLength-$i-1; $j>$i; $j--){
            echo "[".$A[$i][$j]."]";
        }
    }
}