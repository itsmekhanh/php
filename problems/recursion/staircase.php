<?php

/**
 * A kid can jump 1,2, and 3 steps at a time up a staircase. Write a function staircase($n) to calculate
 * how many different ways a kid can make it up the stairs
 */

$ways = array();

function staircase($n){
    if($n < 0) return 0;
    if($n == 0){
        return 1;
    }

    if(isset($ways[$n])) return $ways[$n];
    $ways[$n] = staircase($n-1)+staircase($n-2)+staircase($n-3);
    return $ways[$n];
}

echo "Test staircase...\n";
printf("Running staircase(1)....".staircase(1)."\n");
printf("Running staircase(2)....".staircase(2)."\n");
printf("Running staircase(3)....".staircase(3)."\n");
printf("Running staircase(4)....".staircase(4)."\n");
echo "All done!\n";