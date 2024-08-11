<?php

include("./01.php");
include("./02.php");

function hello(){
    echo "this is index function";
}

$obj = new file01\abc() ;
echo "<br>";
$obj = new file02\abc() ;
echo "<br>";

hello();
echo "<br>";
file01\hello() ;

?>