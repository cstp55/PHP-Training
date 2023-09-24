<?php
//1.Class -> class has collections of objects.
//2.Objects -> object defined as real-world entity. It have state and behaviour
//like as laptop, pen, book dog etc.
// For example car has state color, model, name, etc and behaviour moving. 
class car {
    private $model;
    private $color;
    private $engine;
    private $orvm;

    public function start()
    {
        $this->color = 'blue';
        $this->model = 'Basic';
        $this->engine = '1000cc ';
        echo "start the car" .$this->engine;
    }
    public function stop()
    {
        echo "stoped";
    } 
}
class punch extends car{
    private $pushButton;
   
    public function smartStart(){
        $this->color = 'blue';
        $this->model = 'Adventure';
        $this->engine = '1200cc ';
        echo  "The Car is " . $this->model ." Smart start push button". $this->engine;
    }
}

$car = new punch();//create object
$car->start();
$car->smartStart();