<?php

// Class 
class Human {
    // Properties
    public $name;
    public $age;
}

// Object
$human1 = new Human();
$human1->name = "Farjana"; // set 

$human2 = new Human();
$human2->name = "Anik";

echo $human1->name; // get
echo "<br/>";
echo $human2->name;

// echo "<br/>";

?>