<?php

$number = 22;

if($number >= 20 && $number <= 30 && ($number%2 === 0)){
    echo "${number} is even and is in the range of 20 to 30.";
}else{
    echo "${number} is not an even number.";
}
