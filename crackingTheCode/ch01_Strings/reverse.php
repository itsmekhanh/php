<?php 

function reverse($chars){
  $length = count($chars);
  for($i=0; $i<$length/2; $i++){
    $temp = $chars[$i];
    $chars[$i] = $chars[$length-1-$i];
    $chars[$length-1-$i] = $temp;
  } 
  return implode("", $chars);
}

echo "Testing reverse()....\n";
echo "Reversing 'abcde'\n";
echo "Result: ".reverse(str_split('abcde'));
echo "\nDone!\n";
?>
