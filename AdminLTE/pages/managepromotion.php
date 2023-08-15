<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="Sj03h7sYEFwKe2F6jAHyUXev0PNTiWyP9ZWwMwaf">
 <title> Manage Promotions
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

 <?php include("nav.php")?>


  <div class="content-wrapper">
   <div class="littleAlert"></div>
   <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0">Manage Promotions</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Manage Promotions</li>
       </ol>
      </div>
     </div>
    </div>
   </div>


   <section class="content">
    <div class="row">
     <div class="col-md-5 col-12">
      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title ">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
         All Classes
        </h3>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <table class="table mb-0 table-bordered table-hover table-striped">
          <thead>
           <tr>
            <th>#</th>
            <th>Class</th>
            <th>Students</th>
            <th></th>
           </tr>
          </thead>
          <tbody id="class_body">
          </tbody>
         </table>
        </div>
       </div>
      </div>
     </div>

     <div class="col-md-7 col-12">
      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title text-bold">
         <i class="fa fa-users" aria-hidden="true"></i>
         <span class="student_body">Students</span>
        </h3>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <table class="table mb-0 table-bordered table-hover table-striped">
          <thead>
           <tr>
            <th>
             <div class="d-flex  justify-content-between">
              <div class="icheck-primary">
               <input type="checkbox" id="check_all" data-ck=0>
               <label for="check_all"></label>
              </div>
              #
             </div>
            </th>
            <th>Student</th>
            <th>Gender</th>
            <th></th>
           </tr>
          </thead>
          <tbody id="student_body">
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
<!-- 
   <script>
    $(function() {



     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDU2MzQ1MGQyMGY1ODlmMTcxNGFkNTkyNTUxOGM5ZjlmMTcyNmQyNzc1MGVjMjI0ZDAwOWQ5NjZlMjViZTAyZDM1ZTc2ODI4MDA3YTIzN2QiLCJpYXQiOjE2OTIwODQ4NDAuNDAxMjY4LCJuYmYiOjE2OTIwODQ4NDAuNDAxMjc3LCJleHAiOjE3MjM3MDcyNDAuMzU4MDcyLCJzdWIiOiIyMCIsInNjb3BlcyI6W119.lCs_mz-Qn3RUZeHSaQ7z8ajONGMdyQtvtsPgEE4vpSgJafBGOnUBA2PJq2575LD-PIUL2yUqtA7F2ERuZdLfmTljSdahTpWFa-yZsez1fE_3sIuTHM3qNDFuurbWN4-7JMy6yZIHkK8hINmcqlozU4r5FyCjvOO-cLY6rc9JGwdf8iuYavE2ewGRFoJgT0bkbz1ZmP50AlmLNw5DPbfrEPlgJeqpGj-0YQ-KokbHPzIheAFBKaAPZekvpTsPb0rZxtnSQGM-ND5Xzdlv04m4Uw186f3AwPtTke3g9reeWO2iXrGkyS6LvqP8xqbqMl0XBYZRPfKq8HZi0nzFgDFrT_1J9VipAlko7eto8zaP_S_Q_HtPWXwFuS_PnLFAiWHsbLaPnmsB_WX894MllDZeYO8C8b15ip_fSn1wrzQbC4vuzGeQFjQy81K938qrk-2VxDyUKLkg3p6Oag9hgkA5JW9Dok9MjKHFoCgPlWaLgrqavSX2yqZbB8k5sTsmpjBtM0DqFgaNOV9LezwZVeeucrRfYkAyLjux4NPWbn7KMeertrYGoi82muiwGYMb6oRWFbbaZUCqu3hbTCo9_0Dod3Etd-XACyfElDGWL9mUa2GoYx9IbaDLoDcZ33M9Jn2pG1F41tNM1Pw_M-Jhm9pnSF2-fa9jxrtzPHYeiKasMz0`
      }
     });


     cla_id = `0`

     function fetchClasses() {
      $.ajax({
       method: 'get',
       url: api_url + 'get_class'
      }).done(function(res) {
       console.log(res);
       body = $('#class_body');
       body.html(``)
       res.data.map((cla, index) => {
        body.append(`
                            <tr>
                                <td>${index+1}</td>
                                <td>${cla.class}</td>
                                <td>${cla.students}</td>
                                <td><a href="/control/managepromotion/${cla.id}">Manage</a></td>
                            </tr>
                        `)
       })
      }).fail(function(res) {
       console.log(res);
      })
     }

     fetchClasses();


     function fetchStudent() {
      if (cla_id == 0) {
       return;
      }
      $.ajax({
       method: 'get',
       url: api_url + `class_students/${cla_id}?page=1`
      }).done(function(res) {
       console.log(res);
       body = $('#student_body')
       body.html(``);

       $('.student_body').html(`Students (${res.class.class})`)

       res.data.data.map((stu, index) => {
        body.append(`
                            <tr>
                                <td class="text-center ">
                                    <div class="d-flex  justify-content-between">
                                        <div class="icheck-primary">
                                            <input type="checkbox" name="pick" value="${stu.id}" id="reg${index}">
                                            <label for="reg${index}"></label>
                                        </div>
                                        ${index+1}
                                    </div>
                                </td>
                                <td>${stu.surname+ ' ' + stu.firstname}</td>
                                <td>${stu.sex}</td>
                                <td>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-xs btn-success promote" data-id="${stu.id}">Promote</button>
                                    <button class="btn btn-xs btn-danger demote" data-id="${stu.id}">Demote</button>
                                <div>
                            </td>
                            </tr>
                        `)
       })


       body.append(`
                        <tr>
                            <td></td>
                            <th>With Selected </th>
                            <td colspan="2">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-success promote_all">Promote</button>
                                    <button class="btn btn-danger demote_all">Demote</button>
                                <div>
                            </td>
                        </tr>
                    `)



       $('#page_links').html(dropPaginatedPages(res.data.links));
      }).fail(function(res) {
       console.log(res);
      })
     }


     fetchStudent();


     $('body').on('click', '.promote_all', function() {
      perform('promote');
     })

     $('body').on('click', '.demote_all', function() {
      perform('demote');
     })



     $('#check_all').on('click', function() {
      val = $(this);
      val = val[0].checked;
      inputs = $('input[name="pick"]')
      inputs.map(inp => {
       inp = inputs[inp];
       inp.checked = val
      });


     })





     function perform(action) {
      url = (action == 'promote') ? 'promote_student' : 'demote_student';
      btn_id = (action == 'promote') ? '.promote_all' : '.demote_all';
      btn_text = (action == 'promote') ? 'Promote' : 'Demote';

      inputs = $('input[name="pick"]')
      data = [];
      inputs.map(inp => {
       inp = inputs[inp];
       if (inp.checked) {
        data.push(inp.value)
       }
      });
      $.ajax({
       method: 'post',
       url: api_url + `${url}`,
       data: {
        data: data
       },
       beforeSend: () => {
        btnProcess(btn_id, '', 'before')
        $('.btn').attr('disabled', 'disabled')
       }
      }).done(function(res) {
       littleAlert(res.message);
       fetchStudent();
       fetchClasses();
      }).fail(function(res) {
       parseError(res.responseJSON)
       btnProcess(btn_id, btn_text, 'after')
      })
     }



     $('body').on('click', '.promote', function() {
      btn = $(this)
      id = btn.data('id');
      btn.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>`);
      performSingle(id, 'promote')
     })


     $('body').on('click', '.demote', function() {
      btn = $(this)
      id = btn.data('id');
      btn.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span>`);
      performSingle(id, 'demote')
     })


     function performSingle(id, action) {
      url = (action == 'promote') ? 'promote_student' : 'demote_student';
      $.ajax({
       method: 'post',
       url: api_url + `${url}`,
       data: {
        data: [id]
       },
       beforeSend: () => {
        $('.btn').attr('disabled', 'disabled')
       }
      }).done(function(res) {
       littleAlert(res.message);
       fetchStudent();
       fetchClasses();
      }).fail(function(res) {
       parseError(res.responseJSON)
      })
     }




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