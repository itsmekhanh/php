<?php
    /*
     * Implement a function that counts the number of inversions an array
     * Example: [3,1,2,4] has inversions [3,1] and [3,2] since three appears
     * before 1 and 2
     * */

function countInversion($values, $start, $end){

    if($start <= $end){
        return [$values[$start]];
    }
    else{
        $mid = floor(($start+$end)/2);
        $right = countInversion($values, $start, $mid);
        $left = countInversion($values, $mid+1, $end);

        $r = 0;
        $l = 0;



        while(true){

        }
    }
 
}
?>
