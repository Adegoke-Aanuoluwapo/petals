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

 $sql = $con->query("DELETE FROM student WHERE id = '$id' ") or die($con->error);
 header('location: addstudent.php');
 exit;
}



if (isset($_POST['LinkParent'])) {
 $parent = $_POST['parent'];
 $sql = $con->query("UPDATE student SET parent='$parent' WHERE id = '$id' ") or die($con->error);
 header('location: addstudent.php');
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

   $sql = $con->query("UPDATE student SET picture = '$file_name' WHERE id = '$id' ") or die($con->error);

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
$sql = $con->query("SELECT * FROM student WHERE id='$id' ");
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
          <img src="<?= 'upload/' . $rows['picture'] ?>" alt="" />
          <div class="x_title">Registered Students</div>

          <table class="table table-hover">

           <tr>
            <th>Surname</th>
            <td><?= $rows['surname'] ?></td>
           </tr>
           <tr>
            <th>First Name</th>
            <td><?= $rows['firstname'] ?></td>
           </tr>
           <tr>
            <th>dateofbirth</th>
            <td><?= $rows['dob'] ?></td>
           </tr>
           <tr>
           <tr>
            <th>class</th>
            <td><?= $rows['class'] ?></td>
           </tr>
           <tr>
            <th>sex</th>
            <td><?= $rows['sex'] ?></td>
           </tr>
           <tr>
            <th>registrationnumber</th>
            <td><?= $rows['reg'] ?></td>
           </tr>

           <th>Parent Data</th>
           <td><a href="parentprofile.php?id=<?= $rows['parent'] ?>"><?= parentData($rows['parent']) ?></a></td>
           </tr>


          </table>
          <div class="x_content">
           <?php $class = $rows['class'] ?>
           <table>
            <tr>
             <td>No in Class<br><?= noInClass($class) ?></td>

             <td>Total Score<br><?= totalScore($id) ?></td>

             <td>Obtainable<br><?= obtainableMarks($id) ?></td>
             <td>Remarks (%)<br><?= number_format(100 * totalScore($id) / obtainableMarks($id), 2) ?>% </td>
             <td>Total Average<br><?= number_format(totalAverage(), 2) ?>%</td>
            </tr>

           </table>

           <table class="table table-bordered">
            <thead>
             <tr>
              <th>s/n</th>
              <th>Subject</th>
              <th>CA1</th>
              <th>CA2</th>
              <th>Exams</th>
              <th>Total</th>
              <th>Class Average</th>
              <th>Subject Position</th>
              <th>Grade</th>
              <th>Remark</th>
             </tr>
            </thead>
            <tbody>
             <?php $i = 1;
             $sql = $con->query("SELECT * FROM results WHERE studentid='$id' ");
             while ($rows = $sql->fetch_assoc()) { ?>
              <tr>
               <th scope="row"><?= $i++ ?></th>
               <td><a href="addresult.php?id=<?= $rows['studentid'] ?>"><?= $rows['subject'] ?></a></td>
               <td><?= $rows['ca1'] ?></td>
               <td><?= $rows['ca2'] ?></td>
               <td><?= $rows['exam'] ?></td>
               <td><?= $rows['total'] ?></td>
               <td><?= getAverage($rows['subject'], $rows['class'])  ?></td>
               <td><?= subjectPosition($id, $rows['class'], $rows['subject']) ?></td>
               <td><?= getGrade($rows['total']) ?></td>
               <td><?= getRemark($rows['total']) ?></td>
              </tr>


             <?php } ?>
            </tbody>
           </table>

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

         <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Select Parent</button>

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

 <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-sm">
   <div class="modal-content">
    <form method="POST">
     <div class="modal-header">
      <h4 class="modal-title" id="myModalLabel2">Update Parent</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
      </button>
     </div>
     <div class="modal-body">
      <label>Select Parent</label>
      <select class="form-control" name="parent" required>
       <option value="">Select Option...</option>
       <?php $i = 1;
       $sql = $con->query("SELECT * FROM parent");
       while ($rows = $sql->fetch_assoc()) {
        echo '<option value="' . $rows['id'] . '">' . $rows['surname'] . ' ' . $rows['othername'] . '</option>';
       } ?>
      </select>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" name="LinkParent">Save changes</button>
     </div>
    </form>
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