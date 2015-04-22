<?php

class ArrayHelper{

    static function printMatrix($matrix){
        for($i=0; $i<count($matrix); $i++){
            for($j=0; $j<count($matrix[$i]); $j++){
                echo "[".$matrix[$i][$j]."]";
            }
            echo "\n";
        }
    }
}