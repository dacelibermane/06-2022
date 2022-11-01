<?php

$num1 = (int)readline("Input the 1st number:");
$num2 = (int)readline("Input the 2nd number:");
$num3 = (int)readline("Input the 3rd number:");


if($num1 > $num2 && $num1 > $num3){
    echo $num1;
}else{
    if($num2 > $num1 && $num2 > $num3){
      echo $num2;
    }
    echo $num3;
};

