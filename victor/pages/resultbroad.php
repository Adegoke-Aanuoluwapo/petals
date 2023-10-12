<?php
require("myclass.php");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="xJ0Dnex9A8BkkhE42oMC01Coy5hwpVgijyJ0PChF">
    <title>Broad Sheet
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


        <div class="content-wrapper">
            <div class="littleAlert"></div>

            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Broad Sheet</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Broad Sheet</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <!-- <div class="row">
                            <div class="col-md-4">
                                <div class="card card-secondary card-outline">
                                    <div class="card-body">
                                        <form id="loadSheet" method="POST">
                                            <div class="form-group">
                                                <label>Select Programme</label>
                                                <select name="program" id="program" class="form-control select2bs4">
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-secondary float-right loadSheet">View Sheet</button>
                                            </div>
                                            <input type="hidden" id="setup">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->


                        <td><?= $pro->resultId(23) ?></td>
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title text-bold">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i>
                                    <span class="t_text">Broad sheet</span>
                                </h3>
                            </div>
                            <div class="card-body ">
                                <div class="table-responsive">

                                    <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>

                                                <th colspan="12">
                                                    <h3 class="text-center">EL-SHADDAI INTERNATIONAL GROUP OF SCHOOLS, IJOKA</h3>
                                                    <p class="text-center">TERMLY CONTINUOUS ASSESSMENT DOSSIER
                                                        First Term, 2023/2024 ACADEMIC SESSION
                                                    </p>
                                                </th>

                                            </tr>
                                            <tr>
                                                <th colspan="3"> NAME :</th>
                                                <th colspan="3">REGISTRATION NO: </th>
                                                <th colspan="2">RESULT ID: </th>
                                                <th colspan="2">CLASS:</th>
                                                <th colspan="2">GENDER:</th>
                                            </tr>
                                            <tr>
                                                <th colspan="2">subject</th>
                                                <th colspan="">CA1</th>
                                                <th>CA2</th>
                                                <th>CA3</th>
                                                <th>Exam</th>
                                                <th>Term Total</th>
                                                <th>Last Term</th>
                                                <th>Total</th>
                                                <th>class Avg</th>
                                                <th>Grade</th>
                                                <th>Remark</th>

                                                <!-- <th class="ca1">CA1</th>
            <th class="ca2">CA2</th>
            <th class="ca3">CA3</th>
            <th class="exam">Exam</th>
            <th>Total</th>

            <th class="ca1">CA1</th>
            <th class="ca2">CA2</th>
            <th class="ca3">CA3</th>
            <th class="exam">Exam</th>
            <th>Total</th>
            <th>£f</th> -->

                                            </tr>

                                        </thead>

                                        <tbody id="result_body">
                                            <?php
                                                if(isset($_POST['resultid'])){
                                                    $resultid = $_POST['resultid'];
                                               
                                            $i = 1;
                                            $sql = $con->query("SELECT * FROM results WHERE resultid = '$resultid'");
                                            while ($rows = mysqli_fetch_assoc($sql)) {
                                            ?>
                                               

                                                <tr>

                                                    <td colspan="2"><?= $rows['subject'] ?></td>

                                                    <td>
                                                        <?= $rows['ca1'] ?>
                                                    </td>
                                                    <td> <?= $rows['ca2'] ?></td>
                                                    <td> <?= $rows['ca3'] ?></td>
                                                    <td> <?= $rows['exam'] ?></td>
                                                    <td><?= @$rows['lastterm'] ?>88</td>
                                                    <td><?= @$rows['total'] ?>91</td>
                                                    <td><?= @$rows['avg'] ?>179</td>
                                                    <td><?= @$rows['grade'] ?>89.5</td>
                                                    <td><?= @$rows['remark'] ?>A</td>
                                                    <td>Excellent</td>
                                                <?php
                                            }
                                    }
                                            
                                                ?>

                                                </tr>
                                             
                                                <tr>
                                                    <td colspan="3">
                                                        <p>Subjects:</p>
                                                    </td>
                                                    <td colspan="3">
                                                        <p>Total Score:</p>
                                                    </td>
                                                    <td colspan="2">
                                                        <p>Average:</p>
                                                    </td>
                                                    <td colspan="2">
                                                        <p>Class Average:</p>
                                                    </td>
                                                    <td colspan="2">
                                                        <p> No in Class:</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="12">
                                                        <div style="display:flex">
                                                            <p>Vacation Date: <br />
                                                                Teacher's Comments:</p>
                                                            <p style="margin-left:700px">Resumption Date
                                                                <br />
                                                                Principal's Comments
                                                            </p>
                                                        </div>
                                                    </th>

                                                </tr>

                                        </tbody>
                                    </table>

                                    <?php

                                    ?>
                                </div>

                                <div id="page_links">

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>


            <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>
            <!-- 
   

        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; <b>School Petal</b> </strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 2.5
            </div>
        </footer> -->



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
    </script>
</body>

</html>