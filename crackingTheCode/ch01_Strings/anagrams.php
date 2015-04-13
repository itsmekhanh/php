<?php 

function anagram($a, $b){
  $aLen = count($a);
  $bLen = count($b);

  if($aLen != $bLen) return false;

  $diff = 0;
  $map = array();
  for($i = 0; $i<$aLen; $i++){
    $A = $a[$i]; $B = $b[$i];

    if(!isset($map[$A])){
      $map[$A] = 1;
      $diff++;
    }else{
      $map[$A]++;
      if($map[$A] == 0) $diff--;
    }

    if(!isset($map[$B])){
      $map[$B] = -1;
      $diff++;
    }else{
      $map[$B]--;
      if($map[$B] == 0) $diff--;
    }
  }
  return !$diff;
}

echo "Testing anagram...\n";
echo "string 1: dog, string 2: god\n";
echo "Result: ";
echo anagram(str_split("dog"), str_split("god")) ? "Yes, they are anagrams\n" : "No, they are not anagrams\n";
?>
