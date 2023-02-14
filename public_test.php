<?php

// Class
class Human {
    // Properties
    public $firstName;
    public $lastName;

    // default method
    function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // method
    public function fullname() {
        echo $this->firstName . ' ' . $this->lastName;
    }
}

// Object
$human = new Human("Farjana", "Tasnim");
$human->firstName = "Anik"; // because the property is public
$human->fullname(); // because the method is public

?>