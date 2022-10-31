<?php

$lowest = 1;
$highest = 10;

function factorialNum(int $num1, int $num2):int{
    $result = 1;
    for($i = $num1; $i <= $num2; $i++){
        $result = $result * $i;
    }
    return $result;
}

echo factorialNum($lowest,$highest).PHP_EOL;