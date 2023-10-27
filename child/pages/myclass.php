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
  
  if($type =='teacher'){
  $sql = $con->query("SELECT  * FROM teachers");
  
  $teacher = array();
  while ($row = mysqli_fetch_assoc($sql)) {

   $teacher[] = $row;
  }
 
  }
   echo json_encode($teacher);
}



