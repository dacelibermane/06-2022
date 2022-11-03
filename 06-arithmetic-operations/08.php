<?php

function main($name, $base, $hours): string
{
    return calculateSalary($name, $base, $hours);

}

function calculateSalary($name, $base, $hours, $minimumWage = 8.00, $maxHours = 60): string
{
    $message = '';
    if (($base < $minimumWage) || ($hours > $maxHours)) {
        echo "Error!";
    } else {
        if ($hours > 40) {
            $totalSalary = $base * 40 + 1.5 * $base * ($hours - 40);

        } else {
            $totalSalary = $base * $hours;
        }
        $message = "$name your total salary is: $totalSalary";
    }
    return $message;
}


$employees = [
    ['name' => 'Ron', 'base' => 7.5, 'hours' => 35],
    ['name' => 'Bob', 'base' => 8.20, 'hours' => 47],
    ['name' => 'Linda', 'base' => 10.00, 'hours' => 73],
];

foreach ($employees as $employee) {
    echo main($employee['name'], $employee['base'], $employee['hours']) . PHP_EOL;
}
