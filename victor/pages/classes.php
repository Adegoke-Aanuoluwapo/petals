<?php require_once("myclass.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="ovfhPopTWaMtySJfb2GxHzv3bUoMnoqGerWecgpQ">
    <title>Class
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
</head>

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

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Class</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Class</li>
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
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title ">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        Classes
                                    </h3>
                                    <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#createClassModal">Create Class</button>
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <div class="table-responsive">
                                    <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Class</th>
                                                <th>Category</th>
                                                <th>Students</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="class_list_body">
                                            <tr>
                                                <td colspan="12">
                                                    <div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Classes ...</i> </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>


                    </div>

                </div>
            </section>


            <div class="modal fade" id="createClassModal">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title text-bold">Create Class </p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" class="row" id="createClassForm">
                                <div class="col-md-6 form-group">
                                    <label>Category</label>
                                    <select name="category" id="category_list" class="form-control select2bs4">
                                        <option>Select Class Category</option>
                                        <?php $i = 1;
                                        $sql = $con->query("SELECT * FROM class");
                                        while ($rows = $sql->fetch_assoc()) {
                                            echo "<option>"  . $rows['class'] .  "</option>";
                                        }
                                     ?>
                                </select>
                                </div>

                                <div class="col-md-6 form-group">
                                    <label>Level</label>
                                    <select name="level" class="form-control select2bs4" style="width: 100%;">
                                        <option selected disabled>Select Level</option>
                                        <option value=1> 1 </option>
                                        <option value=2> 2 </option>
                                        <option value=3> 3 </option>
                                        <option value=4> 4 </option>
                                        <option value=5> 5 </option>
                                        <option value=6> 6 </option>
                                        <option value=7> 7 </option>
                                        <option value=8> 8 </option>
                                        <option value=9> 9 </option>
                                        <option value=10> 10 </option>
                                    </select>
                                </div>
                                <div class="col-12 form-group">
                                    <button type="submit" class="btn btn-secondary createClass float-right ">Create Class</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

            <!-- 
   <script>
    $(function() {

     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMGIzNWI2NDFjODZmZDZjNzRmYjc5YTJhYmNjM2I5MDJhNTJlMjk5YzVmMjAwZTVkMTUyZTgzMjJjOTZjM2M0ODJlMTJmZTg5ZGFlNDgzYjAiLCJpYXQiOjE2OTIyNTIyMzUuNzY2MDU3LCJuYmYiOjE2OTIyNTIyMzUuNzY2MDY3LCJleHAiOjE3MjM4NzQ2MzUuNzI2MzQzLCJzdWIiOiIyMCIsInNjb3BlcyI6W119.Pc5nopd-uG2SBEVCmPwqHlNebt2_HBSuTsH3Z8uQgLoeMO4lbfRmDilEIZZ3DJ-1NWceg2qWvxDaTRvA8kgFX-Vycl-klCfSzkMEhuJHn_bBc7-g-DjJtyGeKsQlhFTxTv1jHFTse4UNA9xUBFQkWgH6E0rttW0-DMX8dJF4G2N54TEO9JVvSOOo3NxKo6vW8IzMU4VDZtm8fsdgmqhnEGfMMkvL-Lh2mb3wbHRexKRq3Vdbi_3SZN8GVQdRmpuDffepoyEwd8di_QXrAwnrOsBMCNcA6QUe4zt2JZ5WnnrGWaEvVy8vIxU8_VH9d49pr5NagHygo1nIlyWHN7BRjRW8p33kxxX8rdzIpXy0z1gItoP-p1DjE6hZZsWgnHfesaXe8QbWE95oCfGoAtF556dX_G44A5layl6hFwUS91T5ILGzNvjk9l4uk-EcdzjJx5TZJWAIOKcHfq6g8i_Iu6ULZ0d6HwWFpuZhU5mFVUomTxk8hs8GxHBl3Yz9Xegw2aChDz2PqgtFaTx2IOmDaHX886kQ53fJnhh9kMTHCvQ5WJR3r4nOOhe48SAReyEEfQGfBRPQcuGZS-ZIa1SS1R1ySgVHjyECM8rbMwXxJczM6SbRVkbKoxeSYFB4Y8M-YPJPjT1vyFUN3x77IGboMHFEouWctFY47aqmJgD6Erc`
      }
     });


     function fethClassCategory() {
      $.ajax({
       method: 'get',
       url: api_url + 'get_class_category'
      }).done(function(res) {
       body = $('#category_list')
       console.log(res);
       body.html(``);
       body.append(`<option> Select Class Category</option>`)
       res.data.map(cat => {
        body.append(`
                            <option value="${cat.id}" >${cat.category}</option>
                        `)
       })
      }).fail(function(res) {})
     }

     function fectClasses() {
      $.ajax({
       method: 'get',
       url: api_url + 'get_class'
      }).done(function(res) {
       body = $('#class_list_body')
       body.html(``);


       res.data.map(cla => {
        body.append(`
                            <tr>
                                <td>${ cla.class }</td>
                                <td>${ cla.category }</td>
                                <td>${ cla.students }</td>
                                <td>
                                    <div class="align-items-center">
                                        <button class="btn btn-xs btn-default orderClass" data-id="${cla.id}" data-action="move_up" ><i class="fa fa-arrow-circle-up" aria-hidden="true"></i></button>
                                    </div>
                                </td>
                                <td>
                                    <div class="float-right">
                                        <a href="/control/class/${cla.id}"> class-profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        `)
       })
      }).fail(function(res) {})
     }
     fectClasses();
     fethClassCategory();

     $('body').on('click', '.orderClass', function() {
      class_id = $(this).data('id');
      action = $(this).data('action');
      $.ajax({
       method: 'post',
       url: api_url + 'order_class',
       data: {
        class_id: class_id,
        action: action
       },
       beforeSend: () => {
        $(this).html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>`)
        $('.orderClass').attr('disabled', 'disabled');
       }
      }).done(function(res) {
       littleAlert(res.message);
       fectClasses();
      }).fail(function(res) {
       parseError(res.responseJSON);
       $('.orderClass').removeAttr('disabled');
       $('.orderClass').html(`<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>`)
      })
     })


     $('#createClassForm').on('submit', function(e) {
      e.preventDefault();
      form = $('#createClassForm')
      category_id = $(form).find('select[name="category"]').val();
      level = $(form).find('select[name="level"]').val();

      if (!category_id || !level) {
       littleAlert('All fields are required', 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'create_class',
       data: {
        category_id: category_id,
        level: level
       },
       beforeSend: () => {
        btnProcess('.createClass', 'Create Class', 'before');
       }
      }).done(function(res) {
       littleAlert(res.message)
       btnProcess('.createClass', 'Create Class', 'after');
       fectClasses();
       $('#createClassModal').modal('hide');
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.createClass', 'Create Class', 'after');
      })
     })
    })
   </script> -->

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


    <script src="https://portal.schoolpetal.com/assets/js/adminlte.js"></script>

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