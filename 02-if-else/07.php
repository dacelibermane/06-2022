<?php

$number = 54;

switch ($number){
    case $number < 50:
        echo "low";
        break;

    case $number > 50 && $number < 100:
        echo "medium";
        break;

    case $number > 100:
        echo "high";
        break;

    default:
        echo "Can't figure out the number!";
        break;

}