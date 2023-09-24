<?php
/**
 * In object-oriented programming (OOP), 
 * Access modifiers are keywords used to specify the visibility or access level of properties and methods within a class.
 * There are three main access modifiers in PHP: public, protected, and private. Here's an explanation of each along with examples:
 */
//Public
class Car {
    public $brand; // Public property

    public function start() {
        echo "Car starting.. ";
    }
}

$myCar = new Car();
$myCar->brand = "Toyota"; // Accessing a public property
$myCar->start(); // Calling a public method


//Protected: A protected property or method can only be accessed from within the class itself and by subclasses (classes that extend the parent class).

class Car {
    protected $brand; // Protected property

    public function __construct($initialBrand) {
        $this->brand = $initialBrand;
    }

    protected function startEngine() {
        echo "Engine starting.. ";
    }

    protected function getBrand() {
        return $this->brand;
    }
}

class SportsCar extends Car {
    public function turboCharge() {
        $this->startEngine(); // Accessing a protected method from a subclass
    }
}

$myCar = new Car("Toyota");
// $myCar->brand = "Honda"; // Accessing a protected property directly (results in an error)

$sportsCar = new SportsCar("Ferrari");
$sportsCar->turboCharge(); // Accessing a protected method from a subclass
$sportsCar->getBrand(); // Accessing a protected method from a subclass

//Private: A private property or method can only be accessed from within the class itself. It cannot be accessed by subclasses or from outside the class.

class Car {
    private $brand; // Private property

    public function __construct($initialBrand) {
        $this->brand = $initialBrand;
    }

    private function startEngine() {
        echo "Engine starting.. ";
    }
}

class SportsCar extends Car {
    public function turboCharge() {
        // $this->startEngine(); // Attempting to access a private method (results in an error)
    }
}

$myCar = new Car("Toyota");
// $myCar->brand = "Honda"; // Attempting to access a private property directly (results in an error)
// $myCar->startEngine(); // Attempting to access a private method directly (results in an error)
