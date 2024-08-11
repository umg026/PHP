<?php

class abc {
    private $var;
    protected $var2;
    public $x, $y, $z;
    public function __construct() {
     $this->var = "hellow world";
     $this->var2 = array(1,2,3);
     $this->x = 100;
     $this->y = 200;
     $this->z = 300;
    }

}

$objs = new abc() ;
foreach($objs as $key => $value){
  print("".$key."=".$value.""."<br>");
}

?>