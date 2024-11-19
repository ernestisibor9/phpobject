<?php 
    class Chain{
        public $name = "Ledney King";
        public $club = "Tottenham";

        function myName(){
            echo "My name is $this->name" .PHP_EOL;
            $this->name = "Harry Kane";
            return $this;
        }

        function myClub (){
            echo "I am a legend of $this->club" .PHP_EOL;
        }
    }

    $chain1 = new Chain();
    $chain1->myName()->myClub();