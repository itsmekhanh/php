<?php 

function parity($i){
  $one = 1;
  $count = 0;

  while($i > 0){
    if($i & $one > 0){
      $count++;
    }
    $i = $i >> 1;
  } 

  return $count % 2;
}

echo "parity() - returns 1 if the number of 1 bits is odd; returns 0 if even.\n";
echo "parity(1): ".parity(1)."\n";
echo "parity(3): ".parity(3)."\n";
echo "Done\n!";

?>
