<?php
$con = new mysqli('localhost', 'root', '', 'child');

class Children
{

 function LogIn($name, $password)
 {
  global $con;
  $sql = $con->query("SELECT * FROM user WHERE name = '$name'");
  if(mysqli_num_rows($sql) != 1) {
   echo "Invalid login";
   return;
  }
  $rows = mysqli_fetch_assoc($sql);
  if (password_verify($password, $rows["password"])) {
   echo "Login Successfully";
   $_SESSION["id"] = $rows["id"];
   echo 6;
  } else {
   echo "invalid login";
   return;
  }
 }
}

$pro = new Children();




