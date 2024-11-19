<?php 
// Encapsulation
class Person{
    private $firstName;

    public function __construct($firstName){
        $this->firstName = $firstName;
    }

    public function getFirstName(){
        return $this->firstName . "is a good coder";
    }
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
}

$person1 = new Person('Shola');
echo $person1->getFirstName() . PHP_EOL; // Output: Shola

$person1->setFirstName('John');
echo $person1->getFirstName(); // Output: John