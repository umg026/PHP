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
// =======================

trait marks {
    function result ($a, $b){
     return ($a + $b)/2 ;
    }
}
class countMarks{
    use marks;
    private int $m, $n;
     function __construct($a,$b){
        $this->m = $a;
        $this->n = $b;
    }
    function percentage():float{
        return $this->result($this->m, $this->n);
    }
  
}
$anil = new countMarks(50,60);
// $anil->percentage();
echo "Total marks is :".$anil->percentage();

?>