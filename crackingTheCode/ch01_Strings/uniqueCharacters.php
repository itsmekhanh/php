<?php

function isUnique($chars){
  $map = array();
  foreach($chars as $c){
    if(isset($map[$c])){
      return false;
    }
    $map[$c] = 1;
  }
  return true;
}

echo "Testing uniqueCharacters....\n";

echo "First word: 'abcde'\n";
echo ".....";
echo isUnique(str_split('abcde')) ? "is unique!" : "is NOT unique";

echo "\nSecond word: 'aabc'\n";
echo ".....";
echo isUnique(str_split('aabc')) ? "is unique!" : "is NOT unique";

echo "\ndone!\n";

?>
