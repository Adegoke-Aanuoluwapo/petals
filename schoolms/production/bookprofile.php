<?php
session_start();
include("function.php");
include("connection.php");

$id = $_GET['id'];

if (isset($_POST['EditUser'])) {
 $id = $_POST['EditUser'];
 EditUser($id);
}

if (isset($_POST['deleteUser'])) {
 $id = $_POST['deleteUser'];

 $sql = $con->query("DELETE FROM library WHERE id = '$id' ");
 header('location: library.php');
 exit;
}






$target_dir = "upload/";
@$file_name =  basename($_FILES["fileToUpload"]["name"]);
@$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
 // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
 // if($check !== false) {
 //     echo "File is an image - " . $check["mime"] . ".";
 //     $uploadOk = 1;
 // } else {
 //     echo "File is not an image.";
 //     $uploadOk = 0;
 // }

 // Check if file already exists
 if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
 }
 // Check file size
 if ($_FILES["fileToUpload"]["size"] > 50000000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
 }
 // Allow certain file formats
 if (
  $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif"
 ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
 }
 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
 } else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

   $sql = $con->query("UPDATE library SET picture = '$file_name' WHERE id = '$id' ") or die($con->error);

   if ($sql) {
    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
   } else {
    die($con->error);
    unlink('upload/' . $file_name);
   }
  } else {
   echo "Sorry, there was an error uploading your file.";
  }
 }
}
$sql = $con->query("SELECT * FROM library WHERE id='$id' ");
$rows = $sql->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
 <!-- Meta, title, CSS, favicons, etc. -->
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <title>Gentelella Alela! | </title>

 <?php include("header.php"); ?>
</head>

<body class="nav-md">
 <div class="container body">
  <div class="main_container">
   <div class="col-md-3 left_col">
    <div class="left_col scroll-view">
     <div class="navbar nav_title" style="border: 0;">
      <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
     </div>

     <div class="clearfix"></div>

     <?php include("nav.php"); ?>

     <!-- page content -->
     <div class="right_col" role="main">
      <div class="">
       <div class="page-title">
        <div class="title_left">
         <h3> Book Profile</h3>
        </div>

        <div class="title_right">
         <div class="col-md-5 col-sm-5  form-group pull-right top_search">
          <div class="input-group">
           <input type="text" class="form-control" placeholder="Search for...">
           <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
           </span>
          </div>
         </div>
        </div>
       </div>
       <div class="clearfix"></div>




       <div class="row">

        <div class="col-md-12 col-sm-12 ">
         <div class="x_panel">
          <img src="<?= 'upload/' . $rows['picture'] ?>" alt="" />
          <div class="x_title">Registered Book</div>

          <table class="table table-hover">

           <tr>
            <th>Title</th>
            <td><?= $rows['title'] ?></td>
           </tr>
           <tr>
            <th>Description</th>
            <td><?= $rows['discription'] ?></td>
           </tr>
           <tr>
            <th>Title</th>
            <td><?= $rows['title'] ?></td>
           </tr>
         
          
           
          

           

          </table>
          <div class="x_content">
           <?php $class = $rows['title'] ?>


          </div>
         </div>

         <form method="post" enctype="multipart/form-data">
          Select image to upload:
          <input type="file" class="btn btn-primary" name="fileToUpload" id="fileToUpload">
          <input type="submit" class="btn btn-primary" value="Upload Image" name="submit">
         </form>
         <form method="POST">
          <button class="btn btn-success" type="submit" name="deleteUser" value="<?= $rows['id'] ?>">Delete</button>
         </form>

         <form method="POST" action="addstudent.php">
          <button class="btn btn-success" name="EditData" value="<?= $rows['id'] ?>">UPDATE</button>
         </form>

         <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Select Parent</button> -->

        </div>
       </div>
      </div>
     </div>
    </div>
   </div>


   <!-- /page content -->

   <!-- footer content -->
   <?php include("footer.php"); ?>
   <!-- /footer content -->
  </div>
 </div>

 
 <!-- /modals -->


 <!-- jQuery -->
 <script src="../vendors/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap -->
 <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <!-- FastClick -->
 <script src="../vendors/fastclick/lib/fastclick.js"></script>
 <!-- NProgress -->
 <script src="../vendors/nprogress/nprogress.js"></script>
 <!-- bootstrap-progressbar -->
 <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
 <!-- iCheck -->
 <script src="../vendors/iCheck/icheck.min.js"></script>
 <!-- bootstrap-daterangepicker -->
 <script src="../vendors/moment/min/moment.min.js"></script>
 <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
 <!-- bootstrap-wysiwyg -->
 <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
 <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
 <script src="../vendors/google-code-prettify/src/prettify.js"></script>
 <!-- jQuery Tags Input -->
 <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
 <!-- Switchery -->
 <script src="../vendors/switchery/dist/switchery.min.js"></script>
 <!-- Select2 -->
 <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
 <!-- Parsley -->
 <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
 <!-- Autosize -->
 <script src="../vendors/autosize/dist/autosize.min.js"></script>
 <!-- jQuery autocomplete -->
 <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
 <!-- starrr -->
 <script src="../vendors/starrr/dist/starrr.js"></script>
 <!-- Custom Theme Scripts -->
 <script src="../build/js/custom.min.js"></script>
 <script>
  function timeFunctionLong(input) {
   setTimeout(function() {
    input.type = 'text';
   }, 60000);
  }
 </script>
</body>

</html>