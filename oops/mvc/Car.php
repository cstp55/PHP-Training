<?php
/**
 * Example of inherentence with external class
 * Here define concret class of car. It have a one properties and method
 */
class Car{
   
    protected $brand = "TATA"; //protected properties

    private  $releaseYear = "2020"; //private properties

    // public function __construct($initialBrand) {
    //     $this->brand = $initialBrand;
    // }
    public function start()
    {
        echo "car straring.. ";
    }
    //protected method
    protected function getBrand() {
        return $this->brand;
    }

    //private method
    private function getRealeaseYear(){
        return $this->releaseYear;
    }
}