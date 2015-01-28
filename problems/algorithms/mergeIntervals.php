<?php
/**
 * Given an array of intervals, merge them
 * Example. [[1,3],[2,6],[8,10],[15,18]] ===> [[1,6],[8,10],[15,18]]
 */

function mergeInterval($intervals){
    $merged = array($intervals[0]);
    $count = 0;
    $prev = $intervals[0][1];

    for($i=1; $i<count($intervals); $i++){
        if($intervals[$i][0] < $prev){
            $merged[$count] = array($merged[$count][0], $intervals[$i][1]);
        }else{
            $merged[]=$intervals[$i];
            $count++;
        }
        $prev = $intervals[$i][1];
    }
    return $merged;
}


echo "Testing mergeInterval() with [[1,3],[2,6],[10,15],[12,18]]...\n";
$merged = mergeInterval([[1,3],[2,6],[10,15],[12,18]]);

print_r($merged);