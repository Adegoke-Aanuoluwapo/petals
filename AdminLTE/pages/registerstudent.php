<?php
require_once("myclass.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="">
  <title>Students
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


    <?php include 'nav.php'; ?>


    <div class="content-wrapper">
      <div class="littleAlert"></div>

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Students</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Students</li>
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
                  <i class="fa fa-plus-square" aria-hidden="true"></i>
                  Register Student
                </h3>
              </div>
              <div class="card-body">
                <form method="POST" class="row">
                  <div class=" col-md-4 form-group">
                    <label>Guardian <span class="text-danger">*</span></label>
                    <select name="guardian" class="form-control select2bs4">
                      <option>Select Class Category</option>
                      <?php $i = 1;
                      $sql = $con->query("SELECT * FROM parents");
                      while ($rows = $sql->fetch_assoc()) {
                        echo '<option value="' . $rows['sn'] . '">' . $rows['name'] . '</option>';
                      } ?>
                    </select>
                  </div>

                  <div class=" col-md-4 form-group">
                    <label>Prospective Class <span class="text-danger">*</span></label>
                    <select name="class" class="form-control select2bs4">
                      <option>Select Class Category</option>
                      <?php $i = 1;
                      $sql = $con->query("SELECT * FROM class");
                      while ($rows = $sql->fetch_assoc()) {
                        echo '<option  value="' . $rows['sn'] . '">' . $rows['class'] . '</option>';
                      } ?>
                    </select>
                  </div>

                  <div class=" col-md-4 form-group">
                    <label>Class Arm <span class="text-danger">*</span></label>
                    <select name="arm" class="form-control select2bs4">
                      <option>Select Class Category</option>
                      <?php $i = 1;
                      $sql = $con->query("SELECT * FROM arm");
                      while ($rows = $sql->fetch_assoc()) {
                        echo '<option  value="' . $rows['sn'] . '">' . $rows['arm'] . '</option>';
                      } ?>
                    </select>
                  </div>


                  <div class=" col-md-3 form-group">
                    <label>Surname <span class="text-danger">*</span></label>
                    <input type="text" name="surname" class="form-control" placeholder="Lekki, Nigeria">
                  </div>
                  <div class=" col-md-3 form-group">
                    <label>Firstname <span class="text-danger">*</span></label>
                    <input type="text" name="firstname" class="form-control" placeholder="firstname">
                  </div>
                  <div class=" col-md-3 form-group">
                    <label>Othernames</label>
                    <input type="text" name="othernames" class="form-control" placeholder="othernames">
                  </div>
                  <div class=" col-md-3 form-group">
                    <label>Gender <span class="text-danger">*</span></label>
                    <select name="gender" class="form-control select2bs4">
                      <option disabled selected>Select Gender</option>
                      <option>Female</option>
                      <option>Male</option>
                    </select>
                  </div>
                  <div class="col-md-4 form-group">
                    <label>Reg Number</label>
                    <input type="text" name="reg" class="form-control" placeholder="choose Registrarion Number">
                  </div>

                  <div class="col-md-8">
                    <button class="btn btn-secondary float-right mt-4 registerStudent " name="addstudent">Register Student</button>
                  </div>
                </form>
              </div>



            </div>


            <div class="card card-secondary card-outline">
              <div class="card-header">
                <h3 class="card-title ">
                  <i class="fa fa-clock" aria-hidden="true"></i>
                  Recently Registered Students
                </h3>
              </div>
              <div class="card-body p-1">
                <div class="table-responsive">
                  <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Class</th>

                        <th>Gurdian</th>
                        <th>Gender</th>
                        <th></th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php $i = 1;
                      $sql = $con->query("SELECT * FROM students");
                      while ($rows = $sql->fetch_assoc()) { ?>
                        <tr>
                          <td><?= $i++ ?></td>
                          <td><?= $rows['surname'] . ' ' . $rows['firstname'] ?></td>
                          <td><?= $pro->SqLx('class', 'sn', $rows['class'], 'class') ?><sup><?= $pro->SqLx('arm', 'sn', $rows['arm'], 'arm') ?></sup> </td>



                          <td><?= $pro->SqLx('parents', 'sn', $rows['guardian'], 'name') ?></td>
                          <td><?= $rows['gender'] ?></td>
                          <td> <a href="studentprofile.php?sn=<?= $rows['sn'] ?>">Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a> </td>
                        </tr>
                      <?php  } ?>
                    </tbody>
                  </table>
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
</body>

</html>