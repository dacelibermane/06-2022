<?php

$userInput = readline("Enter a number: ");

function checkOddEven(int $num):string{
    if($num%2 === 0){
        echo "The number {$num} is even.".PHP_EOL;
    }
       echo  "The number {$num} is odd.".PHP_EOL;

    exit('Bye!');
}

echo checkOddEven($userInput);
