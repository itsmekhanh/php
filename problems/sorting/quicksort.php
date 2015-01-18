<?php
/**
 * Implement the mergesort algorithm given unsorted array
 */

function quicksort(&$A, $start, $end){
    if($start >= $end){ return; }

    $pivot = $A[$start];

    $left = $start;
    $right = $end;

    while($left < $right){

        // find first element less than pivot
        while($A[$right] > $pivot){
            $right--;
        }
        // find first element greater than pivot
        while($A[$left] < $pivot){
            $left++;
        }

        if($left != $right){
            // swap them
            $swap = $A[$left];
            $A[$left] = $A[$right];
            $A[$right] = $swap;
        }
    }

    // partition left
    quicksort($A, $start, $left);

    // partition right
    quicksort($A, $left+1, $end);
}

echo "Testing mergesort...\n";
echo "Sorting [1,6,3,4,10,8,9]...\n";
$array = [1,6,3,4,10,8,9];

quicksort($array, 0, count($array)-1);

print_r($array);