<?php
//include("myclass.php");
include("control.php");
if(isset($_POST['uploadMat'])){
 $pro->addMaterials();
 
}
if (isset($_POST['change'])) {

$target = 'upload/';
$targetfile = $target . $_FILES['picture']['name']; //upload/picturename.jpg

move_uploaded_file($_FILES['picture']['tmp_name'], $targetfile);
$db->query("UPDATE users SET picture='$targetfile' WHERE id='$id' ");


}
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="ljggAe7i4a5kLTUAj8avXcNNFD4T80thmG81l5Au">
 <title>Add Staff
 </title>
 <!-- Google Font: Source Sans Pro -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
 <!-- Tempusdominus Bootstrap 4 -->
 <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
 <!-- iCheck -->
 <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
 <!-- JQVMap -->
 <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="../dist/css/adminlte.min.css">
 <!-- overlayScrollbars -->
 <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
 <!-- Daterange picker -->
 <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
 <!-- summernote -->
 <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">

 <style>
  .profile_pics {
   width: 50px;
   height: 50px;
  }

  .object-cover {
   object-fit: cover;
  }

  .profile-user-img {
   width: 100px;
   height: 100px;
  }
 </style>


</head>

<body class="hold-transition sidebar-mini layout-fixed">
 <div class="wrapper">
  <?php
  include("nav.php");
  ?>

  <div class="container">


   <div class="row justify-content-center">


    <div class="col-md-6">


     <form method="post" enctype="multipart/form-data">


      <div class="mb-3">


       <label for="name">Name:</label>


       <input type="text" class="form-control" id="name" name="name"placeholder="Enter name">
      </div>
      <div class="mb-3">
       <label for="email">service:</label>
       <input type="text" class="form-control" id="services" placeholder="Enter your email" name="service">
      </div>
      <div class="mb-3">
       <label for="email">volume:</label>
       <input type="text" class="form-control" id="vol" name="vol" placeholder="Enter your email">
      </div>
      <div class="mb-3">
       <label for="email">File:</label>
       <input type="file" class="form-control" id="file" name="file" placeholder="Enter your email">
      </div>


      <button type="submit" class="btn btn-primary" name="uploadMat">Submit</button>


     </form>


    </div>


   </div>


  </div>



  <?php
  include("footer.php")
  ?>

  <script src="jquery.min.js"></script>



  <script>
   function AddUsser() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;
    var pass = document.getElementById('password').value;


    $.ajax({
     type: 'get',
     url: 'myclass.php?name=' + name + '&email=' + email + '&phone=' + phone + '&password=' + pass +
      '&type=signup'
    }).done(function(data) {
     alert(data);
    });

   }
  </script>
</body>

</html>