<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "myshop";

//create connection
$connection = new mysqli($servername, $username, $password, $database);



$name = "";
$email = "";
$phone = "";
$address = "";
$successMessage = "";
$error_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $name = $_POST["name"];
 $email = $_POST["email"];
 $phone = $_POST["phone"];
 $address = $_POST["address"];

 do {
  if (empty($name) || empty($phone) || empty($address) || empty($email)) {
   $error_message = "All fields are required";
   break;
  }
  //add new client database
  $sql = "INSERT INTO clients (name, email, phone, address)" . "VALUES ('$name', '$email', '$phone', '$address')";
  $result = $connection->query($sql);
  if (!$result) {
   $error_message = "invalid query" . $conncetion->error;
   break;
  }

  $name = "";
  $email = "";
  $email = "";
  $address = "";

  $successMessage = "Client added correctly";

  header("location: index.php");
  exit;
 } while (false);
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>My Shop</title>
 <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>
 <div class="container my-5">
  <h2>New Client</h2>
  <?php
  if (!empty($error_message)) {
   echo "
   <div class='alert alert-warning alert-dismissible fade show' role='alert'>
   <strong>$error_message</strong>
   <button type='button' class='btn-close' data-bs-dismiss ='alert' arial-label='Close'></div>
   
    ";
  }
  ?>
  <form method="post">
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Names</label>
    <div class="col-sm-6">
     <input type="text" class="form-content" name="name" value="<?php echo $name; ?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-6">
     <input type="text" class="form-content" name="email" value="<?php echo $email; ?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Phones</label>
    <div class="col-sm-6">
     <input type="text" class="form-content" name="phone" value="<?php echo $phone; ?>">
    </div>
   </div>
   <div class="row mb-3">
    <label class="col-sm-3 col-form-label">Address</label>
    <div class="col-sm-6">
     <input type="text" class="form-content" name="address" value="<?php echo $address; ?>">
    </div>
   </div>
   <?php
   if (!empty($successMessage)) {
    echo "
 <div class='row mb-3'>
 <div class='alert alert-success alert dismissible fade show' role='alert'>
 <strong> $successMessage </strong>
 <button type='button' class='btn-close' data-bs-dismiss = 'alert' arial-label
 </div>
 </div>
 </div>
 ";
   }
   ?>
   <div class="row mb-3">
    <div class="offset-sm-3 col-sm-3 d-drid">
     <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    <div class="col-sm-3 d-grid">
     <a class="btn btn-outline-primary" href="/index.php" role="button">Cancel</a>
    </div>
   </div>

  </form>
 </div>
</body>

</html>