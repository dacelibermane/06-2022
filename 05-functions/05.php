<?php

$fruits = [
    ["fruit" => "apple", "weight" => 9],
    ["fruit" => "pear", "weight" => 15],
    ["fruit" => "melon", "weight" => 25],
    ["fruit" => "banana", "weight" => 5],
];

$shippingCosts =
    ["high" => 2, "low" => 1];

function fruitWeight(int $weight):string
{
        if ($weight > 10) {
            $output = "Fruits weight is more than 10kg";
        } else {
            $output = "Fruits weight is less than 10kg";
        }
        return $output;
    }



    foreach ($fruits as $fruit) {
        echo "You ordered {$fruit['weight']}kg of {$fruit['fruit']}. " . fruitWeight($fruit['weight']) . PHP_EOL;
    }



