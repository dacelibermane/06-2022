<?php

function display_board($cel)
{
    echo " $cel[0] | $cel[1] | $cel[2]\n";
    echo "---+---+---\n";
    echo " $cel[3] | $cel[4] | $cel[5]\n";
    echo "---+---+---\n";
    echo " $cel[6] | $cel[7] | $cel[8] \n";
}

$cells = [' ', ' ', ' ', ' ', ' ', ' ',' ', ' ', ' '];

$cellIndexes = [[]];
$val = 0;

for($i=0;$i<3;$i++){
    for($j=0;$j<3;$j++){
        $cellIndexes[$i][$j] = $val++;
    }
}

$firstPlayer = 'O';
$secondPlayer = 'X';
$turn = $firstPlayer;
display_board($cells);


$inputRow = (int)readline("'X', choose your location (row, column): ");
$inputColumn = (int)readline();
$position = [[$inputRow, $inputColumn ]];

