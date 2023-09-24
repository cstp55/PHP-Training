<?php
/**
 * 7. Encapsulation
 * Wrapping the related Data, called the encapsulation. like a capsules.
 * Encapsulation is a fundamental concept in object-oriented programming (OOP) that involves bundling data (attributes) and the methods (functions) that operate on that data into a single unit called a class.
 * The key idea is to restrict direct access to an object's data and provide controlled access through methods
 * Let's take a practical example using a Car class:
 */
class Car {
    private $brand; // Private property

    public function __construct($initialBrand) {
        $this->brand = $initialBrand;
    }

    // Getter method to retrieve the brand
    public function getBrand() {
        return $this->brand;
    }

    // Setter method to set the brand
    public function setBrand($newBrand) {
        $this->brand = $newBrand;
    }

    public function start() {
        echo "Car starting.. ";
    }
}

// Create a Car object with an initial brand
$myCar = new Car("TATA");

// Access the brand using the getter method
echo "Brand: " . $myCar->getBrand() . "<br>";

// Attempt to access the brand directly (This will result in an error)
// echo "Brand: " . $myCar->brand; // Uncommenting this line will generate an error

// Set a new brand using the setter method
$myCar->setBrand("Toyota");

// Access the brand again using the getter method
echo "New Brand: " . $myCar->getBrand() . "<br>";

// Attempt to set the brand directly (This will result in an error)
// $myCar->brand = "Honda"; // Uncommenting this line will generate an error

// Call the start method
$myCar->start();
