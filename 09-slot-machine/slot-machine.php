<?php

$board = ['','','','','','','','','','','',''];

function display_board( array $cel)
{
    echo "{$cel[0]}| {$cel[1]} | {$cel[2]} |{$cel[3]}  \n";
    echo "=================================\n";
    echo "{$cel[4]}| {$cel[5]} | {$cel[6]} | {$cel[7]} \n";
    echo "=================================\n";
    echo "{$cel[8]}| {$cel[9]} | {$cel[10]} | {$cel[11]}  \n";
}

$symbols = ['bell', '888', '111', '777'];

for($i = 0; $i < 12; $i++){
    $board[$i].= $symbols[array_rand($symbols)];
}

$userCredit = 20;
$creditsPerSpin = 5;
$horizontalLine = $creditsPerSpin * 0.6;
$verticalLine = $creditsPerSpin * 0.4;
$combo = $creditsPerSpin * 0.2;
$pull = 0;

echo "\nWelcome! Your starting balance = {$userCredit}.\n";
    display_board($board);


echo "\nWelcome! Your starting balance = {$userCredit}.\n";
display_board($board);


//1st horizontal line
if ($symbols[0] == $board[0] && $symbols[0] == $board[1] && $symbols[0] == $board[2]) {
    $userCredit .= $horizontalLine;
}
if ($symbols[1] == $board[0] && $symbols[1] == $board[1] && $symbols[1] == $board[2]) {
    $userCredit .= $horizontalLine;
}
if ($symbols[2] == $board[0] && $symbols[2] == $board[1] && $symbols[2] == $board[2]) {
    $userCredit .= $horizontalLine;
}
if ($symbols[3] == $board[0] && $symbols[3] == $board[1] && $symbols[3] == $board[2]) {
    $userCredit .= $horizontalLine;
}
//2nd horizontal line
if ($symbols[0] == $board[4] && $symbols[0] == $board[5] && $symbols[0] == $board[6]) {
    $userCredit += $horizontalLine;
}
if ($symbols[1] == $board[4] && $symbols[1] == $board[5] && $symbols[1] == $board[6]) {
    $userCredit += $horizontalLine;
}
if ($symbols[2] == $board[4] && $symbols[2] == $board[5] && $symbols[2] == $board[6]) {
    $userCredit += $horizontalLine;
}
if ($symbols[3] == $board[0] && $symbols[3] == $board[1] && $symbols[3] == $board[2]) {
    $userCredit += $horizontalLine;
}

//3rd horizontal line
if ($symbols[0] == $board[8] && $symbols[0] == $board[9] && $symbols[0] == $board[10]) {
    $userCredit += $horizontalLine;
}
if ($symbols[1] == $board[8] && $symbols[1] == $board[9] && $symbols[1] == $board[10]) {
    $userCredit += $horizontalLine;
}
if ($symbols[2] == $board[8] && $symbols[2] == $board[9] && $symbols[2] == $board[10]) {
    $userCredit += $horizontalLine;
}
if ($symbols[3] == $board[8] && $symbols[3] == $board[9] && $symbols[3] == $board[10]) {
    $userCredit += $horizontalLine;
}

//1st vertical line
if ($symbols[0] == $board[0] && $symbols[0] == $board[4] && $symbols[0] == $board[8]) {
    $userCredit += $verticalLine;
}
if ($symbols[1] == $board[0] && $symbols[1] == $board[4] && $symbols[1] == $board[8]) {
    $userCredit += $verticalLine;
}
if ($symbols[2] == $board[0] && $symbols[2] == $board[4] && $symbols[2] == $board[8]) {
    $userCredit += $verticalLine;
}
if ($symbols[3] == $board[0] && $symbols[3] == $board[4] && $symbols[3] == $board[8]) {
    $userCredit += $verticalLine;
}

//2nd vertical line
if ($symbols[0] == $board[1] && $symbols[0] == $board[5] && $symbols[0] == $board[9]) {
    $userCredit += $verticalLine;
}
if ($symbols[1] == $board[1] && $symbols[1] == $board[5] && $symbols[1] == $board[9]) {
    $userCredit += $verticalLine;
}
if ($symbols[2] == $board[1] && $symbols[2] == $board[5] && $symbols[2] == $board[9]) {
    $userCredit += $verticalLine;
}
if ($symbols[3] == $board[1] && $symbols[3] == $board[5] && $symbols[3] == $board[9]) {
    $userCredit += $verticalLine;
}

//3rd vertical line
if ($symbols[0] == $board[2] && $symbols[0] == $board[6] && $symbols[0] == $board[10]) {
    $userCredit += $verticalLine;
}
if ($symbols[1] == $board[2] && $symbols[1] == $board[6] && $symbols[1] == $board[10]) {
    $userCredit += $verticalLine;
}
if ($symbols[2] == $board[2] && $symbols[2] == $board[6] && $symbols[2] == $board[10]) {
    $userCredit += $verticalLine;
}
if ($symbols[3] == $board[2] && $symbols[3] == $board[6] && $symbols[3] == $board[9]) {
    $userCredit += $verticalLine;
}

//4th vertical line
if ($symbols[0] == $board[3] && $symbols[0] == $board[7] && $symbols[0] == $board[11]) {
    $userCredit += $verticalLine;
}
if ($symbols[1] == $board[3] && $symbols[1] == $board[7] && $symbols[1] == $board[11]) {
    $userCredit += $verticalLine;
}
if ($symbols[2] == $board[3] && $symbols[2] == $board[7] && $symbols[2] == $board[11]) {
    $userCredit += $verticalLine;
}
if ($symbols[3] == $board[3] && $symbols[3] == $board[7] && $symbols[3] == $board[11]) {
    $userCredit += $verticalLine;
}


//1st combo
if ($symbols[0] == $board[0] && $symbols[0] == $board[5] && $symbols[0] == $board[6]) {
    $userCredit += $combo;
}
if ($symbols[1] == $board[0] && $symbols[1] == $board[5] && $symbols[1] == $board[6]) {
    $userCredit += $combo;
}
if ($symbols[2] == $board[0] && $symbols[2] == $board[5] && $symbols[2] == $board[6]) {
    $userCredit += $combo;
}
if ($symbols[3] == $board[0] && $symbols[3] == $board[5] && $symbols[3] == $board[6]) {
    $userCredit += $combo;
}
echo $userCredit;








//    display_board($board);
//    $spinBalance = $userCredit - $creditsPerSpin;
//
//
//}






