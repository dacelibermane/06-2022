<?php

$cells = [
    ['', '', ''],
    ['', '', ''],
    ['', '', '']
];
$player = 'X';
$activeCell = [0 => 0, 1 => 0];


function display_board($cells)
{
    foreach($cells as $cell){
        foreach($cell as $key =>$item){
            echo " $key |";
        }
       echo "\n";
       echo "---+---+---\n";
    }
}

$userX = readline("'X', choose your location (row, column): ");
if()

display_board($cells);
