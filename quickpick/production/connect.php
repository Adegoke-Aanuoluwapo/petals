<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "quickpick";


$con = new mysqli('localhost', 'root', '', 'quickpick');
if (!$con) {

 die(mysqli_error($con));
}
