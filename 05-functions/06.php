<?php
//Create an non-associative array with 5 elements where 3 are integers,
//1 float and 1 string. Create a for loop that iterates non-associative
//array using php in-built function that determines count of elements in the array.
//Create a function that doubles the integer number. Within the loop using php in-built
//unction print out the double of the number value (using your custom function).

$elements = [2, 5, 9, 2.5, "world"];

$elCount = count($elements);
for($i = 0; $i < $elCount; $i++){
    echo doubleNumber($elCount);
}

function doubleNumber($number){
    return $number *2;
}