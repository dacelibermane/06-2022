<?php

function createEmployees(string $name, float $base, int $hours):stdClass
{
    $employee = new stdClass();
    $employee->name = $name;
    $employee->base = $base;
    $employee->hours = $hours;
    return $employee;
}

$employees = [
    createEmployees('Jim', 7.50, 35),
    createEmployees('Michael', 8.20, 47),
    createEmployees('Linda', 10.00, 73),
];



function employeeData(array $employees){
    foreach ($employees as $employee){
        return salary($employee->name, $employee->base, $employee->hours);
    }
}

function salary(string $name, float $basePay,int $hoursWorked):string{
    $maxHours = 60;
    $minimumWage = 8.00;
    $totalSalary = 0;
    if(($basePay < $minimumWage) || ($hoursWorked > $maxHours)){
        echo "Error!";
    }else{
        if($hoursWorked > 40){
          $totalSalary =  $basePay * 40 + 1.5* $basePay *($hoursWorked - 40);

        }else{
           $totalSalary = $basePay * $hoursWorked;
        }
    }
    return "$name your total salary is $totalSalary.";
};

employeeData($employees);

//$employee1 = new stdClass();
//$employee1 ->base = 7.5;
//$employee1 ->hours = 35;
//
//$employee2 = new stdClass();
//$employee2->base = 8.20;
//$employee2->hours = 47;
//
//$employee3 = new stdClass();
//$employee3->base = 10.00;
//$employee3->hours= 73;


//
////    $employee->base = $base;
////    $employee->hours = $hours;
////    return $employee;
//$employees = new $employees();
//$employees->salary($stdObject);