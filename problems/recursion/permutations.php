<?php
/**
 * Implement a permutation function
 */

function perm($chars, $start=0){
    if($start == count($chars)-1) return array($chars[$start]);

    $letter = $chars[$start];

    $perms = perm($chars, $start+1);

    $permutations = array();

    if(is_array($perms)){
        foreach($perms as $perm){
            $permLength = strlen($perm);
            $permutations[] = $letter .$perm;
            for($i=1; $i<$permLength; $i++){
                $permutations[] = substr($perm,0,$i).$letter.substr($perm, $i);
            }
            $permutations[] = $perm.$letter;
        }
    }

    return $permutations;
}

echo "Testing permutations function...\n";
echo "Calling perm(['a','b','c'])...\n";

$perms = perm(['a','b','c']);
print_r($perms);