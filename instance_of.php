<?php

/**
 * instanceof:
 * 
 * You can use the instanceof keyword to check if an object belongs to a specific class:
 */

// Class 
class Human {
    // Code goes to here
}

// Object
$human1 = new Human();
$human2 = new Human();
$human3 = new Human();

// Instance of
var_dump($human1 instanceof('Human'));

?>