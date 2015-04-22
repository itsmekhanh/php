<?php

function compress($chars){
    $count = 0; $prev = null; $output = "";

    foreach($chars as $c){
        if($c != $prev){
            if(isset($prev)){
                $output .= $prev.$count;
            }
            $count = 1; $prev = $c;
        }else{
            $count++;
        }
    }
    return $output.$prev.$count;
}

echo "Testing string compress...\n";
echo "String: aaabbb\n";
echo "Result - " . compress(str_split("aaabbb"));
echo "String: aabbac\n";
echo "Result - " . compress(str_split("aabbac"));
echo "\nDone!\n";