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
 function Alert(){
  global $count, $report;
  echo '
                <div class="card card-warning card-outline">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="fas fa-edit"></i>
                      Toastr Examples
                    </h3>
                  </div>
                  <div class="card-body">
                    <button
                      type="button"
                      class="btn btn-success toastrDefaultSuccess"
                    >
                      Launch Success Toast
                    </button>
                    <button
                      type="button"
                      class="btn btn-info toastrDefaultInfo"
                    >
                      Launch Info Toast
                    </button>
                    <button
                      type="button"
                      class="btn btn-danger toastrDefaultError"
                    >
                      Launch Error Toast
                    </button>
                    <button
                      type="button"
                      class="btn btn-warning toastrDefaultWarning"
                    >
                      Launch Warning Toast
                    </button>
                    <div class="text-muted mt-3">
                      For more examples look at
                      <a href="https://codeseven.github.io/toastr/"
                        >https://codeseven.github.io/toastr/</a
                      >
                    </div>
                  </div>
                  <!-- /.card -->
                </div>';
 }
}

$Pro = new Profile();
