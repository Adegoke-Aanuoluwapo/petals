<?php
require("myclass.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="cXO45Tk6wcpzfsXXv7F1QFE7Jb0Pb4rG4VoM1K0E">
 <title> Add Result
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


  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
   <ul class="navbar-nav">
    <li class="nav-item">
     <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
     <a href="#" class="nav-link"><b>SchoolPetal International School</b></a>
    </li>
   </ul>

   <ul class="navbar-nav ml-auto">
    <li class="nav-item">
     <a class="nav-link" data-widget="navbar-search" href="#" role="button">
      <i class="fas fa-search"></i>
     </a>
     <div class="navbar-search-block">
      <form class="form-inline">
       <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
         <button class="btn btn-navbar" type="submit">
          <i class="fas fa-search"></i>
         </button>
         <button class="btn btn-navbar" type="button" data-widget="navbar-search">
          <i class="fas fa-times"></i>
         </button>
        </div>
       </div>
      </form>
     </div>
    </li>
    <li class="nav-item">
     <a class="nav-link" data-widget="fullscreen" href="#" role="button">
      <i class="fas fa-expand-arrows-alt"></i>
     </a>
    </li>
    <li class="nav-item">
     <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
      <i class="fas fa-user-alt"></i>
     </a>
    </li>
   </ul>
  </nav>

  <?php include("nav.php") ?>


  <!-- page content -->
  <div class="content-wrapper">
   <div class="right_col" role="main">
    <div class="">
     <div class="page-title">
      <div class="title_left">
       <h3>Manage Students</h3>
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


     <p></p>
     <?php
     if (array_key_exists('AddResult', $_POST)) {
      $subject = $_POST['subject'];
      $studentid = $_POST['studentid'];
      $class = $_POST['class'];
      $ca1 = $_POST['ca1'];
      $ca2 = $_POST['ca2'];
      $exam = $_POST['exam'];


      $i = 0;
      while ($i < count($studentid)) {
       $e = $i++;


       $student = $studentid[$e];
       $clas = $class[$e];
       $c1 = $ca1[$e];
       $c2 = $ca2[$e];
       $exa = $exam[$e];
       $total = (int)$c1 + (int)$c2 + (int)$exa;

       $sql = $con->query("SELECT * FROM results WHERE studentid='$student' AND class='$clas' AND subject='$subject' ");
       if (mysqli_num_rows($sql) == 0) {
        addResult($student, $clas, $subject, $c1, $c2, $exa, $total);
       }
      }
     }
     //  
     ?>

     <div class="row">

      <div class="col-md-12 col-sm-12 ">
       <div class="x_panel">
        <div class="x_title">Registered Students</div>
        <form method="POST">
         <table class="table">
          <thead>
           <tr>
            <th>sn</th>
            <th>Surname</th>
            <th>Other</th>
            <th>class</th>
            <th>CA1</th>
            <th>CA2</th>
            <th>Exam</th>


           </tr>
          </thead>
          <tbody>
           <?php $i = 1;
           $sql = $con->query("SELECT * FROM students LIMIT 4,6");
           while ($rows = $sql->fetch_assoc()) {
           ?>

            <tr>
             <th scope="row"><?= $i++ ?></th>
             <td><a href="studentprofile.php?sn=<?= $rows['sn'] ?>"><?= $rows['surname'] ?></a></td>
             <td><?= $rows['firstname'] ?> <input type="hidden" name="studentid[]" value="<?= $rows['sn'] ?>"></td>
             <td><input type="text" name="class[]" value="<?= $pro->SqLx('class', 'sn', $rows['class'], 'class') ?>" class="form-control"></td>
             <td><input type="number" name="ca1[]" min="0" max="20" class="form-control"></td>
             <td><input type="number" name="ca2[]" min="0" max="20" class="form-control"></td>
             <td><input type="number" name="exam[]" min="0" max="60" class="form-control"></td>


            </tr>
           <?php  } ?>
          </tbody>
         </table>
         <select class="form-control" name="subject" required>
          <option value="">Select Subject...</option>
          <?php $i = 1;
          $sql = $con->query("SELECT * FROM subjects");
          while ($rows = $sql->fetch_assoc()) {
           echo '<option>' . $rows['subject'] . '</option>';
          } ?>

         </select>
         <button type="submit" class="btn btn-primary" name="AddResult" style="width:100%">Submit Result</button>
        </form>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>



 <!-- /page content -->