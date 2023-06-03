<?php
function contact($name, $email, $subject, $message){
 global $con;
 if ($_SERVER["REQUEST METHOD"]== "POST"){
  $sql = "INSERT into contacts(name,email, subject, message) VALUES('$name', '$email', '$subject', '$message')";
  $result = mysqli_query($sql, $con);
  if($result){
   echo "contacts added successfully";
  }
  return;
 }

}