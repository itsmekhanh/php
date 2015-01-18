<?php
/**
Given an integer array, return the combinations of 4 array values whose sum is x
Eg:
Input int array = {1,2,3,5,0,-2}
Return all possible combinations such that
a+b+c+d = 1
Like: -2 , 0 , -2 , 5
2 , -2 , 0 , 1, etc...
 */

error_reporting( error_reporting() & ~E_NOTICE );

function findFourSums($A, $sum){
    $length = count($A);

    $table = array();
    // keep track of values
    for($a=0; $a<$length; $a++){
        $table[strval($A[$a])] = true;
    }

    $results = array();

    for($i=0; $i<$length; $i++){
        for($j=0; $j<$length; $j++){
            for($k=0; $k<$length; $k++){
                $remaining = $sum-($A[$i]+$A[$j]+$A[$k]);
                if($table[strval($remaining)]){
                    $results[] = array($A[$i], $A[$j], $A[$k], $remaining);
                }
            }
        }
    }

    return $results;
}

echo "Testing combinations of 4 values in array that adds up to a specific sum\n";
echo "Testing [1,2,3,5,0,-2], Sum = 1\n";
$results = findFourSums([1,2,3,5,0,-2], 1);

if(!empty($results)){
    foreach($results as $a){
        foreach($a as $value){
            echo "[$value]";
        }
        echo "\n";
    }
}

echo "All done!\n";