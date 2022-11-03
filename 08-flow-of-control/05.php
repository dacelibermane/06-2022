<?php

$userInput = str_split(strtolower(readline("Enter a word: ")));

function phoneKeyPad(array $word): int
{
    $digit = 0;
    for ($i = 0; $i < count($word); $i++) {
        $char = $word[$i];
        switch ($char) {
            case 'a': case 'b': case 'c': $digit .= 2; break;
            case 'd': case 'e': case 'f': $digit .= 3; break;
            case 'g': case 'h': case 'i': $digit .= 4; break;
            case 'j': case 'k': case 'l': $digit .= 5; break;
            case 'm': case 'n': case 'o': $digit .= 6; break;
            case 'p': case 'q': case 'r': case 's': $digit .= 7; break;
            case 't': case 'u': case 'v': $digit .= 8; break;
            case 'w': case 'x': case 'y': case 'z': $digit .= 9; break;
        }
    }
    return $digit;
}

echo phoneKeyPad($userInput);
