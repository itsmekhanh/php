<?php
/*
    Given an array S of n integers, find three integers in S such that the sum is closest to a given number, target.
    Return the sum of the three integers.
    You may assume that each input would have exactly one solution.

    For example, given array S = {-1 2 1 -4}, and target = 1.

    The sum that is closest to the target is 2. (-1 + 2 + 1 = 2).
  */

function threeSums($S, $target){

    $end = count($S)-1;
    $abs = PHP_INT_MAX;

    sort($S, SORT_NUMERIC);

    for($i=0; $i<$end-1; $i++){
        $j = $i+1;
        $k = $end;

        while($j<$k){
            $sum = $S[$i]+$S[$j]+$S[$k];
            if( $sum == $target){
                return $sum;
            }

            if($sum < $target){
                $j++;
            }else{
                $k--;
            }

            if(abs($sum-$target) < $abs){
                $abs = abs($sum-$target);
                $closestSum = $sum;
            }
        }
    }
    return $closestSum;
}

echo "Testing threeSums...\n";
echo "First test [-1, 2, 1, -4] with target = 1.\n";
echo "Closest sum is: ".threeSums(array(-1,2,1,-4), 1)."\n";
echo "Second test [2,3,-4,5,6,1,1,2] with target 7.\n";
echo "Closest sum is: ".threeSums(array(2,3,-4,5,6,1,1,2),7)."\n";
echo "All done!\n"
?>