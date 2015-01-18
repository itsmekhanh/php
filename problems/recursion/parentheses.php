<?php
/**
 * Write a function that print out all the possible correct parentheses
 */

function paren($n, $left=0, $right=0, $string = ""){
    if($left < 0 || $right < 0) return;

    if($left == 0 && $right == 0){
        echo $string."\n";
        return;
    }
    if($right >= $left){
        // select left;
        paren($n, $left-1, $right, $string."(");

        // select right;
        paren($n, $left, $right-1, $string.")");
    }
}

echo "Testing parens() function...\n";
paren(3, 3, 3);
echo "All done!\n";