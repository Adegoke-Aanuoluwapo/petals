<?php
$con = new mysqli('localhost', 'root', '', 'child');

class Children{
 
function signIn($name, $password){
 global $con;
 $sql = $con->query("SELECT * FROM user WHERE name = '$name'");
 if($sql->num_rows !=1){
  echo "Invalid login";
  return ;
 }
 $rows= $sql->fetch_assoc();
 if(password_verify($password, $rows["password"])){
  $_SESSION["id"] = $rows["id"];
}
}




}