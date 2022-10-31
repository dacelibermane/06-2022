<?php

$numbers = [];
$numbers2= [];
$n = 10;

for($i = 0; $i < $n; $i++){
    $numbers[$i] = rand(1, 100);
}

for($i = 0; $i < count($numbers); $i++){
    $numbers2[$i] = $numbers[$i];
}

array_pop($numbers);
//array_push($numbers, -7);
$numbers[] = -7;

for($i = 0; $i < count($numbers); $i++){
    echo $numbers[$i] . " ";
}
echo PHP_EOL;

for($i = 0; $i < count($numbers2); $i++){
    echo $numbers2[$i] . " ";
}
echo PHP_EOL;

