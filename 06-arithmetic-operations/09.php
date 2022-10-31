<?php

function bodyMassIndex(float $height,float $weight):float{
    return round(($weight / ($height * $height)), 1);
}

$bmi = bodyMassIndex(1.70, 70);

if($bmi <= 18.5){
    $output = "Underweight";
}elseif($bmi > 18.5 && $bmi <= 25){
    $output = "Normal weight";
}else{
    $output = "Overweight";
}

echo "Your BMI is $bmi: $output.";