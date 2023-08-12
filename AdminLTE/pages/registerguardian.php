<?php
require_once("./myclass.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="yUByY45jI8iQViYdL2G97ZoivfsDEdM9NX19S0B8">
    <title>Guardians
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
        include("./nav.php");
        ?>
        <div class="content-wrapper">
            <div class="littleAlert"></div>

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Guardians</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Guardians</li>
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
                                    Register Guardian
                                </h3>
                            </div>
                            <div class="card-body">
                                <form method="POST" class="row">
                                    <!--action="" id="registerGuardian" -->
                                    <div class=" col-md-4 form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Gurdians name">
                                    </div>
                                    <div class=" col-md-4 form-group">
                                        <label>Home Address</label>
                                        <input type="text" name="address" class="form-control" placeholder="Lekki, Nigeria">
                                    </div>
                                    <div class=" col-md-4 form-group">
                                        <label>Email Address</label>
                                        <input type="email" name="email" class="form-control" placeholder="mail@gmail.com">
                                    </div>
                                    <div class=" col-md-4 form-group">
                                        <label>Phone Number</label>
                                        <input type="text" name="phone" class="form-control" placeholder="090000000000">
                                    </div>
                                    <div class=" col-md-4 form-group">
                                        <label>State of Origin</label>
                                        <input type="text" name="state" class="form-control" placeholder="Lagos">
                                    </div>
                                    <div class=" col-md-4 form-group">
                                        <label>L.G.A</label>
                                        <input type="text" name="lga" class="form-control" placeholder="ikeja">
                                    </div>

                                    <div class="col-md-12">
                                        <button class="btn btn-secondary float-right registerGuardian" name="addparent">Register Gurdian</button>
                                    </div>
                                </form>
                            </div>



                        </div>


                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title ">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    Guardians List
                                </h3>
                            </div>
                            <div class="card-body p-1">
                                <div class="table-responsive">
                                    <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>

                                            </tr>
                                        </thead>
                                        <tbody id="guardian_body_list">
                                            <?php $i = 1;
                                            $sql = $con->query("SELECT * FROM parents");
                                            while ($rows = mysqli_fetch_assoc($sql)) {  ?>
                                                <tr>
                                                    <td><?= $i++ ?></td>
                                                    <td><?= $rows['name'] ?></td>
                                                    <td><?= $rows['email'] ?></td>
                                                    <td><?= $rows['phone'] ?></td>
                                                    <td><?= $rows['address'] ?></td>
                                                </tr>
                                            <?php } ?>


                                        </tbody>
                                    </table>
                                </div>

                                <div id="page_links">

                                </div>
                            </div>

                        </div>



                    </div>

                </div>
            </section>


            <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

            <!-- <script>
    $(function() {
     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNGVkOTIwMDljMzgxMzQzNTNhZjViMDhhMDk4MDU1YTRiY2JmNjkxNGVhOTIzMzdjZWY3NWMyNzE3NjFkZWY1NzkxZTQyMzBiNWU1YmI2NTYiLCJpYXQiOjE2OTE0OTg1NTUuNDM4NzY4LCJuYmYiOjE2OTE0OTg1NTUuNDM4Nzc3LCJleHAiOjE3MjMxMjA5NTUuNDMzNTcyLCJzdWIiOiIyMCIsInNjb3BlcyI6W119.iOApUGGjLyAOQfkaaMQFOH6_ZYxfff0H5OrmERGVc2WQa3lU74Gbs5Ct2vg3yYWciO9XBC8MsgA2ISmzY7Nn3AeFQb-vnKbctbLy6hO1Rajcqu6w5K8rsddOYxpIZhqTIZbV6CZgWcc633xilzwoVzTRxmcKm0narufbJj4_MrMMZyJ8xoOgOfsKKU9ZDggoG97-cDIB-yEM9eC5zA2h1dDA0gYLauGDhw54DSnhfPba0_QWntIIDR6UwjfGOl7IZTxvIe4Vl_alxV-KelrRI9rRiVOIsMJ-cGQ0oY5Byg3h-gGlSLId7uLRg8t9-lEyfe523zdqhiYUN17SXPJiTMIYrNoDELxq9ZqkvmIgGluVM-hPWnLeBvmHenqUIAZ6ilnU7Q4MCP-VGY1FLjEgqNQlZAP3mI_trKWAK68ZZVa13J_skpv3Xw9dxKHSn3c729L1j1UoFnA9cQzvjXi27HFNTp9PU0gxrO3wTLlC4S5NVgWU2Gq7Ft7T0xqczznCurGpt3eQuPf3Bvlo2rK1-xZADzckSnoTRoe4soWnH_i36ZuocBydAlaqaZtWEq6N2BNsz2YwSJmclfFfXs6nAVkJLw9d1FXX9SuiD4gf5vMonN-f2jOVnXsg2qSqLzEt4LkteJlug9UbGD5t8otdsN5ttC5tAfrsv2DUQK36XHM`
      }
     });


     function fetchParentSummary() {
      page = '1'
      $.ajax({
       method: 'get',
       url: api_url + 'fetch_guardians_info_summmary?page=' + page
      }).done(function(res) {
       body = $('#guardian_body_list');
       body.html(``)
       res.data.data.map((guard, index) => {
        body.append(`
                            <tr>
                                <td>${index+1 + ((page-1) * 100)}</td>
                                <td>${guard.guardian_name}</td>
                                <td>${guard.guardian_email}</td>
                                <td>${guard.guardian_phone}</td>
                                <td>${guard.guardian_address}</td>
                                <td> <a href="/control/guardian_profile/${guard.id}"> Profile <i class="fa fa-arrow-circle-right"></i> </a> </td>
                            </tr>
                        `)
       })

       link_body = $('#page_links')
       link_body.html(dropPaginatedPages(res.data.links));


      }).fail(function(res) {})
     }


     $('#registerGuardian').on('submit', function(e) {
      e.preventDefault();
      form = $(this);

      name = $(form).find('input[name="name"]').val();
      address = $(form).find('input[name="address"]').val();
      email = $(form).find('input[name="email"]').val();
      phone = $(form).find('input[name="phone"]').val();
      state = $(form).find('input[name="state"]').val();
      lga = $(form).find('input[name="lga"]').val();

      if (!name || !address || !email || !phone || !phone) {
       littleAlert('All fields are required', 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'create_guardian_profile',
       data: {
        guardian_name: name,
        guardian_address: address,
        guardian_email: email,
        guardian_phone: phone,
        state: state,
        lga: lga,
       },
       beforeSend: () => {
        btnProcess('.registerGuardian', 'Register Guardian', 'before')
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.registerGuardian', 'Register Guardian', 'after')
       body = $('#guardian_body_list');
       body.prepend(`
                        <tr>
                            <td>#</td>
                            <td>${name}</td>
                            <td>${email}</td>
                            <td>${phone}</td>
                            <td>${address}</td>
                            <td> <a href="#"> Profile<i class="fa fa-arrow-circle-right"></i> </a> </td>
                        </tr>
                    `)

       fetchParentSummary();
       form[0].reset();


      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.registerGuardian', 'Register Guardian', 'after')
      })
     })






     setTimeout(() => {
      $("#example1").DataTable({
       "responsive": true,
       "lengthChange": false,
       "autoWidth": false,
       "buttons": ["copy", "csv", "excel", "pdf", "print"],
       "paging": false,
       "searching": true,
       "ordering": true,
       "info": true,
       "autoWidth": true,
       "responsive": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     }, 2500);

     fetchParentSummary();
    })
   </script>


  </div>

  <footer class="main-footer">
   <strong>Copyright &copy; <b>School Petal</b> </strong>
   All rights reserved.
   <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 2.5
   </div>
  </footer>


  <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/select2/js/select2.full.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/sweetalert2/sweetalert2.min.js"></script>



  <script src="https://portal.schoolpetal.com/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/jszip/jszip.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


  <script src="https://portal.schoolpetal.com/assets/js/adminlte.js"></script>

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
  </script> -->
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
        <!-- <script src="../dist/js/demo.js"></script> -->
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../dist/js/pages/dashboard.js"></script>
</body>

</html>