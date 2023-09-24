<?php 
require_once('car.php'); // Include the car.php file 
class Index extends Car{
    protected $model = "Punch 2023";
    public function pushStart(){
       echo $this->getBrand();//protected method can accessble
    //    echo $this->getRealeaseYear();//private method cann't accessble

        echo "push start".$this->model;
    }
}
// var_dump($obj);
// We cann't access direct  private properties in child class
// 
// Access the protected property through a method
$obj = new Index("tata");
echo $obj->pushStart(); //this is protected method cann't access directelly
