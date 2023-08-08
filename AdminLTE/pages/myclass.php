<?php

require_once("constant.php");

class Profile
{

 function __construct()
 {
  if (array_key_exists('login', $_POST)) {
   $this->SignIn();
  } else if (array_key_exists('register', $_POST)) {
   $this->SignUp();
  }
 }
 public function SignUp()
 {
  global $con;
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = "INSERT INTO users(firstname, lastname, email, password) VALUES('$firstname', '$lastname', '$email', '$password')";
  mysqli_query($con, $sql);
  return;
 }
 public function SignIn()
 {
  global $con;
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($email) && !empty($password)) {
   $sql = "SELECT * FROM users WHERE email = '$email' ";
   $result = mysqli_query($con, $sql);

   if ($result && mysqli_num_rows($result) == 1) {
    $user_data = mysqli_fetch_assoc($result);
    if ($user_data['password'] == $password) {
     $_SESSION['user_id'] = $user_data['user_id'];
     header("location: index.php");
     exit;
    }
   }
   echo "Wrong email and password";
  } else {
   echo "Please enter some valid information";
  }
  return;
 }
}

$Pro = new Profile();
