<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "mountzion";


$con = new mysqli('localhost', 'root', '', 'mountzion');




if (!$con) {

 die(mysqli_error($con));
}