<?php



class Employee{
    public string $name;
    public float $base;
    public int $hours;

    public function __construct($name,$base,$hours){
            $this->name = $name;
            $this->base = $base;
            $this->hours = $hours;
        }

        public function calculateSalary($name,$base,$hours):string{
            $this->name = $name;
            $this->base = $base;
            $this->hours = $hours;
            $minimumWage = 8.00;
            $maxHours = 60;
            $totalSalary = 0;
            if(($base < $minimumWage) || ($hours > $maxHours)){
                echo "Error!";
            }else{
                if($hours > 40){
                  $totalSalary =  $base * 40 + 1.5* $base *($hours - 40);

                }else{
                   $totalSalary = $base * $hours;
                }
            }
            return "$name your total salary is $totalSalary.";
            }
}

$employee1 = new Employee('Jim', 7.50, 35);
$employee2 = new Employee('Michael', 8.20, 47);
$employee3 = new Employee('Linda', 10.00, 73);


