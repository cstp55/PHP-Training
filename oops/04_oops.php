<?php
/**
 * 6. Abastraction
 *  Hide the business logic and show the only functinlaity or featurs. 
 *  For example push the button start the engine but it is internal processing hidden.
 */
Interface CarInterface {
    public function StartEngine();

    public function checkFuel();
  
    public function checkUser();

    public function Start();

}
Class Car  implements CarInterface{
    public function Start()
    {
        $this->StartEngine();
        $this->checkFuel();
        $this->checkUser();
        echo "The Car is started. ";
    }
    public function StartEngine()
    {
        echo "Now sparking on pluck and compressing the fuel. ";
    }

    public function checkFuel()
    {

        echo "Fuel is enough for starting engine.";
    }
    public function checkUser(){
        echo "user is authenticated.";
    }

}

$car = new Car();
$car->Start();