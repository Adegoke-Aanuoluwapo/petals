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
  elseif(isset($_POST['createCategory'])){
   $this->Cat(); 
  } elseif (isset($_POST['createArm'])) {
      $this->Arm();
    }
   elseif(isset($_POST['addparent'])){
    $this-> AddParent();
   } elseif (isset($_POST['addstudent'])) {
      $this->AddStudent();
    } elseif (isset($_POST['addstaff'])) {
      $this->AddStaff();
    } elseif (isset($_POST['addsubject'])) {
      $this->AddSubject();
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
 function Alert(){
  global $count, $report;
 return $count==1 ? "toastr.error('".$report."')" : "toastr.success('".$report."')";
 }
function  Cat(){
 global $con;
 $class = $_POST['class'];

 $sql = "INSERT INTO class(class) VALUE('$class')";
 mysqli_query($con, $sql);
 return;
}
function  AddSubject(){
 global $con;
 $subject = $_POST['subject'];

 $sql = "INSERT INTO subjects(subject) VALUE('$subject')";
 mysqli_query($con, $sql);
 return;
}

function  Arm(){
 global $con;
 $arm = $_POST['arm'];

 $sql = "INSERT INTO arm(arm) VALUE('$arm')";
 mysqli_query($con, $sql);
 return;
}

function AddParent(){
 global $con;
 $name = $_POST['name'];
 $address = $_POST['address'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
  $state = $_POST['state'];
  $lga = $_POST['lga'];
  $sql = "INSERT INTO parents(name, address, email, phone, state, lga) VALUES('$name', '$address', '$email', '$phone', '$state', '$lga')";
  mysqli_query($con, $sql);
  return;

}
  function AddStaff()
  {
    global $con;
    $name = $_POST['name'];
   
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    
    $sql = "INSERT INTO staff(name, email, phone, role) VALUES('$name', '$email', '$phone', '$role')";
    mysqli_query($con, $sql);
    return;
  }
  function AddStudent()
  {
    global $con;
    $guardian = $_POST['guardian'];
    $class = $_POST['class'];
    $arm = $_POST['arm'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $othernames = $_POST['othernames'];
    $gender = $_POST['gender'];
    $reg = $_POST['reg'];
    $sql = "INSERT INTO students(guardian, class, arm, surname,firstname, othernames, gender, reg) VALUES('$guardian', '$class', '$arm', '$surname', '$firstname', '$othernames', '$gender', '$reg')";
    mysqli_query($con, $sql);
    return;
  }

}

$Pro = new Profile();