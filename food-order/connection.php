<?php




$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "food-order";


$con = new mysqli('localhost', 'root', '', 'food-order');




if (!$con) {

 die(mysqli_error($con));
}
