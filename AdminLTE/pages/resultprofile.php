   <?php
    require_once("myclass.php");
    $pro->checkResultSum();

    ?>


   <!DOCTYPE html>
   <html lang="en">

   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="csrf-token" content="H6RKhZARStAVTjfKJkHuuMF8xPlpO2rzUkJSmaoC">
     <title> Result Profile
     </title>
     <!-- Google Font: Source Sans Pro -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
     <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css" />
     <!-- SweetAlert2 -->
     <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
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


       <div class="content-wrapper">
         <div class="littleAlert"></div>

         <style>
           .comp {
             position: relative;
             width: max-content
           }

           .comp img {
             display: block;
           }

           .comp i {
             position: absolute;
             bottom: 10px;
             right: 10px;
           }
         </style>
         <div class="content-header">
           <div class="container-fluid">
             <div class="row mb-2">
               <div class="col-sm-6">
                 <h1 class="m-0">Results Summary</h1>
               </div>
               <div class="col-sm-6">
                 <ol class="breadcrumb float-sm-right">
                   <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                   <li class="breadcrumb-item active">Result Profile</li>
                 </ol>
               </div>
             </div>
           </div>
         </div>



         <div class="tab-pane" id="result">

           <div class="card">
             <div class="card-header">
               <h3 class="card-title text-bold">Results</h3>
             </div>
             <div class="card-body p-1">
               <div class="table-responsive">
                 <table class="table table-striped table-hover">
                   <tbody>
                     <tr>
                       <th>sn</th>
                       <th>student name</th>
                       <th>Session</th>
                       <th>Term</th>
                       <th>Class</th>

                       <th>Date</th>
                       <th></th>
                     </tr>


                     <?php $i = 1;
                      $sql = $con->query("SELECT * FROM  resultsum");
                      while ($rows = mysqli_fetch_assoc($sql)) {


                      ?>
                       <tr>
                         <td><?= $i++ ?></td>
                         
                         <td><?= $pro->SqLx('students', 'sn', $rows['sid'], 'surname') ?> <?= $pro->SqLx('students', 'sn', $rows['sid'], 'firstname') ?></td>
                         <td><?= $pro->sqLx1('terms', 'sn', 1, 'session') ?></td>
                         <td><?= $pro->realTerm($rows['term']) ?></td>
                         <td><?= $pro->SqLx('class', 'sn', $rows['class'], 'class') ?></td>

                         <td><?= $rows['created'] ?></td>
                         <td><a class="btn btn-xs btn-info" href="resultbroad.php?sn=<?= $rows['sid'] ?>" value=""><i class="fas fa-eye"></i> View</a></td>
                       </tr>
                     <?php } ?>


                   </tbody>
                 </table>
               </div>
             </div>
           </div>

           <p class="p-0 m-0" style="page-break-before: always">
           </p>


         </div>
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
       <script src="../plugins/daterangepicker/daterangepicker.js"></script>
       <!-- Tempusdominus Bootstrap 4 -->
       <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
       <!-- Summernote -->
       <script src="../plugins/summernote/summernote-bs4.min.js"></script>
       <!-- overlayScrollbars -->
       <script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
       <!-- AdminLTE App -->
       <script src="../dist/js/adminlte.js"></script>
       <!-- AdminLTE for demo purposes -->
       <script src="../dist/js/demo.js"></script>
       <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
       <script src="../dist/js/pages/dashboard.js"></script>

       <script>
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
       </script>
   </body>

   </html>