<?php 
    class Salary{
        public $housing = 0.24;
        public $transport = 0.59;
        public $salary;

        function calculateSalary($basic){
            $this->salary = $basic - ($this->housing + $this->transport);
            return $this->salary;
        }
    }

    $payment = new Salary();
    $out = $payment->calculateSalary(7000);
    echo "Your monthly salary is $out" . PHP_EOL;