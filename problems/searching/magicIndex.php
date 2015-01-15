<?php
/**
 * A magic index is defined as $A[$i] = $i for an array $A. Write a function that returns the magic index
 */

function magicIndex($A, $start, $end){

    if($start > $end) return;

    if($start <= $end){
        $m = floor(($start+$end)/2);

        if($A[$m] == $m){
            return $m;
        } else{
            // search left
            $left = magicIndex($A, $start, min($A[$m], $m-1));
            if(isset($left)) return $left;

            // search right
            $right = magicIndex($A, max($A[$m], $m+1), $end);
            if(isset($right)) return $right;
        }
    }
}

echo "Magic Index!!!\n";
echo "Testing [1,2,3,4,5,6,7,7,10,11]....\n";
echo "magic index is....".magicIndex([1,2,3,4,5,6,7,7,10,11], 0, 9)."\n";
echo "All done!\n";
