<?php

$hostname = "localhost";
$username = "root";
$password = null;
$database = "employee list";

$connection = new mysqli($hostname, $username, $password, $database);

if ($connection->connect_error) {
    die("conection error" . $connect_error);
}

echo "DB Connection Success" ;
echo "<br/>";

$result = $connection->query('show tables')->fetch_all(); // for view db connection
echo "<pre>"; print_r($result);



?>