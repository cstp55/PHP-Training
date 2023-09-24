<?php
// 3.Inheritence 
/** When one object acquires all the properties and behaviors of a parent object/class, it is known as inheritance, we call the concept has inheritance. The child class can inherit the parent method and give own method implementation, this property is called overridden method. When the same method of the parent class is inherited we call as inherited method. It is used to achieve runtime polymorphism. */
// Two type Inherintence 1. Single Level Inherintence 2. Multilevel Inheritence.
// For the Single Level Inheritence example 01_oops.php
// Now Multi level Inheritence
class Car {
    private $model;
    private $color;
    private $engine;
    private $orvm;

    public function start()
    {
        $this->color = 'blue';
        $this->model = 'Basic';
        $this->engine = '1000cc ';
        echo "start the car" .$this->engine .' '. PHP_EOL;
    }
    public function stop()
    {
        echo "stoped";
    } 
}
//class Punch inherite properties of class Car.
class Punch extends Car{
    private $pushButton;
   
    public function smartStart(){
        $this->color = 'blue';
        $this->model = 'Adventure';
        $this->engine = '1200cc ';
        echo  "The Car is " . $this->model ." Smart start push button". $this->engine.' '. PHP_EOL;
    }
}
//class Standard inherite the properties of class of punch
class Standard extends Punch{
    public function autoDriving(){
        $this->model = 'Standard';
        echo  "The Car is on " . $this->model ." Auto Driving mode push button". $this->engine.''. PHP_EOL;
    }
}
$car = new Standard();//create object
$car->start();
$car->smartStart();
$car->autoDriving();

//It is multilevel Inheritence.