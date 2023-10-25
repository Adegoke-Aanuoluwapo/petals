<?php
session_start();
ob_start();
include('control.php');
if (isset($_GET['type'])) {
 extract($_GET);

if ($type == 'login') {
 $pro->LogIn($name, $password);
}







}