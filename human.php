<?php

// Class
class Human {
    // Properties
    public $firstName;
    public $lastName;

    function __construct($a, $b) {
        echo "<p>I am constructor function.</p>";

        $this->firstName = $a;
        $this->lastName = $b;
    }

    // method
    function fullname() {
        echo $this->firstName . ' ' . $this->lastName;
    }

    function __destruct() {
        echo "<p>I am destructor function.</p>";

        unset($this->firstName);
        unset($this->lastName);
    }

}

// Object
// $human = new Human();
// $human->firstName = "Anik";
// $human->lastName = "Alam";
// $human->fullname();

$human = new Human("Farjana", "Tasnim");
$human->fullname();

$x = 10;
echo "<p>" . $x . "</p>";
unset($x);
echo $x;

?>