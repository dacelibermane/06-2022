<?php


class Employee
{
    public float $basePay;
    public int $hoursWorked;
    public float $minimumWage = 8.00;
    public int $maxHours = 60;


    public function __construct($base, $hours)
    {
        $this->basePay = $base;
        $this->hoursWorked = $hours;
    }


    public function main()
    {
        $this->calculateSalary($this->basePay,$this->hoursWorked,$this->minimumWage,$this->maxHours);

    }

    public function calculateSalary($base,$hours,$minimumWage,$maxHours)
    {
        if (($base < $minimumWage) || ($hours > $maxHours)) {
           echo "Error!";
        } else {
            if ($hours > 40) {
                $totalSalary = $base * 40 + 1.5 * $base * ($hours - 40);

            } else {
                $totalSalary = $base * $hours;
            }
            echo "Your total salary is: " . round($totalSalary, 2);
        }

    }
}

$employee1 = new Employee( 7.50, 35);
$employee2 = new Employee( 8.20, 47);
$employee3 = new Employee( 10.00, 73);

$employee1->main();
echo PHP_EOL;
$employee2->main();
echo PHP_EOL;
$employee3->main();
echo PHP_EOL;