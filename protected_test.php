<?php

// Class
class Human {
    // Properties
    protected $firstName;
    protected $lastName;

    // default method
    function __construct($firstName, $lastName) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    // method
    public function fullname() {
        echo $this->firstName . ' ' . $this->lastName . "<br/>";
    }
}

class Person extends Human {

    function iWantToKnowFirstname() {
        echo $this->firstName;
    }

}

// Object
$person = new Person("Anik", "Alam");
// $person->firstName = "Farjana"; // error because the method is protected
$person->fullname();
$person->iWantToKnowFirstname();

?>