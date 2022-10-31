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
            echo " $item |";
        }
       echo "\n";
       echo "---+---+---\n";
    }
    if()
}


display_board($cells);
