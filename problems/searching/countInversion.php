<?php
    /*
     * Implement a function that counts the number of inversions an array
     * Example: [3,1,2,4] has inversions [3,1] and [3,2] since three appears
     * before 1 and 2
     * */

require_once "../sorting/quicksort.php";

function countInversion($values, $start, $end){

    if($start <= $end){
        return 0;
    }
    else{
        $mid = floor(($start+$end)/2);
        $x = countInversion($values, $start, $mid);
        $y = countInversion($values, $mid+1, $end);

        $left = array_slice($values, 0, $mid);
        $right = array_slice($values, $mid);

        $leftCount = $mid;

        quicksort($left, 0, count($left)-1);
        quicksort($right, 0, count($right)-1);

        $l = 0; $r = 0;
        $count = 0;

        while(isset($left[$l]) && isset($right[$r])){
            if($right[$r] < $left[$l]){
                $count += $leftCount - $l;
                $r++;
            }else{
                $l++;
            }
        }
        return $count+$x+$y;

    }
 
}
?>
