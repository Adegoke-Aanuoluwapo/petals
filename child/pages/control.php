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
 
 $sql = $con->query("INSERT INTO teachers(name, district, phone, role, grdistrict, region) VALUES('$name', '$district', '$phone','$role', '$grdistrict', '$region')");
   echo "teacher added succefully";
   return;
 }
  function addChildren($surname, $firstname, $lastname, $familyname, $gender, $dob, $address, $addressarea, $school, $class)
  {

    global $con;
    $sql = $con->query("SELECT * FROM children WHERE surname = '$surname' AND lastname='$lastname'");
    if (mysqli_num_rows($sql) == 1) {
      echo "child already exist";
      return;
    }

    $sql = $con->query("INSERT INTO teachers(surname, firstname, lastname, familyname, gender, dob, address, addressarea, school, class) VALUES('$surname', '$firstname', '$lastname','$familyname', '$gender', '$dob', '$address', '$addressarea', '$school', '$class')");
    echo "child added succefully";
    return;
  }

}

$pro = new Children();




