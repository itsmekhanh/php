<?php
/**
 * Created by PhpStorm.
 * User: khanh
 * Date: 1/12/15
 * Time: 4:17 PM
 *
 *
 * There are N children standing in a line. Each child is assigned a rating value.
 * You are giving candies to these children subjected to the following requirements:
 * Each child must have at least one candy.
 * Children with a higher rating get more candies than their neighbors.
 * What is the minimum candies you must give?
 *
 * Solution Analysis: O(2N) or O(N) with O(N) extra space. Can we do it with less space and in one loop?
 */

function kidsWithCandy($ratings){
    $length = count($ratings);
    $count = $length;

    $candies = [];

    $i=0;
    while($i < $length){
        $candies[$i] = 1;
        $i++;
    }

    for($i=0; $i < $length; $i++){
        if($i>0){
            if(($ratings[$i] > $ratings[$i-1]) && ($candies[$i] <= $candies[$i-1])){
                $old = $candies[$i];
                $candies[$i] = $candies[$i-1]+1;
                $count += $candies[$i] - $old;
            }
        }
        if($i < $length-1){
            if(($ratings[$i] > $ratings[$i+1]) && ($candies[$i] <= $candies[$i+1])){
                $old = $candies[$i];
                $candies[$i] = $candies[$i+1]+1;
                $count += $candies[$i] - $old;
            }
        }
    }
    return $count;
}

echo "Testign kidsWithCandy....\n";
echo "First test [1,3,2,4,5]\n";
echo "Minimum amount of candies given: ".kidsWithCandy([1,3,2,4,5])."\n";
echo "All done!\n";