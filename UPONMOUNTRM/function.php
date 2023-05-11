<?php
function adduser(){
 global $con;

 if($_SERVER["REQUEST_METHOD"]== "POST"){
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $dateofb = $_POST["dateofb"];
  $color =$_POST["color"];
  $gender =$_POST["gender"];

  if(!empty($firstname) && !empty($phone) && !is_numeric($firstname)){
   $user_id = rand(999, 999999999999);

   $query = "INSERT INTO user (user_id, firstname, lastname, phone, email, dateofb, color, gender) values('$user_id', '$firstname', '$phone', '$email', '$dateofb', '$color', '$gender')";
  }
 }
}
?>