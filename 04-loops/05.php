<?php

$persons= [
    "person1" => new stdClass(),
    "person2"=> new stdClass(),
    "person3" => new stdClass()
];

$persons['person1']->name = "Jim";
$persons['person1']->surname = "Harris";
$persons['person1']->age = 25;
$persons['person1']->birthday= "7th August";

$persons['person2']->name = "Jane";
$persons['person2']->surname = "Miler";
$persons['person2']->age = 42;
$persons['person2']->birthday = "3rd January";

$persons['person3']->name = "Peter";
$persons['person3']->surname= "Miles";
$persons['person3']->age = 31;
$persons['person3']->birthday = "21st December";

foreach ($persons as $key => $object){
    foreach ($object as $property => $value){
        echo "$property: $value".PHP_EOL;
    }
    echo PHP_EOL;
}






























//var_dump($persons);

//foreach ($persons as $person) {
//    echo $person->name.PHP_EOL.$person->surname.PHP_EOL.$person->age.PHP_EOL.$person->birthday.PHP_EOL.PHP_EOL;
//
//}
