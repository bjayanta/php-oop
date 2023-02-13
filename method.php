<?php

// Class 
class Human {
    // Properties
    public $name;
    public $age;

    // Methods 
    public function set_name($x) {
        $this->name = $x;
    }
}

// Object
$human1 = new Human();
$human1->set_name("Farjana");
echo $human1->name; // get

echo "<br/>";

$human2 = new Human();
$human2->set_name("Anik");
echo $human2->name; // get

?>