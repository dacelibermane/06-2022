<?php
$cells = [' ', ' ', ' ', ' ', ' ', ' ',' ', ' ', ' '];

function display_board($cel)
{
    echo " $cel[0] | $cel[1] | $cel[2]\n";
    echo "---+---+---\n";
    echo " $cel[3] | $cel[4] | $cel[5]\n";
    echo "---+---+---\n";
    echo " $cel[6] | $cel[7] | $cel[8] \n";
}

display_board($cells);


