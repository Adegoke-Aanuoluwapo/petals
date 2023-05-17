<?php



$con = new mysqli('localhost', 'root', '', 'mountzion');




if (!$con) {

 die(mysqli_error($con));
}
