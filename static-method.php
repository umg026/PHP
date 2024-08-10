<?php 

class myclass {
    public static function mysttic() {
        echo "this is static function \n";
    }
}
class myclass2 extends myclass {
    public function myfunc() {
        echo "hello this is umang <br/>";
        echo "umang is in ahemedabad <br/>";
        myclass::mysttic();
    }
}

$obj = new myclass2();
$obj::mysttic();
$obj->myfunc();

?>