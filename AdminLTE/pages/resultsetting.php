<?php
require("myclass.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="cXO45Tk6wcpzfsXXv7F1QFE7Jb0Pb4rG4VoM1K0E">
  <title> Result Setup
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
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
  <!-- Toastr -->
  <link rel="stylesheet" href="../plugins/toastr/toastr.min.css" />

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
    <?php include("nav.php"); ?>

    <div class="content-wrapper">
      <div class="littleAlert"></div>
      <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Result Setup</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Result Setup</li>
              </ol>
            </div>
          </div>
        </div>
      </div>


      <?php
      $sql = $con->query("SELECT * FROM result_setup");
      $rows = mysqli_fetch_assoc($sql);

      ?>

      <section class="content">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-secondary card-outline">
              <div class="card-header">
                <h3 class="card-title ">
                  <i class="fa fa-book" aria-hidden="true"></i>
                  Continous Accessment Scores
                </h3>
              </div>
              <div class="card-body">
                <form class="row" id="updateCa" method="POST">
                  <div class="col-md-4 col-6 form-group">
                    <label>CA 1</label>
                    <input type="number" name="ca1" class="form-control" placeholder="CA 1">
                  </div>
                  <div class="col-md-4 col-6 form-group">
                    <label>CA 2</label>
                    <input type="number" name="ca2" class="form-control" placeholder="CA 2">
                  </div>
                  <div class="col-md-4 col-6 form-group">
                    <label>CA 3</label>
                    <input type="number" name="ca3" class="form-control" placeholder="CA 3">
                  </div>
                  <div class="col-md-6 col-6 form-group">
                    <label>Exam</label>
                    <input type="number" name="exam" class="form-control" placeholder="Exam">
                  </div>
                  <div class="col-md-6 col-12 form-group">
                    <button type="submit" class="btn btn-secondary mt-md-4 float-right updateCa" name="updateSetup">Save</button>
                  </div>
                </form>
              </div>
            </div>

          </div>


          <div class="col-md-4">
            <div class="card card-secondary card-outline">
              <div class="card-header">
                <h3 class="card-title ">
                  <i class="fa fa-book" aria-hidden="true"></i>
                  Grades Setup
                </h3>
              </div>
              <div class="card-body p-1   ">

                <form action="" id="update_grade" method="POST">
                  <div class="table-responsive">
                    <table class="table table-striped mb-0" id="u_grad_tb">
                      <tr>
                        <th>Grade</th>
                        <th>Start Score</th>
                        <th>Remark</th>
                      </tr>
                      <tr>
                        <th>A</th>
                        <td><input type="number" name="A" value="<?= $rows['A'] ?>" class="form-control form-control-sm" style="width: 60px"></td>
                        <td><input type="text" name="ar" value="<?= $rows['ar'] ?>" class="form-control form-control-sm"></td>
                      </tr>
                      <tr>
                        <th>B</th>
                        <td><input type="number" name="B" value="<?= $rows['B'] ?>" class="form-control form-control-sm" style="width: 60px"></td>
                        <td><input type="text" name="br" value="<?= $rows['br'] ?>" class="form-control form-control-sm"></td>
                      </tr>
                      <tr>
                        <th>C</th>
                        <td><input type="number" name="C" value="<?= $rows['C'] ?>" class="form-control form-control-sm" style="width: 60px"></td>
                        <td><input type="text" name="cr" value="<?= $rows['cr'] ?>" class="form-control form-control-sm"></td>
                      </tr>
                      <tr>
                        <th>D</th>
                        <td><input type="number" name="D" value="<?= $rows['D'] ?>" class="form-control form-control-sm" style="width: 60px"></td>
                        <td><input type="text" name="dr" value="<?= $rows['dr'] ?>" class="form-control form-control-sm"></td>
                      </tr>
                      <tr>
                        <th>E</th>
                        <td><input type="number" name="E" value="<?= $rows['E'] ?>" class="form-control form-control-sm" style="width: 60px"></td>
                        <td><input type="text" name="er" value="<?= $rows['er'] ?>" class="form-control form-control-sm"></td>
                      </tr>
                      <tr>
                        <th>F</th>
                        <td><input type="number" name="F" value="<?= $rows['F'] ?>" class="form-control form-control-sm" style="width: 60px"></td>
                        <td><input type="text" name="fr" value="<?= $rows['fr'] ?>" class="form-control form-control-sm"></td>
                      </tr>
                      <tr>
                        <td colspan="3">
                          <button class="btn btn-secondary float-right update_grade" name="setgrade">Submit</button>
                        </td>
                      </tr>
                    </table>
                  </div>
                </form>
              </div>
            </div>

          </div>

        </div>
      </section>




      <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>


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
  <script src="../dist/js/pages/dashboard.js"></script>
  <!-- SweetAlert2 -->
  <script src="../plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="../plugins/toastr/toastr.min.js"></script>

  <script>
    <?= $pro->Alert() ?>
  </script>
</body>

</html>