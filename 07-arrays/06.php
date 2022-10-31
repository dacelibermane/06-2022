<?php

$words = ['cup', 'basement', 'forest', 'watermelon'];
$word = $words[array_rand($words)];
$letters = str_split($word);
$correctWord = str_split(str_repeat('_', strlen($word)));
$maxGuesses = count($letters) + 3;
$userGuessCount = 0;
$correctLetters = implode(' ', $correctWord);
$guessedLetters = '';
$missedLetters = '';



var_dump($word);
while ($userGuessCount < $maxGuesses && in_array('_', $correctWord)) {
    $showWord = "Word: " . $correctLetters;
    $showGuessedLetters = "Guessed: " .$guessedLetters;
    $showMissedLetters = "Missed: " . $missedLetters;


    echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-";
    echo PHP_EOL;
    echo PHP_EOL;
    echo $showWord;
    echo PHP_EOL;
    echo PHP_EOL;
    echo $showGuessedLetters;
    echo PHP_EOL;
    echo PHP_EOL;
    echo $showMissedLetters;
    echo PHP_EOL;
    echo PHP_EOL;

    $enteredLetter = readline("Guess: ");
    $letterPositions = array_keys($letters, $enteredLetter);

    if (strlen($enteredLetter) > 0) {
        if (count($letterPositions) > 0) {
            foreach ($letterPositions as $position) {
                $correctWord[$position] = $enteredLetter;
            }
            $guessedLetters .= $enteredLetter;
        }if(!in_array($enteredLetter, $letters)){
         $missedLetters .= $enteredLetter;
        }

        $correctLetters = implode(' ', $correctWord);

        $userGuessCount++;
    }
}

echo !in_array('_', $correctWord) ? "YOU GOT IT!": "You didn't guess the word:(";



