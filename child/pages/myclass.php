<?php
session_start();
ob_start();
include('control.php');
if (isset($_GET['type'])) {
 extract($_GET);

if ($type == 'login') {
 $pro->LogIn($name, $password);
}
if($type == 'addteacher'){
 $pro->addTeachers($name, $district, $phone, $role, $grdistrict,$region);
}
$result = mysqli_querY($con, "SELECT  * FROM teachers");
$teachers = Array();
while ($row = mysqli_fetch_array($result)) {

$teachers[] = $row;
}
echo json_encode($teachers);


}