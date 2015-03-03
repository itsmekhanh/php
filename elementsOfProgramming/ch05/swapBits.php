<?php 
/* Write a function swap bits given integer $a at indices $i and $j */

function swapBits($a, $i, $j){
  $iVal = ($a & (1 << $i)) > 0;
  $jVal = ($a & (1 << $j)) > 0;

  $mask = ~0;
  $mask = $mask ^ (1 << $i);
  $mask = $mask ^ (1 << $j);

  $a = $a & $mask;
  
  $a = $a | ($iVal << $j);
  $a = $a | ($jVal << $i);

  return $a;
}


echo swapBits(5, 0, 1);

?>
