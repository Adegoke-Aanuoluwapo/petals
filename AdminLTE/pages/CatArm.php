<?php
require_once("myclass.php");





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="T3IvrB0h5oKZq9yQsfXOqyjjpzPz1IgOBTYgfBEj">
    <title>Category & Arms
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
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
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

                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
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
                            <h1 class="m-0">Category & Arms</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Category & Arms</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>


            <section class="content">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title ">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    Add Class Category
                                </h3>
                            </div>
                            <div class="card-body pb-0">
                                <form action="" id="createClassCategory" method="POST">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <input type="text" name="class" class="form-control" placeholder="Enter Class Category i.e JSS, PRY, SSS">
                                    </div>
                                    <div class="form-group float-right">
                                        <button class="btn btn-secondary createClassCategory" name="createCategory">Add Category</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title ">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        Class Categories
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <div class="table-responsive">
                                    <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1;
                                            $sql = $con->query("SELECT * FROM class");
                                            while ($rows = mysqli_fetch_assoc($sql)) { ?>
                                                <tr>
                                                    <td colspan="12">
                                                        <?= $rows['class'] ?>
                                                    </td>
                                                    <td><button class="btn btn-xs btn-primary editSubject" data-toggle="modal" data-target="#editClassCategoryModal" id=""><i class="fas fa-edit" name="updateclass"></i></button></td>
                                                </tr>
                                            <?php  } ?>


                                            <!--
                                             <div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Category ...</i> </div>    
                                            id="category_list_body"-->

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-6 col-12">
                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <h3 class="card-title ">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i>
                                    Add Class Arm
                                </h3>
                            </div>
                            <div class="card-body pb-0">
                                <form method="POST">
                                    <!--action="" id="createArm" -->
                                    <div class="form-group">
                                        <label>Arm</label>
                                        <input type="text" name="arm" class="form-control" placeholder="Enter Class Arm i.e A, B, C">
                                    </div>
                                    <div class="form-group float-right">
                                        <button class="btn btn-secondary createArm" name="createArm">Add Arm</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card card-secondary card-outline">
                            <div class="card-header">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="card-title ">
                                        <i class="fa fa-list-alt" aria-hidden="true"></i>
                                        Class Arms
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body p-1">
                                <div class="table-responsive">
                                    <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Arm</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="arm_list_body">
                                            <tr>

                                                <?php $i = 1;
                                                $sql = $con->query("SELECT * FROM arm");
                                                while ($rows = mysqli_fetch_assoc($sql)) { ?>
                                            <tr>
                                                <td colspan="12">
                                                    <?= $rows['arm'] ?>
                                                </td>
                                                <td><button class="btn btn-xs btn-primary editSubject" data-toggle="modal" data-target="#editClassArmModal" id=""><i class="fas fa-edit" name="updatearm"></i></button></td>
                                            </tr>
                                        <?php  } ?>
                                        <!-- <td colspan="12">
                                                    <div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Arms ...</i> </div>
                                                </td> -->
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php
            if (isset($_POST['updateclass'])) {
                $sn = $_POST['updateclass'];
                $sql = $con->query("SELECT * FROM class WHERE sn = '$sn'");
                $rows = mysqli_fetch_assoc($sql);
            }

            ?>
            <div class="modal fade" id="editClassCategoryModal">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title text-bold">Edit Class Category</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" id="editCategoryForm">


                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" name="class" class="form-control" placeholder="Enter Class Category i.e JSS, PRY, SSS">
                                    <input type="hidden" name="category_id">
                                </div>
                                <div class="form-group float-right">
                                    <button class="btn btn-secondary updateCategory" name="editCat">Update Category</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>


            <div class="modal fade" id="editClassArmModal">
                <div class="modal-dialog modal-dialog-centered ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="modal-title text-bold">Edit Class Arm</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" id="editArmForm">
                                <div class="form-group">
                                    <label>Arm</label>
                                    <input type="text" name="arm" class="form-control" placeholder="Enter Class Amr i.e A, B, C">
                                    <input type="hidden" name="arm_id">
                                </div>
                                <div class="form-group float-right">
                                    <button class="btn btn-secondary updateArm">Update Arm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script> -->

            <script>
                //     $(function() {
                //         $.ajaxSetup({
                //             headers: {
                //                 'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOTk5OWMwOTFhY2U3ZDRlZTc3YTYzMzE1MzRkN2I4NGI0ODBkZTBmZmNhYjljYjdjZjY2Y2JjZTJmZTE3NDM1ZTkxZmYyODEzYTY0ODU0NGEiLCJpYXQiOjE2OTE1NzY1NjguMTYwMDIxLCJuYmYiOjE2OTE1NzY1NjguMTYwMDI5LCJleHAiOjE3MjMxOTg5NjguMDc2NDA3LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.XwtNpSIqnRgoTmMRyqeT4c5WtFXTBCtdjJCL2HFtkU7oqa_RgMnetackgTetQsx6rfWWf40T3Fta3IfcGa_tMB2VJJBNjQUNbD_Y2QOU6eY1QH6AkEabD-l55RbKGeb2Knn-gqe0ggu-6JtdRKfgztVgRLqLiwNhR5dbUDEZhGZLmNggqYPxT97ZFWa_vvFIjj7EDaAQ0hFDWaPoXY1SN3s7vrY8OGQTCFlQmBoNRcsLZ8z6pT-Ur5aN1AOyIhAxIR4vv8ZPApBS3ABSKLBezo_v-I4iC37oCTO2hj6vkbfcBlRa_nYm-U89Dc8_q_S3iXh1h2Y6HfjWLF8DqnwFgFOySlGCj9pKh1NwQr8Kp1W0AdXdhToLiGAn57xj7n_UnCfmKgSt2skDI6FQoOY8_GPo6jrUNabFfAcKNsHkgDcH6jCI6YQrNO06aPG0Dk6zbc-RH9CHVjyqSW7gVKS36U2FhQhOeHI4uK7jncCjxG_Np-7WIJcTP5bAn8P4EAYZuxYzU0EiGZCAlXELlbsMwXUx68J_ZsFcqyoOVeOlD_1DF-mwJO59o1Dt-Awfg678t207KaRqqyFNU2MxFwcZyWh5a0VCisxuhlwljVXGsfWLVkPtRkrKIpHJXlaqQj2HeghggoitwO2qCIcSkeXAamEVZVngbHvxab0Fx1fmrxk`
                //             }
                //         });


                //         function fetchClassCategory() {
                //             $.ajax({
                //                 method: 'get',
                //                 url: api_url + 'get_class_category'
                //             }).done(function(res) {
                //                 body = $('#category_list_body')
                //                 body.html(``);
                //                 res.data.map(cat => {
                //                     body.append(`
                //                 <tr>
                //                     <td>${cat.category}</td>
                //                     <td>
                //                         <div class="float-right">
                //                             <button class="btn btn-xs btn-primary editCategory" data-data='${JSON.stringify(cat)}'><i class="fa fa-edit" aria-hidden="true"></i></button>
                //                         </div>
                //                     </td>
                //                 </tr>
                //             `)
                //                 })
                //             }).fail(function(res) {
                //                 // parseError(res.rsponseJSON);
                //             })
                //         }

                //         fetchClassCategory();


                //         $('body').on('click', '.editCategory', function() {
                //             data = $(this).data('data');
                //             modal = $('#editClassCategoryModal')
                //             modal.modal('show')
                //             $(modal).find('input[name="category"]').val(data.category)
                //             $(modal).find('input[name="category_id"]').val(data.id)
                //             $(modal).find('.modal-title').html(`Edit Class Category (${data.category})`)
                //         })

                //         $('#editCategoryForm').on('submit', function(e) {
                //             e.preventDefault();
                //             form = $(this)
                //             category = $(form).find('input[name="category"]').val();
                //             category_id = $(form).find('input[name="category_id"]').val();
                //             if (!category) {
                //                 littleAlert('The class category field is required', 1);
                //                 return;
                //             }

                //             $.ajax({
                //                 method: 'post',
                //                 url: api_url + 'update_class_category',
                //                 data: {
                //                     category: category,
                //                     category_id: category_id,
                //                 },
                //                 beforeSend: () => {
                //                     btnProcess('.updateCategory', 'Update Category', 'before')
                //                 }
                //             }).done(function(res) {
                //                 littleAlert(res.message);
                //                 fetchClassCategory();
                //                 btnProcess('.updateCategory', 'Update Category', 'after')
                //                 $('#editClassCategoryModal').modal('hide')
                //             }).fail(function(res) {
                //                 parseError(res.responseJSON);
                //                 btnProcess('.updateCategory', 'Update Category', 'after')
                //             })
                //         })


                //         $('#createClassCategory').on('submit', function(e) {
                //             e.preventDefault();
                //             form = $('#createClassCategory')
                //             category = $(form).find('input[name="class"]').val();
                //             if (!category) {
                //                 littleAlert('The class category field is required', 1);
                //                 return;
                //             }

                //             $.ajax({
                //                 method: 'post',
                //                 url: api_url + 'create_class_category',
                //                 data: {
                //                     category: category
                //                 },
                //                 beforeSend: () => {
                //                     btnProcess('.createClassCategory', 'Add Category', 'before')
                //                 }
                //             }).done(function(res) {
                //                 littleAlert(res.message);
                //                 fetchClassCategory();
                //                 btnProcess('.createClassCategory', 'Add Category', 'after')
                //                 $('#createClassCategory')[0].reset()
                //             }).fail(function(res) {
                //                 parseError(res.responseJSON);
                //                 btnProcess('.createClassCategory', 'Add Category', 'after')
                //             })
                //         })
                //     })
                // 
            </script>


            // <script>
                //     $(function() {
                //         $.ajaxSetup({
                //             headers: {
                //                 'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiOTk5OWMwOTFhY2U3ZDRlZTc3YTYzMzE1MzRkN2I4NGI0ODBkZTBmZmNhYjljYjdjZjY2Y2JjZTJmZTE3NDM1ZTkxZmYyODEzYTY0ODU0NGEiLCJpYXQiOjE2OTE1NzY1NjguMTYwMDIxLCJuYmYiOjE2OTE1NzY1NjguMTYwMDI5LCJleHAiOjE3MjMxOTg5NjguMDc2NDA3LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.XwtNpSIqnRgoTmMRyqeT4c5WtFXTBCtdjJCL2HFtkU7oqa_RgMnetackgTetQsx6rfWWf40T3Fta3IfcGa_tMB2VJJBNjQUNbD_Y2QOU6eY1QH6AkEabD-l55RbKGeb2Knn-gqe0ggu-6JtdRKfgztVgRLqLiwNhR5dbUDEZhGZLmNggqYPxT97ZFWa_vvFIjj7EDaAQ0hFDWaPoXY1SN3s7vrY8OGQTCFlQmBoNRcsLZ8z6pT-Ur5aN1AOyIhAxIR4vv8ZPApBS3ABSKLBezo_v-I4iC37oCTO2hj6vkbfcBlRa_nYm-U89Dc8_q_S3iXh1h2Y6HfjWLF8DqnwFgFOySlGCj9pKh1NwQr8Kp1W0AdXdhToLiGAn57xj7n_UnCfmKgSt2skDI6FQoOY8_GPo6jrUNabFfAcKNsHkgDcH6jCI6YQrNO06aPG0Dk6zbc-RH9CHVjyqSW7gVKS36U2FhQhOeHI4uK7jncCjxG_Np-7WIJcTP5bAn8P4EAYZuxYzU0EiGZCAlXELlbsMwXUx68J_ZsFcqyoOVeOlD_1DF-mwJO59o1Dt-Awfg678t207KaRqqyFNU2MxFwcZyWh5a0VCisxuhlwljVXGsfWLVkPtRkrKIpHJXlaqQj2HeghggoitwO2qCIcSkeXAamEVZVngbHvxab0Fx1fmrxk`
                //             }
                //         });



                //         function fetchClassArm() {
                //             $.ajax({
                //                 method: 'get',
                //                 url: api_url + 'get_class_arm'
                //             }).done(function(res) {
                //                 body = $('#arm_list_body')
                //                 body.html(``);
                //                 res.data.map(arm => {
                //                     body.append(`
                //                 <tr>
                //                     <td>${arm.arm}</td>
                //                     <td>
                //                         <div class="float-right">
                //                             <button class="btn btn-xs btn-primary editArm" data-data='${JSON.stringify(arm)}'><i class="fa fa-edit" aria-hidden="true"></i></button>
                //                         </div>
                //                     </td>
                //                 </tr>
                //             `)
                //                 })
                //             }).fail(function(res) {})
                //         }
                //         fetchClassArm();

                //         $('body').on('click', '.editArm', function() {
                //             data = $(this).data('data');
                //             modal = $('#editClassArmModal')
                //             modal.modal('show');
                //             $(modal).find('input[name="arm"]').val(data.arm)
                //             $(modal).find('input[name="arm_id"]').val(data.id)
                //             $(modal).find('.modal-title').html(`Edit Class Arm (${data.arm})`)
                //         });


                //         $('#editArmForm').on('submit', function(e) {
                //             e.preventDefault();

                //             form = $('#editArmForm');
                //             arm = $(form).find('input[name="arm"]').val()
                //             arm_id = $(form).find('input[name="arm_id"]').val()

                //             if (!arm) {
                //                 littleAlert('The arm field is required', 1);
                //                 return;
                //             }

                //             $.ajax({
                //                 method: 'post',
                //                 url: api_url + 'update_arm',
                //                 data: {
                //                     arm: arm,
                //                     arm_id: arm_id,
                //                 },
                //                 beforeSend: () => {
                //                     btnProcess('.updateArm', 'Update Arm', 'before');
                //                 }
                //             }).done(function(res) {
                //                 littleAlert(res.message);
                //                 fetchClassArm();
                //                 btnProcess('.updateArm', 'Update Arm', 'after');
                //                 $('#editClassArmModal').modal('hide');
                //             }).fail(function(res) {
                //                 parseError(res.responseJSON);
                //                 btnProcess('.updateArm', 'Update Arm', 'after');
                //             })
                //         })


                //         $('#createArm').on('submit', function(e) {
                //             e.preventDefault();
                //             form = $('#createArm');
                //             arm = $(form).find('input[name="arm"]').val()
                //             if (!arm) {
                //                 littleAlert('The arm field is required', 1);
                //                 return;
                //             }
                //             $.ajax({
                //                 method: 'post',
                //                 url: api_url + 'create_arm',
                //                 data: {
                //                     arm: arm,
                //                 },
                //                 beforeSend: () => {
                //                     btnProcess('.createArm', 'Update Arm', 'before');
                //                 }
                //             }).done(function(res) {
                //                 littleAlert(res.message);
                //                 fetchClassArm();
                //                 btnProcess('.createArm', 'Add Arm', 'after');
                //                 form[0].reset();
                //             }).fail(function(res) {
                //                 parseError(res.responseJSON);
                //                 btnProcess('.createArm', 'Add Arm', 'after');
                //             })
                //         })

                //     })
                // 
            </script>



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