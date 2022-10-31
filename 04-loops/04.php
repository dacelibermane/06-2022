<?php

$numbers = [1, 3, 4, 6, 7, 9, 10, 11, 12, 15];

foreach ($numbers as $number){
    if($number%3 === 0){
        echo "$number".PHP_EOL;
    }
}