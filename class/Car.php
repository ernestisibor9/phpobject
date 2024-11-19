<?php 
    class Car {
        public $name;
        public $description;

        function helloCar(){
            echo "This is my class hello" . PHP_EOL;
        }
    }

    $hello = new Car();
    
    $hello->name = "Ferrari";
    $hello->description = "This is my favorite car";

    echo "Ilove $hello->name because $hello->description is my favorite car" .PHP_EOL;