<?php
$con = new mysqli('localhost', 'root', '', 'child');

class Children
{

 function LogIn($name, $password)
 {
  global $con;
  $sql = $con->query("SELECT * FROM user WHERE name = '$name' AND password ='$password'");
  if(mysqli_num_rows($sql) != 1) {
   echo "Invalid login";
   return;
  }
  $rows = mysqli_fetch_assoc($sql);
  if ($password = $rows["password"]) {
   $_SESSION["id"] = $rows["id"];
   echo "Login Successfully";
  
  }
  return;
 }
function addTeachers($name, $district, $phone, $role,$grdistrict, $region ){

 global $con;
 $sql = $con->query("SELECT * FROM teachers WHERE name = '$name' AND '$district'");
  if (mysqli_num_rows($sql) == 1) {
   echo "teacher already exist";
   return;
  }
  else{
      $sql = $con->query("INSERT INTO teachers(name, district, phone, role, grdistrict, region) VALUES('$name', '$district', '$phone','$role', '$grdistrict', '$region')");
    if($sql){
        echo "teacher added succefully";
        return;
    }
     
  }
 
 
 }
  function addChildren($surname, $firstname, $othername, $familyname, $sex, $birthdate, $address, $addressarea, $school, $class)
  {

    global $con;
    $sql = $con->query("SELECT * FROM children WHERE surname = '$surname' AND othername='$othername'");
    if (mysqli_num_rows($sql) == 1) {
      echo "child already exist";
      return;
    }
    else{
      $sql = $con->query("INSERT INTO children(surname, firstname, othername, familyname, sex, birthdate, address, addressarea, school, class) VALUES('$surname', '$firstname', '$othername','$familyname', '$sex', '$birthdate', '$address', '$addressarea', '$school', '$class')");
      if($sql){
        echo "child added succefully";
        return;
      }
    
    }
 
  }
  function submitReport($reportname, $date, $b35, $g35, $b68, $g68, $b912, $g912){
    global $con;
    $sql = $con->query("SELECT * FROM reports WHERE reportname='$reportname' AND date='$date'");
    if(mysqli_num_rows($sql) == 1) {
      echo "child already exist";
      return;

  }
  else{
    $sql = $con->query("INSERT INTO reports(reportname, date, b35, g35, b68, g68, b912, g912)");
    if($sql){
      echo "report submitted successfully";
      return;
    }
  }
  }

}

$pro = new Children();




