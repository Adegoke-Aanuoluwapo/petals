<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="xJ0Dnex9A8BkkhE42oMC01Coy5hwpVgijyJ0PChF">
 <title>Upload Results
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
       <h1 class="m-0">Upload Result</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Result</li>
       </ol>
      </div>
     </div>
    </div>
   </div>


   <section class="content">
    <div class="row">
     <div class="col-md-12 col-12">
      <div class="row">
       <div class="col-md-4">
        <div class="card card-secondary card-outline">
         <div class="card-body">
          <form id="startResult">
           <div class="form-group">
            <label>Select Programme</label>
            <select name="program" id="program" class="form-control select2bs4">
            </select>
           </div>
           <div class="form-group">
            <button class="btn btn-secondary float-right startResult">Start Result</button>
           </div>
           <input type="hidden" id="setup">
          </form>
         </div>
        </div>
       </div>
      </div>



      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title text-bold">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
         <span class="t_text">Broad sheet</span>
        </h3>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
          <thead>
           <tr>
            <th>#</th>
            <th>Student</th>
            <th class="ca1">CA1</th>
            <th class="ca2">CA2</th>
            <th class="ca3">CA3</th>
            <th class="exam">Exam</th>
            <th>Total</th>
            <th></th>
           </tr>
          </thead>
          <tbody id="result_body">

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

   <script>
    $(function() {
     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiN2RjOTI1MDc2N2IwZWU3NDcyNmNjN2E5MDdiODBmNDcyOTQzOWYzOGVlNTVkNTdjM2RmY2VhODQ0MTdlMGMzYzJmZmIwZjEwYjk0ZWFmMjAiLCJpYXQiOjE2OTIxMjI1OTUuOTcwNDM2LCJuYmYiOjE2OTIxMjI1OTUuOTcwNDQ2LCJleHAiOjE3MjM3NDQ5OTUuOTU0ODI5LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.m9F64QZo_mUdjRcemDRmKW5qDjsBWjRgnPDznUPXbltU02OxF16_GartitU6nrjlnJk7r5DeE9Zhtjp7qVXcq3PaLeJkYqDj6GQ719W7B5bEC5reiGJznsKk5VfH8x14qrQ5WWLHrkGMOdqQEzYrnNgQgO4sD38wPz_rC7fPm_Tb2x8V4zIBfbiOT_tmt_LdfIXsDe4g6GZjyNDqNBPsuVuGMA73aLsCWP-idYn3hBxOBvuWyzgQE-4zOwgUDe0IE36ZdldHM8YbhVOqgJ34daTTz_USnksZvx7-Qq5qXXDEMcMmUZacTJU-tY5D6f7PD0-JcrM_KwwtKl_J_WYw_V6a88ULHD65OYyyL7fp5FvjWQTTFRShkj00QSBtwRTkT4IQ-wjGuUOZGPQLnxS7FzZYeqqgNVWpI3Hh1efDHHJnCQztgAgU1LIrSpaHSRNsFUKMp-bb79fsESvsaChgH8itJy4ud1DcQRgpVJWDqael9cBjcjeiZkor_v9mAsCLzEGnqifjnF4DS875IMzkRhHfpR7w3qidOTYkEbXKwCq6NvfjP_VqwZmy3pAwMoteZqA8CC-4uolnFobi42Yv-NqUi5Q4fNJwWVNPjOsgR7Sh4eApU6z0Lg0SaU54JGChbE-PL4IF9sbweIzBc8kS_TCuf1v9avZze1No8wF5nYM`
      }
     });


     function fetchProgram() {
      $.ajax({
       method: 'get',
       url: api_url + 'fetch_teacher_subject/20'
      }).done(function(res) {
       body = $('#program');
       body.html(`<option selected disabled>Select Option</option>`);
       res.data.map(pro => {
        body.append(`<option value="${pro.id}">${pro.class.class} ${pro.subject.subject}</option>`)
       })
      }).fail(function(res) {})
     }

     fetchProgram();


     $('#startResult').on('submit', function(e) {
      e.preventDefault();
      form = $(this);
      program = $(form).find('select[name=program]').val();
      if (!program) {
       littleAlert('Pls select a program to start result', 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'start_result',
       data: {
        set_id: program
       },
       beforeSend: () => {
        btnProcess('.startResult', '', 'before');
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.startResult', 'Start Result', 'after');
       location.href = `/control/result/upload/${program}`
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.startResult', 'Start Result', 'after');
      })
     })


     function loadProgram() {
      program = `0`;
      body = $('#result_body');
      if (program == 0) {
       littleAlert('Pls select a program to upload/edit result', 1);
       return;
      }
      $.ajax({
       method: 'get',
       url: api_url + `load/program/${program}?page=1`,
       beforeSend: () => {
        body.html(`
                            <tr>
                                <td colspan="12">
                                    <div class="text-center">
                                        <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                        <i> Loading ... </i>
                                    </div>
                                </td>
                            </tr>
                        `)
       }
      }).done(function(res) {
       $('.t_text').html(`${res.cap} Result`);
       body = $('#result_body');
       set = res.setup;
       body.html(``);
       if (!res.setup) {
        body.html(`
                            <tr>
                                <td colspan="12"><div class="text-center"><b>Result Setup is not complete <br> Contact an admin to complete setup</b></div></td>
                            </tr>
                        `);
        return;
       }
       $('#setup').val(JSON.stringify(set));
       $('.ca1').html(`CA1 (${set.ca1})`);
       $('.ca2').html(`CA2 (${set.ca2})`);
       $('.ca3').html(`CA3 (${set.ca3})`);
       $('.exam').html(`Exam (${set.exam})`);
       littleAlert('You can now edit student result');
       res.data.data.map((rsu, index) => {
        body.append(`
                            <tr class="single">
                                <td>${index+1}</td>
                                <td>${rsu.student.surname} ${rsu.student.firstname}</td>
                                <td>
                                    <input type="hidden" name="id" value="${rsu.id}">
                                    <input type="number" name="ca1" class="form-control" value="${rsu.t1}" ${(set.ca1 == 0) ? 'disabled' : ''} style="width: 70px; height: 30px">
                                </td>
                                <td><input type="number" name="ca2" class="form-control" value="${rsu.t2}" ${(set.ca2 == 0) ? 'disabled' : ''} style="width: 70px; height: 30px"></td>
                                <td><input type="number" name="ca3" class="form-control" value="${rsu.t3}" ${(set.ca3 == 0) ? 'disabled' : ''}  style="width: 70px; height: 30px"></td>
                                <td><input type="number" name="exam" class="form-control" value="${rsu.exam}" ${(set.exam == 0) ? 'disabled' : ''} style="width: 70px; height: 30px"></td>
                                <td>${parseInt(rsu.t1) + parseInt(rsu.t2) + parseInt(rsu.t3) + parseInt(rsu.exam)}</td>
                                <td><button class="btn btn-xs btn-success save_change float-right"><i class="fas fa-save"></i> Save</button></td>
                            </tr>
                        `)
       })


       body.append(`
                        <tr>
                            <td colspan="12">
                                <button class="btn btn-success save_all float-right"><i class="fas fa-save"></i> Save all changes</button>
                            </td>
                        </tr>
                    `)



       $('#page_links').html(dropPaginatedPages(res.data.links))
      }).fail(function(res) {});
     }
     loadProgram();


     $('body').on('click', '.save_change', function() {
      btn = $(this);
      set = JSON.parse($('#setup').val());
      error = 0;
      parent = btn.parent();
      td_siblings = parent.siblings()
      //result id
      result_id = td_siblings[2].children[0].value

      ///ca1 fetch and check
      ca1 = parseInt(td_siblings[2].children[1].value);
      if (ca1 > set.ca1 || 0 > ca1) {
       td_siblings[2].classList.add('bg-danger');
       error++;
      } else {
       td_siblings[2].classList.remove('bg-danger');
      }

      ///ca2
      ca2 = parseInt(td_siblings[3].children[0].value);
      if (ca2 > set.ca2 || 0 > ca2) {
       td_siblings[3].classList.add('bg-danger');
       error++;
      } else {
       td_siblings[3].classList.remove('bg-danger');
      }

      /////ca3
      ca3 = parseInt(td_siblings[4].children[0].value);
      if (ca3 > set.ca3 || 0 > ca3) {
       td_siblings[4].classList.add('bg-danger');
       error++;
      } else {
       td_siblings[4].classList.remove('bg-danger');
      }

      /////exam
      exam = parseInt(td_siblings[5].children[0].value);
      if (exam > set.exam || 0 > exam) {
       td_siblings[5].classList.add('bg-danger');
       error++;
      } else {
       td_siblings[5].classList.remove('bg-danger');
      }

      total = ca1 + ca2 + ca3 + exam
      if (error > 0) {
       littleAlert(`There are ${error} errors in the score inputed, pls check and try again`, 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'update/student/result',
       data: {
        result_id: result_id,
        ca1: ca1,
        ca2: ca2,
        ca3: ca3,
        exam: exam
       },
       beforeSend: () => {
        btn.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>...</i>`);
        $('.save_change').attr('disabled', 'disabled');
       }
      }).done(function(res) {
       littleAlert(res.message);
       $('.save_change').removeAttr('disabled');
       btn.html(`<i class="fas fa-save"></i> Save`);
       td_siblings[6].innerHTML = total;
      }).fail(function(res) {
       parseError(res.responseJSON);
       btn.html(`<i class="fas fa-save"></i> Save`);
       $('.save_change').removeAttr('disabled');
      })
     })




     $('body').on('click', '.save_all', function() {

      set = JSON.parse($('#setup').val());
      error = 0;


      trs = $('.single')
      data = [];
      total = [];
      trs.map(row => {
       td_siblings = trs[row].children
       //result id
       result_id = td_siblings[2].children[0].value

       ///ca1 fetch and check
       ca1 = parseInt(td_siblings[2].children[1].value);
       if (ca1 > set.ca1 || 0 > ca1) {
        td_siblings[2].classList.add('bg-danger');
        error++;
       } else {
        td_siblings[2].classList.remove('bg-danger');
       }

       ///ca2
       ca2 = parseInt(td_siblings[3].children[0].value);
       if (ca2 > set.ca2 || 0 > ca2) {
        td_siblings[3].classList.add('bg-danger');
        error++;
       } else {
        td_siblings[3].classList.remove('bg-danger');
       }

       /////ca3
       ca3 = parseInt(td_siblings[4].children[0].value);
       if (ca3 > set.ca3 || 0 > ca3) {
        td_siblings[4].classList.add('bg-danger');
        error++;
       } else {
        td_siblings[4].classList.remove('bg-danger');
       }

       /////exam
       exam = parseInt(td_siblings[5].children[0].value);
       if (exam > set.exam || 0 > exam) {
        td_siblings[5].classList.add('bg-danger');
        error++;
       } else {
        td_siblings[5].classList.remove('bg-danger');
       }

       arr = {
        result_id: result_id,
        ca1: ca1,
        ca2: ca2,
        ca3: ca3,
        exam: exam
       }
       data.push(arr);
       total.push(ca1 + ca2 + ca3 + exam);
      });

      if (error > 0) {
       littleAlert(`There are ${error} errors in the score inputed, pls check and try again`, 1);
       return;
      }

      $.ajax({
       method: 'post',
       url: api_url + 'update/student/result/all',
       data: {
        data: data
       },
       beforeSend: () => {
        $('.save_change').attr('disabled', 'disabled');
        btnProcess('.save_all', '', 'before');
       }
      }).done(function(res) {
       littleAlert(res.message);
       $('.save_change').removeAttr('disabled');
       btnProcess('.save_all', '<i class="fas fa-save"></i> Save all changes', 'after');

       trs.map(row => {
        td_siblings = trs[row].children
        td_siblings[6].innerHTML = total[row];
       });

      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.save_all', '<i class="fas fa-save"></i> Save all changes', 'after');
       $('.save_change').removeAttr('disabled');
      })
     })
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