<?php

trait Taits{
    public function sayHello(){
        echo "hellow World";
    }
}  
class abc{
    use Taits;
}
$obj = new abc();
$obj->sayHello();


?>