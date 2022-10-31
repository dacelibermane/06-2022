<?php
$fallingTime = 10;
function gravityCalculator(int $time):float{
    $a = -9.81;
    $vi = 0.00;
    $xi = 0.00;

    return 0.5 * ($a *pow($time,2) + ($vi * $time) + $xi);
}

echo gravityCalculator($fallingTime);