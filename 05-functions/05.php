<?php
//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg. Create a secondary
//array with shipping costs per weight. Meaning that you can say that over 10 kg shipping
//costs are 2 euros, otherwise its 1 euro. Using foreach loop print out the values of the
//fruits and how much it would cost to ship this product.


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



