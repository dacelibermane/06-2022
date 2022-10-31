<?php

$randNum = mt_rand(1,100);
echo "I'm thinking of a number between 1-100. Try to guess it!";
echo PHP_EOL;
$userGuess = (int)readline(">");
echo PHP_EOL;

function guessNumber(int $num, int $guess):string{
    if($num === $guess){
        echo "You guessed it!  What are the odds?!?";
    }elseif($guess > $num){
        echo "Sorry, you are too high. I was thinking of $num.";
    }else{
        echo "Sorry, you are too low. I was thinking of $num.";
    }
    exit();
}

guessNumber($randNum,$userGuess);
