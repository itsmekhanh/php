<?php
/**
 * Given an integer, write out the English word equivalent. Example. 123 ---> One Hundred Twenty Three
 */

function printNumberToEnglish($number){
    $ones = array("","one", "two", "three", "four", "five", "six", "seven", "eight", "nine");
    $teens = array("ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
    $tens = array("","","twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninty");

    $bigs = ["", "thousand", "million", "billion", "trillion"];
    $bigIndex = -1;

    $output = "";

    while($number > 0){
        $value = $number % 1000;

        if($value > 0){
            $hundredth =  $ones[floor($value / 100)];

            if(!empty($hundredth)){ $hundredth .= " hundred"; }

            $value = $value % 100;

            if($value >= 10 && $value < 20){
                $tenth = $teens[$value%10];
                $one = "";
            }else{
                $tenth = $tens[floor($value/10)];
                $one = $ones[$value % 10];
            }
        }
        $number = floor($number/1000);
        $bigIndex++;

        $output = $hundredth." ".$tenth. " ". $one. " ". $bigs[$bigIndex]." ".$output;
    }

    return trim($output);
}

echo "Testing printNumberToEnglish()...\n";
echo "Number is 101\n";
echo "Output: ".printNumberToEnglish(1112345);
echo "\nAll done!\n";