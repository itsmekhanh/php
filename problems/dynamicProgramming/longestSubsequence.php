<?php
/**
 * Write a function that returns the length of the longest subsequence in an array
 */

function longestSubsequence($A){
    $count = array(0 => 1);
    $longest = 0;

    $length = count($A);

    for($i=1; $i<$length; $i++){
        if($A[$i] > $A[$i-1]){
            $count[$i] = $count[$i-1]+1;
        }
        if($count[$i] > $longest){
            $longest = $count[$i];
        }
    }

    return $longest;
}

echo "Testing longestSubsequence...\n";
echo "[1,-1,3,2,4,5,7,10]\n";
echo "Length: ".longestSubsequence([1,-1,3,2,4,5,7,10]);
echo "\nAll done!\n";