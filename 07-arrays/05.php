<?php
$board =
    [
        [' ', ' ', ' '],
        [' ', ' ', ' '],
        [' ', ' ', ' ']
    ];

//Winning combinations
$combinations = [
        //Horizontal
        [[0, 0], [0, 1], [0, 2]],
        [[1, 0], [1, 1], [1, 2]],
        [[2, 0], [2, 1], [2, 2]],
        //Vertical
        [[0, 0], [1, 0], [2, 0]],
        [[0, 1], [1, 1], [2, 1]],
        [[0, 2], [1, 2], [2, 2]],
        //Diagonal
        [[0, 0], [1, 1], [2, 2]],
        [[0, 2], [1, 1], [2, 0]]
    ];

function display_board($cel)
{
    echo " {$cel[0][0]} | {$cel[0][1]} | {$cel[0][2]} \n";
    echo "---+---+---\n";
    echo " {$cel[1][0]} | {$cel[1][1]} | {$cel[1][2]} \n";
    echo "---+---+---\n";
    echo " {$cel[2][0]} | {$cel[2][1]} | {$cel[2][2]}  \n";
}

display_board($board);
$firstPlayer = 'X';
$secondPlayer = 'O';
$currentPlayer= $firstPlayer;
$turns = 0;


while(true) {
    $turns++;
    $userChoice= readline("\n{$currentPlayer}', choose your location (row, column): \n");
    [$row, $col] = explode(' ', $userChoice);

    if($row === null || $col === null){
        display_board($board);
        echo "\nInvalid input. Please enter two numbers.\n";
        continue;
    }

    if($board[$row][$col] == ' '){
        $board[$row][$col] = $currentPlayer;
    } else{
        display_board($board);
        echo "\n Cell is already filled, choose another!\n";
        continue;
    }
    echo PHP_EOL;
    display_board($board);

//Winning cases
    foreach ($combinations as $combination){
        $conditionCount = 0;
        foreach ($combination as $position){
            [$row, $col] = $position;
            if($board[$row][$col] !== $currentPlayer) {
                break;
            }
            $conditionCount++;
        }
        if($conditionCount === count($combination)){
            echo "\nPlayer {$currentPlayer} wins!\n";
            exit;
        }
    }

    //Tie
    if($turns === 9) {
        echo "It's a tie!";
        exit;
    }

    //Change players' turns
    $currentPlayer = $currentPlayer === $firstPlayer ? $secondPlayer : $firstPlayer;
}




