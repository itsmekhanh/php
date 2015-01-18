<?php
/**
 * Implement the mergesort algorithm given an array
 */

function merge($A, $start, $end){

    if($start > $end){ return []; }
    $mid = floor(($start+$end)/2);

    if($start == $end){
        return array($A[$mid]);
    }

    $left = merge($A, $start, $mid);
    $right = merge($A, $mid+1, $end);

    $result = array();

    $l = 0; $r = 0;
    $lCount = count($left);
    $rCount = count($right);

    while($l<$lCount && $r<$rCount){
        if($left[$l] < $right[$r]){
            $result[] = $left[$l];
            $l++;
        }else{
            $result[] = $right[$r];
            $r++;
        }
    }

    while($l<$lCount){
        $result[] = $left[$l];
        $l++;
    }
    while($r < $rCount){
        $result[] = $right[$r];
        $r++;
    }

    return $result;
}

echo "Testing the merge sort algorithm...\n";
echo "Sorting array [1,4,3,2,7,5]\n";
$array = [1,4,3,2,7,5];

$sorted = merge($array, 0, count($array)-1);

print_r($sorted);