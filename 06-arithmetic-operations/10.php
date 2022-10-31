<?php
class Geometry {
    public static function areaOfCircle(int $radius):float{
        return pi() * $radius * $radius;
    }
    public static function areaOfRectangle(int $length, int $width):int{
        return $length * $width;
    }
    public static function areaOfTriangle(int $base,int $height):int{
        return $base * $height * 0.5;
    }
}

if()

echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$userChoice = readline("Enter your choice (1-4) : ");
echo $userChoice;

if ($userChoice < 1 || $userChoice > 4){
    $userChoice = readfile("Please enter a valid number: ");
    echo $userChoice;
}