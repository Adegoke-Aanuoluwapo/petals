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
   if ($type == 'registerchild') {
      $pro->addChildren($surname, $firstname, $othername, $familyname, $sex, $birthdate, $address, $addressarea, $school, $class);
   }
   if ($type == 'children') {
      $sql = $con->query('SELECT * FROM children');
      $children = [];
      while($row = mysqli_fetch_assoc($sql)) {  
         $children[] = $row;}
         echo json_encode($children);
   }
  
  if($type =='teacher'){
   global $con;
  $sql = $con->query("SELECT  * FROM teachers");
  
  $teacher = [];
  while ($row = mysqli_fetch_assoc($sql)) {

   $teacher[] = $row;
  }
      echo json_encode($teacher);
  }
   

  
}



