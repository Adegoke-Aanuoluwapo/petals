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
}

$pro = new Children();




