<?php
/**
 * 4.Polymorphism
 * The One task can perform many task called Polymorphism. For example the shape is an method and perform to 
 * many task using this method triangle, circle paraleliogram. It Two types runtime Polymorphism and compileTime Polymorphism
 * Polymorphism can achieve using method Overloading and Overiding.
 */
// Method Overriding 
class Car{
    public function shape($shape)
    {
        echo 'The Draw ' .$shape .' '.PHP_EOL;
    }
}
class CircleShape extends Car{
    //ovrride the definition of method
    public function shape($shape){
         echo "The draw new shape ".$shape. ' '. PHP_EOL;   
    }
}
$carObject = new Car();
$carObject->shape('circle');
$newObject = new CircleShape();
$newObject->shape('Trinale');

// Method Overloading
class NewShape extends CircleShape{
    //add the extra parameter
    public function shape($shape, $val =''){
         echo "The draw new shape ".$shape. 'and it is value '.$val .' '. PHP_EOL;   
    }
    //if we define the method and it's paramter without assing the value then throw error because method must be compatible with parent class
    /**
     * public function shape($shape, $val){
     * it's throw fatal Error must be compatible with parent class
     * }
     */
}
$clObject = new NewShape();
$clObject->shape('Trapezium', '110cm height');