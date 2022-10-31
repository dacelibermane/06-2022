<?php

$minNum = 1;
$maxNum = 100;

function sumNumbers(int $min, int $max):string{
    $sum = 0;
   for($i = $min; $i <= $max; $i++){
       $sum += $i;
   }
   $average = $sum / $max;
   return "The sum of 1 to 100 is $sum.".PHP_EOL."The average is $average";
}

echo sumNumbers($minNum, $maxNum);