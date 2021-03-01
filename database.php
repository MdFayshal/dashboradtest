<?php

$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "school";

$connection = new mysqli($servername,$username,$password,$dbname);
if($connection->connect_error){
    die("Connection Failed<br/>".$connection->connect_error);
}


?>
