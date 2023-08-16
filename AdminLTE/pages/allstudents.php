<?php require_once("myclass.php"); 

if(isset($_GET['sn'])){
    $sql= $con->query("SELECT * FROM students WHERE sn = '$sn'");
    

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="y0Qfku3Dj58RmxzxUx7Bm44QzTm7FrX8xxIQowLp">
    <title> Students
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


        <?php include("nav.php") ?>

        <div class="content-wrapper">
            <div class="littleAlert"></div>
            <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


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
                    <div class="col-md-4 offset-md-8 mb-3">
                        <form action="">
                            <div class="input-group input-group-">
                                <input type="search" name="student" class="form-control form-control-sm" placeholder="Search Student">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-sm btn-default searchStudent">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row" id="student_list_body">
                    <?php $i = 1;
                    $sql = $con->query("SELECT * FROM students");
                    while ($rows = mysqli_fetch_assoc($sql)) { ?>
                        <div class="col-lg-3 col-md-4">
                            <div class="card card-secondary card-outline">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="user.png" alt="">
                                    <h3 class="profile-username text-center"><?= $rows['surname'] . ' ' . $rows['firstname'] ?></h3>
                                    <p class="text-muted mb-0 text-center"><?= $rows['class'] ?> <sup><?= $rows['arm'] ?></sup> | <?= $rows['gender'] ?></p>
                                    <button type="button" class="btn btn-success btn-xs  btn-block"><b> <i class="fa fa-user-check"></i> Active</b></button>
                                    <div class="text-center">
                                        <a href="studentprofile?sn=<?= $rows['sn'] ?> ">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php }
                    ?>

                </div>

                <div class="row">
                    <div class="col-12 pageLinks">
                    </div>
                </div>
            </section>


            <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

            <!-- <script>
    $(function() {
     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYTViZDU2NmQxOTQ5OGE2ZDZkYjVkMzY0MWE0MzI5ZWY1OTA2ZDc2MTEwMGNiY2VhOTRkYTVjMWIwY2M2MTBjZjFmMTE3OGFiNmMzMzdjZGYiLCJpYXQiOjE2OTE4NDAzMjYuODcxMTE2LCJuYmYiOjE2OTE4NDAzMjYuODcxMTI4LCJleHAiOjE3MjM0NjI3MjYuODIyMTI3LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.kfP4h0lwjxbvVkN3CJW_HwperraLQcvyWAmgv-czqcSqNVmTnJR4SSTu6U5KsK-aJHDU5SshlJ4W9xbH0iKG0WkGf1Z2xWUg-9yYRIHEI6f-L9l4G7yDSd3oxnqUUfbRCIMr8p6o-tddAL0uWPg1wodEhn82OFXIRbQ4aRKubU9ah-LH1oURWHVGOkEh7SNJsNwU86wgAshkq7bTF5WhT9INrsLdZLJHQCuIf_uq2zqFEevvy0XWOqDX831RY2DPcNFq-mBfUA7f2wxTdodohPXuFvPeGFaCbqPT_rcxOk4Loj-DhQnEriupkCz4pENgcNAriOlw2k-bMMELLE7j49mlHgg8Jmwf7wod0k7YLJcH0LYe5u8L87Qdh811DR1j-dyD_-9Ax1d_MKOXfFTF2w1HHRYzSTicLdHVXXAexp7hbS62_XSdbZFtuGfHigAfNgHptW10cIX2qfMY_FQsw3LatTTaf5CsWzZXWdMEOIxnZTtZdemUu4Tz_gQZLCqySNEcJZcs5YFX4SZBu2tK6Q-7d5fZA4rAgYsfBOWtBtBp4NIbay_4yFqVSENAwuls-46kK-cgiuPVpoR3XxmfBw6_O4X1BekM0kYnBpOtev5nQr8nK9HfBiAP9fvuCYICYxSudnLYECLkQdbQDlf2TBbiM3CW3V3kXqgbZpRr7hI`
      }
     });



     function fetchStudent() {
      page = '1'
      $.ajax({
       method: 'get',
       url: api_url + 'get_all_student?page=' + page
      }).done(function(res) {
       body = $('#student_list_body');
       body.html(``);
       res.data.data.forEach(stu => {
        btn = (stu.status == 1) ? `<button type="button" class="btn btn-success btn-xs  btn-block"><b> <i class="fa fa-user-check"></i> Active</b></button>` :
         `<button type="button" class="btn btn-danger btn-xs  btn-block"> <b><i class="fa fa-user-times"></i> Not Active</b></button>`;
        body.append(`
                            <div class=" col-lg-3 col-md-4">
                                <div class="card card-secondary card-outline">
                                    <div class="card-body pb-1 box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="${api_url_root+stu.photo}" alt="${stu.firstname}">
                                        </div>
                                        <h3 class="profile-username text-center">${stu.surname + ' ' +stu.firstname}</h3>
                                        <p class="text-muted mb-0 text-center">${stu.class.class} <sup>${(stu.arm)? stu.arm.arm :''}</sup> | ${stu.sex}</p>
                                        ${btn}
                                        <div class="text-center">
                                            <a href="/control/student/${stu.id}">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
       });
       $('.pageLinks').html(dropPaginatedPages(res.data.links))
      }).fail(function(res) {
       console.log(res);
      })
     }



     fetchStudent();

     $('.searchStudent').on('click', function(e) {
      e.preventDefault();

      btn = $(this)
      q = $('input[name="student"]').val();

      if (!q) {
       littleAlert('Pls add a search parameter', 1);
       return;
      }

      btn.attr('disabled', 'disabled');
      btn.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>`);

      $.ajax({
       method: 'get',
       url: api_url + 'search_student/' + q
      }).done(function(res) {
       console.log(res);
       btn.removeAttr('disabled');
       btn.html(`<i class="fa fa-search"></i>`);

       if (res.data.length == 0) {
        littleAlert(`No result found for this search <b> '${q}' </b>`, 1);
        return;
       }


       body = $('#student_list_body');
       body.html(`<div class=" col-12"><h3>Search Result for <b>'${q}'</b></h3></div>`);
       res.data.forEach(stu => {
        btn = (stu.status == 1) ? `<button type="button" class="btn btn-success btn-xs  btn-block"><b> <i class="fa fa-user-check"></i> Active</b></button>` :
         `<button type="button" class="btn btn-danger btn-xs  btn-block"> <b><i class="fa fa-user-times"></i> Not Active</b></button>`;
        body.append(`
                            <div class=" col-lg-3 col-md-4">
                                <div class="card card-secondary card-outline">
                                    <div class="card-body pb-1 box-profile">
                                        <div class="text-center">
                                            <img class="profile-user-img img-fluid img-circle"
                                                src="${api_url_root+'assets/img/students/user.png'}" alt="${stu.firstname}">
                                        </div>
                                        <h3 class="profile-username text-center">${stu.surname + ' ' +stu.firstname}</h3>
                                        <p class="text-muted mb-0 text-center">${stu.class.class} <sup>${(stu.arm)? stu.arm.arm :''}</sup> | ${stu.sex}</p>
                                        ${btn}
                                        <div class="text-center">
                                            <a href="/control/student/${stu.id}">Go-to-profile <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `)
       });


      }).fail(function(res) {
       parseError(res.responseJSON);
       btn.removeAttr('disabled');
       btn.html(`<i class="fa fa-search"></i>`);
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