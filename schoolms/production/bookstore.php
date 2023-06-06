<?php
session_start();
include("functions.php");

$id = $_GET['id'];

if (isset($_POST['EditBooks'])) {
 $sn = $_POST['EditBooks'];
 EditBooks($id);
}

if (isset($_POST['deleteBook'])) {
 $id = $_POST['deleteBook'];

 $sql = $db->query("DELETE FROM library WHERE sn = '$sn' ") or die($db->error);
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

 // Check if $uploadOk is set to 0 by an error
 if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
 } else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

   $sql = $db->query("UPDATE book SET picture = '$file_name' WHERE sn = '$sn' ") or die($db->error);

   if ($sql) {
    echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
   } else {
    die($db->error);
    unlink('upload/' . $file_name);
   }
  } else {
   echo "Sorry, there was an error uploading your file.";
  }
 }
}
$sql = $db->query("SELECT * FROM book WHERE sn='$sn' ");
$rows = $sql->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<head>
 <link rel="stylesheet" href="store.css">
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
         <h3> Students Profile</h3>
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

          <div class="x_title">Registered Students</div>

          <?php $i = 1;
          $sql = $con->query("SELECT * FROM library");
          while ($rows = $sql->fetch_assoc()) { ?>


           <div class="allflex">
            <div class="asee">
             <img src="<?= 'upload/' . $rows['picture'] ?>" width="300px">
             <h2><a href="bookprofile.php?sn=<?= $rows['sn'] ?>"><?= $rows['name'] ?></a></h2><br>
             <div class="vf">
              <div>
               <p>Description of books : </p>
              </div>
              <div>
               <p><?= $rows['description'] ?></p>
              </div>
             </div>
             <div class="vf">
              <div>
               <p>Number of books : </p>
              </div>
              <div>
               <p><?= $rows['quality'] ?></p>
              </div>
             </div>
             <button class="btn btn-success">Borrow Book</button>

            </div>
           </div>




          <?php  } ?>
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