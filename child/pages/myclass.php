<?php
session_start();
ob_start();
include('control.php');


if ($type == 'login') {
 $pro->LogIn($email, $password);
}