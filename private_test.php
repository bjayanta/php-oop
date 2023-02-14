<?php

// Class
class Human {
    // Properties
    private $firstName;
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
$human->firstName = "Anik"; // error because the property is private
$human->fullname(); // because the method is public

?>