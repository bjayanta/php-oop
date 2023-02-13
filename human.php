<?php

// Class
class Human {
    // Properties
    public $firstName;
    public $lastName;

    function __construct($a, $b) {
        echo "I am constructor function.";

        $this->firstName = $a;
        $this->lastName = $b;
    }

    // method
    function fullname() {
        echo $this->firstName . ' ' . $this->lastName;
    }

}

// Object
// $human = new Human();
// $human->firstName = "Anik";
// $human->lastName = "Alam";
// $human->fullname();

$human = new Human("Anik", "Alam");
$human->fullname();

?>