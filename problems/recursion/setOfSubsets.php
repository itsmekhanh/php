<?php
/**
 * Write a function to list the subsets of a set in an array $A
 */

function subset($A, $start=0)
{
    $end = count($A) - 1;
    if($start == $end){
        return array([$A[$start]]);
    }
    else{
        $subsets = array([$A[$start]]);
        $subs = subset($A, $start+1);

        foreach($subs as $s){
            $subsets[] = array_merge([$A[$start]],$s);
            $subsets[] = $s;
        }
        return $subsets;
    }
}

echo "Testing Subsets of Set....\n";
echo "[1,2,3]\n";

$subsets = subset([1,2,3]);

print_r($subsets);