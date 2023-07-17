<?php
session_start();
if(isset($_POST['Logout']) && isset($_SESSION['email'])){

session_unset();
session_destroy();
header('location: login.php');
}else{
 print_r("An error occured while performing action");
}
?>