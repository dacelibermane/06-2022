<?php
$persons= [];

$persons[0] = new stdClass();
$persons[0]->name = "Jim";
$persons[0]->surname = "Harris";
$persons[0]->age = 15;

$persons[1] = new stdClass();
$persons[1]->name = "Jane";
$persons[1]->surname = "Miler";
$persons[1]->age = 12;

$persons[2] = new stdClass();
$persons[2]->name = "Peter";
$persons[2]->surname= "Miles";
$persons[2]->age = 31;


function validateAge($peopleData):string{
    $message = "";

 foreach ($peopleData as $key => $value) {
    if($value->age >= 18){
        $message .= "{$value->name} you have reached the age of 18!".PHP_EOL;
    }else{
        $message .= "{$value->name} you have not reached the age of 18!".PHP_EOL;
    }
 }
 return $message;
};

echo validateAge($persons);
