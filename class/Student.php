<?php 
    class Student{
        public $name = 'Alan Smith';
        public $department = 'Computer Science';

        function __construct()
        {
            $this->name = '';
            $this->department = '';
        }

        function printDetails(){
            echo "$this->name is currently studying $this->department" . PHP_EOL;
        }
    }

    $student1 = new Student();
    $student1->printDetails();