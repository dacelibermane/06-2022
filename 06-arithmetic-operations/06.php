<?php

$num = 1;

while ($num <= 110){
    for($i = 1; $i <= 11; $i++){
        if($num%3 === 0 && $num%5 === 0){
            echo " CozaLoza";
        }elseif($num%3 === 0 && $num%7 === 0) {
            echo " CozaWoza";
        }elseif($num%5 === 0 && $num%7 === 0) {
            echo " LozaWoza";
        } elseif($num%3 === 0){
            echo " Coza";
        }elseif ($num%5 === 0){
            echo " Loza";
        }elseif ($num%7 === 0){
            echo " Woza";
        }else{
            echo " ".$num;
        }
        $num++;
    }
    echo PHP_EOL;
}


