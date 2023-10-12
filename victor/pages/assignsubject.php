<?php require("myclass.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="cXO45Tk6wcpzfsXXv7F1QFE7Jb0Pb4rG4VoM1K0E">
  <title>Subjects
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
    <?php include("nav.php") ?>

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




    <div class="content-wrapper">
      <div class="littleAlert"></div>

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Subject Teachers</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Subject Teacher</li>
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
                    Subject Teachers List
                  </h3>
                  <div class="d-flex justify-content-end">
                    <button data-toggle="modal" data-target="#assignSubjectModal" class="btn btn-secondary float-right btn-sm">
                      Assign Subject
                    </button>
                  </div>
                </div>


              </div>
              <div class="card-body p-1">
                <div class="table-responsive">
                  <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Subject</th>
                        <th>Class</th>
                        <th>Teacher</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="sub_body">
                      <?php
                      $i = 1;
                      $sql = $con->query("SELECT * FROM assign_subjects");
                      while ($rows = mysqli_fetch_assoc($sql)) { ?>

                        <tr>
                          <td><?= $i++ ?></td>
                          <td><?= $pro->SqLx('subjects', 'sn', $rows['subject'], 'subject') ?></td>
                          <td><?= $pro->SqLx('class', 'sn', $rows['class'], 'class') ?></td>
                          <td><?= $pro->SqLx('staff', 'sn', $rows['teacher'], 'name') ?></td>
                          <td><button class="btn btn-xs btn-danger remove_subject" data-id="122"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            <a class="btn btn-xs btn-info" href="/control/class/broad-sheet/122"><i class="fas fa-eye"></i> Results</a>
                          </td>


                        <?php   }

                        ?>

                        </tr>
                    </tbody>
                  </table>
                </div>
                <div id="page_links1">

                </div>
              </div>

            </div>
          </div>
        </div>
      </section>


      <div class="modal fade" id="assignSubjectModal">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title text-bold">Assign Subject</p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" class="row" id="assignSubject">
                <div class="col-md-4 form-group">
                  <label>Subject</label>
                  <select name="subject" class="form-control select2bs4">
                    <option>Select Subject</option>
                    <?php $i = 1;
                    $sql = $con->query("SELECT * FROM subjects");
                    while ($rows = $sql->fetch_assoc()) {
                      echo '<option value="' . $rows['sn'] . '">' . $rows['subject'] .  '</option>';
                    } ?>


                  </select>
                </div>


                <div class="col-md-4 form-group">
                  <label>Class</label>
                  <select name="class" class="form-control select2bs4">
                    <option>Select Class</option>
                    <?php $i = 1;
                    $sql = $con->query("SELECT * FROM class");
                    while ($rows = $sql->fetch_assoc()) {
                      echo '<option value="' . $rows['sn'] . '">' . $rows['class'] .  '</option>';
                    } ?>
                  </select>
                </div>

                <div class="col-md-4 form-group">
                  <label>Teacher</label>
                  <select name="teacher" id="user" class="form-control select2bs4" style="width: 100%;">
                    <option>Select a Teacher</option>
                    <?php $i = 1;
                    $sql = $con->query("SELECT * FROM staff");
                    while ($rows = $sql->fetch_assoc()) {
                      echo '<option value="' . $rows['sn'] . '">' . $rows['name'] .  '</option>';
                    } ?>


                  </select>
                </div>
                <div class="col-12 form-group">
                  <button type="submit" class="btn btn-secondary float-right assignSubject" name="assignSubject">Assign Subject</button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>

      <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>



      <!-- <script>
    $(function() {
     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODk5YWQwZTI4ODFmMDc0NDcyMzU2ZjY2ZWM1M2IyNDZmOGQxNzM5YzkxNmEzYTk4ZTMzMmQ0ZTNkMGJkMmJjYWYxYzBhZDc0YTNkNzJjMGUiLCJpYXQiOjE2OTIwMjkyNjUuNTQ1Mjk4LCJuYmYiOjE2OTIwMjkyNjUuNTQ1MzA2LCJleHAiOjE3MjM2NTE2NjUuNTEwODc0LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.Cck_mbMp3N2586PyJoeLgNFRzranuFewXbawuS3q1D7OkyjdJ0U3o185-vrJCLi3oq-gkOGHDqq_eRthmNZwK3c1H2iqKPhbj6PavOm7OK-dme0OrLPncAGWBmQ6WbK6N5QV7oDyF1ptVCSyBjLa6xNGev2w7sMmfgAPkBJAGdD_RNTW3p5tvpI6isAWel_JX61dZ7MZWnHXTai6BdCvEhZ1B9MHqkihTqd3P53npIboxIWRmhef9cUWRqUCvw9JcnbaO_gvwveZ_CmOBQyCRKd_LMB6Xw6YLH6LlLZRkUdKdwyfgq_vFhbpjnMF9JCN-UYWCZJWNvMwcN0RS4Por8DfPEJ7gozjcAuHmku5BA2qTMddQknjr6XUziGQaGeWd7TOMxN3SYihGj0oZ0BihKqXxO30NGEBzM3L_MB50FHMA7OKY7WMYW-rfb5vB1Wy5mRf0TfJUO73r4AWtdU2kfULmyaUJre1f98TOEhuIVe79j-MMbDNxx0IYrEWh8MRX-H9A7o2_D-FCnhQyZxd3f_NZ2nprXTJxbCLIy9dI7w5rfTHi5I_qhQlTNsfv5UJ7Mht-WSQBq5NlgfslbvZFzH2YwXco87Hoq5Jons1vQMkDZbdlRDnDfWE3a6dL-Ux1kMNpMG1g8EJrtUuib7Hk49vQ-nNb9M2FTa7rkty9aM`
      }
     });



     function fetchTable() {
      $.ajax({
       method: 'get',
       url: api_url + `fetch_subject_teacher?page=1`
      }).done(function(res) {
       body = $('#sub_body');
       body.html(``);
       res.data.data.map((sub, index) => {
        body.append(`
                            <tr>
                                <td>${index+1}</td>
                                <td>${sub.subject.subject}</td>
                                <td>${sub.class.class}</td>
                                <td>${sub.teacher.name}</td>
                                <td>
                                    <button class="btn btn-xs btn-danger remove_subject" data-id="${sub.id}"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                    <a class="btn btn-xs btn-info" href="/control/class/broad-sheet/${sub.id}"><i class="fas fa-eye"></i> Results</a>
                                </td>

                            </tr>
                        `)
       })

       $('#page_links1').html(dropPaginatedPages(res.data.links));
      }).fail(function(res) {})
     }

     fetchTable();



     function fetchRequirements() {
      $.ajax({
       method: 'get',
       url: api_url + 'assign_subject_req'
      }).done(function(res) {
       form = $('#assignSubject');
       subject = $(form).find('select[name="subject"]');
       clas = $(form).find('select[name="class"]');
       userss = $('#user');

       subject.html(`<option selected disabled>Select Subject</option>`);
       res.data.subjects.map(sub => {
        subject.append(`<option value="${sub.id}">${sub.subject}</option>`)
       })

       class_id = `0`

       clas.html(`<option selected disabled>Select Class</option>`);
       res.data.classes.map(cla => {
        clas.append(`<option value="${cla.id}" ${(class_id == cla.id) ? 'selected' : ''}>${cla.class}</option>`)
       })

       userss.html(`<option selected disabled>Select teacher</option>`);
       res.data.users.map(tea => {
        userss.append(`<option value="${tea.id}">${tea.name}</option>`)
       })

      }).fail(function(res) {})
     }

     fetchRequirements();

     $('#assignSubject').on('submit', function(e) {
      e.preventDefault();
      form = $(this);
      subject_id = $(form).find('select[name="subject"]').val();
      class_id = $(form).find('select[name="class"]').val();
      user_id = $(form).find('select[name="user"]').val();
      if (!subject_id || !class_id || !user_id) {
       littleAlert('Pls fill out all fields', 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'assign_subject_to_teacher',
       data: {
        subject_id: subject_id,
        user_id: user_id,
        class_id: class_id
       },
       beforeSend: () => {
        btnProcess('.assignSubject', 'Assign Subject', 'before');
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.assignSubject', 'Assign Subject', 'after');
       $('#assignSubjectModal').modal('hide');
       fetchTable();
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.assignSubject', 'Assign Subject', 'after');
      })
     })


     $('body').on('click', '.remove_subject', function(e) {
      id = $(this).data('id');
      if (!confirm('Subject will be removed from this user!')) {
       return;
      }
      $.ajax({
       method: 'post',
       url: api_url + 'remove_assigned_subject',
       data: {
        set_subject_id: id
       },
       beforeSend: () => {
        $('.remove_subject').attr('disabled', 'disabled');
        $(this).html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>`);
       }
      }).done(function(res) {
       littleAlert(res.message);
       fetchTable();
      }).fail(function(res) {
       parseError(res.responseJSON);
       $('.remove_subject').removeAttr('disabled');
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