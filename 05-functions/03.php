<?php

$person = new stdClass();
$person->name = "Jane";
$person->surname = "Hill";
$person->age = 15;

function validateAge($personData):string{
    if($personData->age >= 18){
        return $personData->name . " you have reached the age of 18!";
    }else{
        return $personData->name . " you have not reached the age of 18!";
    }
}

echo validateAge($person);