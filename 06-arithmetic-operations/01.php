<?php

$firstNum = readline("Enter first number: ");
$secondNum = readline("Enter the second number: ");

function fifteen(int $num1, int $num2):string{

   if ($num1 === 15 || $num2 === 15 || $num1 + $num2 === 15 || ($num1 - $num2) === 15){
       return 'true';
   }
   return 'false';

}

echo fifteen($firstNum,$secondNum);