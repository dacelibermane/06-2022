<?php


function areaOfCircle(int $radius): float
{
    return $radius < 0 ? 'Error!' : pi() * $radius * $radius;
}

function areaOfRectangle(int $length, int $width): int
{
    return $length < 0 || $width < 0 ? 'Error!' : $length * $width;
}

function areaOfTriangle(int $base, int $height, float $coef = 0.5): float
{
    return $base < 0 ? 'Error!' : $base * $height * $coef;
}

function getMenu(): int
{
    echo PHP_EOL;
    echo "Geometry Calculator\n";
    echo "1. Calculate the Area of a Circle\n";
    echo "2. Calculate the Area of a Rectangle\n";
    echo "3. Calculate the Area of a Triangle\n";
    echo "4. Quit\n";
    echo "Enter your choice (1-4) : ";
    $userInput = readline();

    while ($userInput < 1 || $userInput > 4) {
        $userInput = readline("Please enter a valid number 1, 2, 3 or 4: ");
    }
    return $userInput;
}

$userChoice = getMenu();
while ($userChoice !== 4) {
    if ($userChoice === 1) {
        $userRadius = (int)readline("Enter the radius: ");
        echo "The circle's area is " . areaOfCircle($userRadius) . ".";
        echo PHP_EOL;
    } elseif ($userChoice === 2) {
        $userLength = (int)readline("Enter the length: ");
        $userWidth = (int)readline("Enter the width: ");
        echo "The rectangle's area is " . areaOfRectangle($userLength, $userWidth) . ".";
        echo PHP_EOL;
    } elseif ($userChoice === 3) {
        $userBase = (int)readline("Enter the base: ");
        $userHeight = (int)readline("Enter the height: ");
        echo "The triangle's area is " . areaOfTriangle($userBase, $userHeight) . ".";
        echo PHP_EOL;
    } else {
        echo "See you next time!";
    }
    getMenu();
}
getMenu();