<?php
$elements = [2, 5, 9, 2.5, "world"];

$elCount = count($elements);
for($i = 0; $i < $elCount; $i++){
    echo doubleNumber($elCount);
}

function doubleNumber($number){
    return $number *2;
}