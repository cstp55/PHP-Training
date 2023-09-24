<?php
class Demo {
    public function __constructor(){
        echo "constructor is running";
    }
    public function getData()
    {
        echo "calling function";
    }
}
$obj = new Demo();
$obj->getData();