<?php

$userInput = str_split(strtolower(readline("Enter a word: ")));

function phoneKeyPad($word): int
{
    $digit = 0;
    for ($i = 0; $i < count($word); $i++) {
        $char = $word[$i];
        switch ($char) {
            case 'a': $digit .= 2; break;
            case 'b': $digit .= 22; break;
            case 'c': $digit .= 222; break;
            case 'd': $digit .= 3; break;
            case 'e': $digit .= 33; break;
            case 'f': $digit .= 333; break;
            case 'g': $digit .= 4; break;
            case 'h': $digit .= 44; break;
            case 'i': $digit .= 444; break;
            case 'j': $digit .= 5; break;
            case 'k': $digit .= 55; break;
            case 'l': $digit .= 555; break;
            case 'm': $digit .= 6; break;
            case 'n': $digit .= 66; break;
            case 'o': $digit .= 666; break;
            case 'p': $digit .= 7; break;
            case 'q': $digit .= 77; break;
            case 'r': $digit .= 777; break;
            case 's': $digit .= 7777; break;
            case 't': $digit .= 8; break;
            case 'u': $digit .= 88; break;
            case 'v': $digit .= 888; break;
            case 'w': $digit .= 9; break;
            case 'x': $digit .= 99; break;
            case 'y': $digit .= 999; break;
            case 'z': $digit .= 9999; break;
        }
    }
    return $digit;
}

echo phoneKeyPad($userInput);
