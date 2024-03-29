<?php
session_start();
ob_start();
require("myclass.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="Sj03h7sYEFwKe2F6jAHyUXev0PNTiWyP9ZWwMwaf">
 <title>Permission Settings
 </title>
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
 <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css" />
 <!-- SweetAlert2 -->
 <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
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


  <div class="content-wrapper">
   <div class="littleAlert"></div>
   <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0">Permission</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Permission</li>
       </ol>
      </div>
     </div>
    </div>
   </div>


   <section class="content">
    <div class="row">
     <div class="col-md-12 col-12">
      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title ">
         <i class="fas fa-edit"></i>
         Edit Staff Permissions <?= @$report . 'Z' ?>
        </h3>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <form method="post">
          <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
           <thead>
            <tr>
             <th>sn</th>
             <th>Staff</th>
             <th class="text-center">Reg Mgm</th>
             <th class="text-center">Fee Mgm</th>
             <th class="text-center">Result</th>
             <th class="text-center">Other</th>
             <th></th>
            </tr>
           </thead>
           <tbody id="user_body_list">

            <?php $i = 1;
            $sql = $con->query("SELECT * FROM staff");
            while ($rows = mysqli_fetch_assoc($sql)) {
             $staffid = $rows['sn'];
             if ($pro->sqL1('permissions', 'staffid', $staffid) == 0) {
              $con->query("INSERT INTO permissions(staffid) VALUES('$staffid')");
             }
            ?>

             <tr>
              <td><?= $rows['name'] ?></td>
              <td class="text-center">

               <div class="icheck-primary">
                <input type="checkbox" name="p1[<?= $staffid ?>]" <?php if ($pro->sqLx1('permissions', 'staffid', $staffid, 'p1') == 1) { ?> checked <?php } ?> value="1" id="reg<?= $staffid ?>">
                <label for="reg<?= $staffid ?>" data-id="reg<?= $staffid ?>"></label>
               </div>
              </td>
              <td class="text-center">

               <div class="icheck-primary">
                <input type="checkbox" name="p2[<?= $staffid ?>]" <?php if ($pro->sqLx1('permissions', 'staffid', $staffid, 'p2') == 1) { ?> checked <?php } ?> value="1" id="fee2<?= $staffid ?>">
                <label for="fee2<?= $staffid ?>" data-id="fee2<?= $staffid ?>"></label>
               </div>
              </td>
              <td class="text-center">
               <div class="icheck-primary">
                <input type="checkbox" name="p3[<?= $staffid ?>]" <?php if ($pro->sqLx1('permissions', 'staffid', $staffid, 'p3') == 1) { ?> checked <?php } ?> value="1" id="u_result2<?= $staffid ?>">
                <label for="u_result2<?= $staffid ?>" data-id="u_result2<?= $staffid ?>"></label>
               </div>
              </td>

              <td class="text-center">
               <div class="icheck-primary">
                <input type="checkbox" name="p4[<?= $staffid ?>]" <?php if ($pro->sqLx1('permissions', 'staffid', $staffid, 'p4') == 1) { ?> checked <?php }  ?> value="1" id="p4<?= $staffid ?>">
                <label for="p4<?= $staffid ?>" data-id="p4<?= $staffid ?>"></label>
               </div>
              </td>
              <td></td>
              <td><input type="hidden" name="staffid[]" value="<?= $staffid ?>"></td>

             </tr>


            <?php   }
            ?>


           </tbody>
          </table>
          <td colspan="12">
           <button class="btn btn-success save_all float-right" name="UpdateAllPermission"><i class='fas fa-save'></i>Save all changes</button>
          </td>
         </form>
        </div>

        <div id="page_links" style="color: rgb(36, 35, 32)">

        </div>
       </div>
      </div>

     </div>

    </div>
   </section>




  </div>

  <footer class="main-footer">
   <strong>Copyright &copy; <b>School Petal</b> </strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 2.5
   </div>
  </footer>


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="../plugins/jquery/jquery.min.js"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
  $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- ChartJS -->
 <script src="../plugins/chart.js/Chart.min.js"></script>
 <!-- Sparkline -->
 <script src="../plugins/sparklines/sparkline.js"></script>
 <!-- JQVMap -->
 <script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
 <script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
 <!-- jQuery Knob Chart -->
 <script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
 <!-- daterangepicker -->
 <script src="../plugins/moment/moment.min.js"></script>
 <!-- SweetAlert2 -->
 <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
 <!-- Toastr -->
 <script src="../plugins/toastr/toastr.min.js"></script>
 <script src="../plugins/daterangepicker/daterangepicker.js"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
 <!-- Summernote -->
 <script src="../plugins/summernote/summernote-bs4.min.js"></script>
 <!-- overlayScrollbars -->
 <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <!-- AdminLTE App -->
 <script src="../dist/js/adminlte.js"></script>
 <!-- AdminLTE for demo purposes 
    <script src="../dist/js/demo.js"></script>-->
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 <script src="../dist/js/pages/dashboard.js"></script>

 <!-- <script>
  $(function() {
   $('.select2').select2()
   $('.select2bs4').select2({
    theme: 'bootstrap4'
   })
  })
 </script>

 <script>
  $(function() {
   var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
   });

   function firstToast(icon = "success", message = 'Done') {
    Toast.fire({
     icon: icon,
     title: message
    });
   }
  })
 </script> -->
 <script>
  <?= $pro->Alert() ?>
 </script>
</body>

</html>