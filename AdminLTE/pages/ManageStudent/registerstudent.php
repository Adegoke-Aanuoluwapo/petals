<?php
require_once("../myclass.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="T3IvrB0h5oKZq9yQsfXOqyjjpzPz1IgOBTYgfBEj">
    <title>Students
    </title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/css/adminlte.min.css">
    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=jRmqx-XSADPwXvXSSOrHscmAZ8jFvEfTwioM1bQ_F0rLSRSG2L6JXuUrrSA2LNfDGq0B7VcGje_wCf4LaxckRRsk5nbDIaVoaK9cq8PpATM" charset="UTF-8"></script>
    <script src="https://portal.schoolpetal.com/assets/js/littlealert.js"></script>

    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


    <link rel="icon" href="https://portal.schoolpetal.com/assets/img/favicon.png">

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
        <?php include("../nav.php") ?>

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

        <aside class="main-sidebar sidebar-dark-primary elevation-4">

            <a href="#" class="brand-link">
                <img src="https://apis.schoolpetal.com/assets/img/schools/8012145schoolpetal-international-school.jpg" alt="SchoolPetal Logo" class="brand-image img-circle elevation-3" style="opacity: .5">
                <span class="brand-text font-weight-bolder">School Petal</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">

                    </div>
                    <img src="https://apis.schoolpetal.com/assets/img/students/user.png" class="profile_pics object-cover img-circle elevation-2   " alt="Img">

                    <div class="info">
                        <a href="#" class="d-block">SchoolPetal</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="/control/dashboard" class="nav-link">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                <p>
                                    Manage Students
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/control/register_guardian" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register Guardians</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/control/register_student" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Register Students</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/control/all_student" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>All Students</p>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-user-plus"></i>
                                <p>
                                    Staff Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/control/add_staff" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add New Staff</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View All Staffs</p>
                                    </a>
                                </li>


                            </ul>
                        </li>









                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-clipboard" aria-hidden="true"></i>
                                <p>
                                    Class Management
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/control/category_arm" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Category/Arm</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/control/create_class" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Classes</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-subscript"></i>
                                <p>
                                    Subjects Info
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/control/add_subject" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create/View Subjects</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/control/subject/assign" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Subject Teachers</p>
                                    </a>
                                </li>


                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-subscript"></i>
                                <p>
                                    Results Mgm
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/control/result/check/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Students Results</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/control/result/class/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Class Result </p>
                                    </a>
                                </li>


                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-toolbox"> </i>
                                <p>
                                    School Settings
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/control/setting/result" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Results Settings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/control/setting/permission" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Permission Setup</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/control/setting/general" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>General Setup</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/control/setting/sub/10" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Registration Slots</p>
                                    </a>
                                </li>

                            </ul>
                        </li>



                        <li class="nav-item">
                            <a href="/control/managepromotion" class="nav-link">
                                <i class="fas fa-scroll    "></i>
                                <p>Manage Promotions</p>
                            </a>
                        </li>




                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-money-bill-wave-alt"></i>
                                <p>
                                    School Fees Control
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/control/fee" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Create Fee Category</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/control/set_fee" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Set School Fee</p>
                                    </a>
                                </li>


                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-sticky-note" aria-hidden="true"></i>
                                <p>
                                    Levy Payment Report
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/control/fee/daily" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daily Payments</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/control/fee/weekly" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Weekly Payments</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/control/fee/termly" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Termly Payments</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/control/fee/range" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Fee Across Date Range</p>
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-book" aria-hidden="true"></i>
                                <p>
                                    Student Result
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/control/result/upload/" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Upload Result</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/control/broad-sheet" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Broad Sheet</p>
                                    </a>
                                </li>


                            </ul>
                        </li>




                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p>My Profile</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="/logout" onclick="return confirm('Are you sure you want to log out')" class="nav-link">
                                <i class="fa fa-power-off" aria-hidden="true"></i>
                                <p>Log Out</p>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </aside>


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
                                    <!-- id="registerStudent"-->
                                    <div class="col-md-4 form-group">
                                        <label>Guardian <span class="text-danger">*</span></label>
                                        <select name="name" class="form-control ">
                                            <!--id="guardian"  -->
                                            <option>Select Guardian</option>
                                            <?php $i = 1;
                                            $sql = $con->query("SELECT * FROM parents");
                                            while ($rows = $sql->fetch_assoc()) {
                                                echo '<option>' . $rows['name'] .  '</option';
                                            } ?>
                                        </select>
                                    </div>

                              
                                    <div class="col-md-4 form-group">
                                        <label>Class Arm <span class="text-danger">*</span></label>
                                        <select name="arm" class="form-control select2bs4">
                                            <option>Select arm</option>
                                            <?php $i = 1;
                                            $sql = $con->query("SELECT * FROM arm");
                                            while ($rows = $sql->fetch_assoc()) {
                                                echo "<option>" . $rows['arm'] .  "</option";
                                            } ?>
                                        </select>
                                    </div>


                                    <div class=" col-md-3 form-group">
                                        <label>Surname <span class="text-danger">*</span></label>
                                        <input type="text" name="surname" class="form-control" placeholder="Lekki, Nigeria">
                                    </div>
                                    <div class=" col-md-3 form-group">
                                        <label>Firstname <span class="text-danger">*</span></label>
                                        <input type="text" name="firstname" class="form-control" placeholder="mail@gmail.com">
                                    </div>
                                    <div class=" col-md-3 form-group">
                                        <label>Othernames</label>
                                        <input type="text" name="othernames" class="form-control" placeholder="090000000000">
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
                                        <button class="btn btn-secondary float-right mt-4 registerStudent ">Register Student</button>
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
                                        <tbody id="student_list_body">

                                        </tbody>
                                    </table>
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
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDcyMDkwN2Y5MDU0NDFmYTAyZGUyNTI3MTg4MmUxOWE5NTYwOGU5NDM0ZjgxYmVmOGIyMTEwNmEyNDFhMjNhOGMzNWNkNmUxNTM0ZDU1YzIiLCJpYXQiOjE2OTE1Njg2NjIuODk3Mzg2LCJuYmYiOjE2OTE1Njg2NjIuODk3MzkyLCJleHAiOjE3MjMxOTEwNjIuODc1MTI2LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.lDc1DW09Az8DtpF5XcY1Q9sY9UzmzXmnw2TyPQOzGqiaI5dG_HTy9iSj_jjoe399UvZghay_ApYXMAeXMzNMGStYODN40q5N4QgaJyfmcIwU608vbVNab9ScM3E0Rb-Q8fUH_y_BBzauC0rW7hqR4h-yjcx31uGOWtcyq1MMBXohmURDVKovZ19L8t-soWV37oxjEf5kTXaE-Nz9B8LqGbJN1vE18oUmYuYmkhpS952qjTrkzwwQyNEsj6FnXoQmGTIcneQImh3GFfMEgX3MmVTpH5m2nRn-kO2FXo4QZk3LBjqMoQZ8UdW66x-SNUZU0p455w9dO-HupBiCJLzLN7IaO5JOWSfOZbWO0Xt2CnatV7y9lVNpzbfLtov_YjUHGhZaS1O2Ar3_dxlcFanp57vIUXOkzrrH7VM_3Bojd5kLwzfvLg0KW1dcYA3wBl4C9R9bGaWl8W-jZ2hub-G0sabDSgPv02nXpUHZbqBhVVsjjcxkjnFurrgfNe6UrmI-XIS9GkaLMT6vcVbWmrJI1iEzJ_Fk3J923XwyxqLyI-GpU9860hIPZxdO8aflfAltty0zJbC1_cbthYMdP75XlU9_954msv1Z2jLdc1JVe_px0U6m-U49UjjgFnml6uTBr1JmTJqlEolVDrY3Vcw8ej3gwrDPQQbhr3AiO5iJmp8`
      }
     });


     function fetchStudent() {
      $.ajax({
       method: 'get',
       url: api_url + 'fetch_recently_registered_student'
      }).done(function(res) {
       body = $('#student_list_body');
       body.html(``)
       res.data.map((stu, index) => {
        body.append(`
                            <tr>
                                <td>${index + 1}</td>
                                <td>${stu.surname+ ' ' + stu.firstname}</td>
                                <td>${stu.class.class ?? ''} <sup>${(stu.arm)? stu.arm.arm :''}</sup> </td>
                                <td><a href="/control/guardian_profile/${stu.guardian.id}" >${stu.guardian.guardian_name}</a></td>
                                <td>${stu.sex}</td>
                                <td>
                                    <div class="float-right">
                                        <a href="/control/student/${stu.id}">Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </div>
                                </td>
                            </tr>
                        `)
       })
      }).fail(function(res) {
       console.log(res);
      })
     }


     fetchStudent()


     function fetchReq() {
      $.ajax({
       method: 'get',
       url: api_url + 'registration_requirements'
      }).done(function(res) {
       guardian = $('#guardian')
       guardian.html(`<option disabled selected>Select Guardian</option>`)
       res.data.guardians.map(guard => {
        guardian.append(`<option value="${guard.id}">${guard.guardian_name} | ${guard.guardian_email}</option>`)
       });

       cla = $('#class')
       cla.html(`<option disabled selected>Select Class</option>`)
       res.data.classes.map(clas => {
        cla.append(`<option value="${clas.id}">${clas.class}</option>`)
       });

       arms = $('#arm')
       arms.html(`<option disabled selected>Select Arm</option>`)
       res.data.arms.map(arm => {
        arms.append(`<option value="${arm.id}">${arm.arm}</option>`)
       });

      }).fail(function(res) {
       console.log(res);
      })
     }

     fetchReq();


     $('#registerStudent').on('submit', function(e) {
      e.preventDefault();

      form = $(this);

      surname = $(form).find('input[name="surname"]').val();
      firstname = $(form).find('input[name="firstname"]').val();
      othernames = $(form).find('input[name="othernames"]').val();
      reg = $(form).find('input[name="reg"]').val();
      gender = $(form).find('select[name="gender"]').val();
      guardian = $('#guardian').val();
      arm = $('#arm').val();
      clas = $('#class').val();

      if (!guardian || !surname || !firstname || !gender || !arm || !clas) {
       littleAlert('Pls fill out the required field', 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'create_student_profile',
       data: {
        guardian_id: guardian,
        class_id: clas,
        arm_id: arm,
        firstname: firstname,
        surname: surname,
        othername: othernames,
        registration_number: reg,
        sex: gender
       },
       beforeSend: () => {
        btnProcess('.registerStudent', 'Register Student', 'before')
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.registerStudent', 'Register Student', 'after')

       body = $('#student_list_body');
       body.prepend(`
                        <tr>
                            <td>#</td>
                            <td>${surname+ ' ' + firstname}</td>
                            <td>...</sup> </td>
                            <td><a href="/control/guardian_profile/${guardian}" >...</a></td>
                            <td>${gender}</td>
                            <td>
                                <div class="float-right">
                                    <a href="#">Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </div>
                            </td>
                        </tr>
                    `)
       form[0].reset();
       fetchStudent();
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.registerStudent', 'Register Student', 'after')
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