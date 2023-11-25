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
 
 $pro->addTeachers($name, $district, $phone, $role, $grdistrict,$megagroup,$region, $password);
 
  
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

   $teacher[] = ['id'=>$row['id'],'name'=>$row['name'], 'district'=>$row['district'], 'phone'=>$row['phone'], 'role'=>$pro->teachersRole($row['role']),'grdistrict'=>$row['grdistrict'], 'region'=>$row['region'], 'password'=>$row['password']];
  }
      echo json_encode($teacher);
  }

  if($type=="teacherdetail"){
   
   $id = $_GET['id'];
   $sql = $con->query("SELECT * FROM teachers WHERE id ='$id'");
   $rows = mysqli_fetch_assoc($sql);
   echo json_encode($rows);
  }

 if($type == "addreport"){
      $pro->submitReport($program, $teacher_id, $b35, $g35, $b68, $g68, $b912, $g912);
   }
if($type=='report'){
   global $con;
    
   $sql= $con->query("SELECT * FROM reports");
   $report = [];
   while($row = mysqli_fetch_assoc($sql)){
    // $report[] = $row;
       $report[] = ['teacher_id'=>$pro->sQLx1('teachers', 'id',$row['teacher_id'], 'name'),'program'=>$row['program'], 'reportdate'=>$row['reportdate'],'b35'=>$row['b35'],'g35'=>$row['g35'], 'b68'=>$row['b68'], 'g68'=>$row['g68'], 'b912'=>$row['b912'],'g912'=>$row['g912']]; 
      
   }
      //$teachers = $pro->addTeachers($name, $district, $phone, $role, $grdistrict, $region);
   echo json_encode($report);
      
}
if($type=='activereport'){
   global $con;
   $teacher_id = $_SESSION['id'];
   $sql= $con->query("SELECT * FROM reports WHERE teacher_id ='$teacher_id'");
   $activereport=[];
   while($row = mysqli_fetch_assoc($sql)){
      $activereport[] = $row;
   }
   echo json_encode($activereport);
}
if($type == "childid"){
   $id = $_GET['id'];
  $sql= $con->query("SELECT * FROM children WHERE id='$id'");
   $rows = mysqli_fetch_assoc($sql);
   echo json_encode($rows);
}
if($type== "uploadMat"){
   $pro->addMaterials();
}
if($type=='editteacher'){
   $pro->EditTeachers($tId,$name, $district, $phone, $role,$grdistrict,$megagroup, $region,$password );
}
if($type=='editchild'){
   $pro->editChild($cId,$surname, $firstname, $othername, $familyname, $sex, $birthdate, $address, $addressarea, $school, $class);
}
  
}



