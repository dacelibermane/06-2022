<?php

class Geometry
{

    public function areaOfCircle(int $radius): string
    {

        return $radius < 0 ? 'Error!' : round((pi() * $radius * $radius), 2);

    }

    public function areaOfRectangle(int $length, int $width): string
    {
        return $length < 0 || $width < 0 ? 'Error!' : $length * $width;
    }

    public function areaOfTriangle(int $base, int $height): string
    {
        return $base < 0 ? 'Error!' : $base * $height * 0.5;
    }

}

function getMenu()
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


do {
    $userChoice = (int)getMenu();

    if ($userChoice === 1) {
        $geometry = new Geometry();
        $userRadius = (int)readline("Enter the radius: ");
        echo "The circle's area is " . $geometry->areaOfCircle($userRadius);
        echo PHP_EOL;
    } elseif ($userChoice === 2) {
        $geometry = new Geometry();
        $userLength = (int)readline("Enter the length: ");
        $userWidth = (int)readline("Enter the width: ");
        echo "The rectangle's area is " . $geometry->areaOfRectangle($userLength, $userWidth);
        echo PHP_EOL;
    } elseif ($userChoice === 3) {
        $geometry = new Geometry();
        $userBase = (int)readline("Enter the base: ");
        $userHeight = (int)readline("Enter the height: ");
        echo "The triangle's area is " . $geometry->areaOfTriangle($userBase, $userHeight);
        echo PHP_EOL;
    } else {
        echo "See you next time!";
    }

} while ($userChoice !== 4);