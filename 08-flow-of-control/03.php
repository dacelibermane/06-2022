<?php

$userInput = readline("Enter the number: ");
echo PHP_EOL;

function countDigits(int $num):string{
    if($num > 0){
        $digits = strlen($num);
       return "The number you entered ({$num}), has {$digits} digits in it.";
    }
    return "Please enter a positive number.";
};

echo (countDigits($userInput));