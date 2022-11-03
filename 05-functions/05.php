<?php

$fruits = [
    ["fruit" => "apple", "weight" => 9],
    ["fruit" => "pear", "weight" => 15],
    ["fruit" => "melon", "weight" => 25],
    ["fruit" => "banana", "weight" => 5]
];

$shippingCosts =
    ["high" => 2, "low" => 1];

function fruitWeight($fruits, $costs): string
{
    if ($fruits['weight'] > 10) {
        return "You ordered {$fruits['weight']}kg of {$fruits['fruit']}. So the shipping will cost {$costs['high']}EUR." . PHP_EOL;
    }
    return "You ordered {$fruits['weight']}kg of {$fruits['fruit']}. So the shipping will cost {$costs['low']}EUR." . PHP_EOL;

}


foreach ($fruits as $fruit) {

    echo fruitWeight($fruit, $shippingCosts);
}


