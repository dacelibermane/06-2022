<?php
error_reporting(E_ALL ^ E_NOTICE);

$person = new stdClass();
$person->name = "Dave";
$person->licenses = ['A', 'B', 'D'];
$person->cash = 200;


function createWeapon(string $name, string $license, int $price):stdClass{
    $weapon = new stdClass();
    $weapon->name = $name;
    $weapon->license = $license;
    $weapon->price = $price;
    return $weapon;
}


$weapons = [
    createWeapon('Pistol', 'B', 100),
    createWeapon('Rifle', 'C', 250),
    createWeapon('Shotgun', 'A', 350),
];

$licensesText = implode(',', $person->licenses);
echo "Welcome, {$person->name}! Your cash: {$person->cash}$. Your licenses: {$licensesText}.";

echo PHP_EOL;
echo PHP_EOL;

foreach ($weapons as $key => $weapon){
    echo "$key - {$weapon->name} ({$weapon->price}$) [{$weapon->license}]".PHP_EOL;
}

$userSelection = (int)readline("Enter the number of your chosen gun: ");

$selectedWeapon = $weapons[$userSelection];


if($selectedWeapon === null){
    echo "Invalid selection!";
    exit;
}

if($person->cash < $selectedWeapon->price){
    echo "You don't have enough money!".PHP_EOL;
    exit;
}

if(!in_array($selectedWeapon->license, $person->licenses)){
    echo "You don't have a valid license!";
    exit;
}

if($person->cash > $selectedWeapon->price && in_array($selectedWeapon->license, $person->licenses)){
    echo "Selection successful! You can purchase the selected weapon - {$selectedWeapon->name}.".PHP_EOL;
}