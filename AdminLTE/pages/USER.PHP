<?php
global $con;

class Login{

  function __construct()
{
if(array_key_exists('login', $_POST)){
  $this->loginUser();
}
}
 public function loginUser()
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
$user = new Login();

var_dump($user);

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Login</title>
</head>
<body>
 
</body>
</html>