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



}
$result = mysqli_query($con, "SELECT  * FROM teachers");
$teachers = array();
while ($row = mysqli_fetch_assoc($result)) {

 $teachers[] = $row;
}
echo json_encode($teachers);