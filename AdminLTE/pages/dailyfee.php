<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="xJ0Dnex9A8BkkhE42oMC01Coy5hwpVgijyJ0PChF">
 <title>Daily Fee Transaction
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
       <h1 class="m-0">Daily Fee Transaction</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Daily Fee Transaction</li>
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
          <form action="" id="dateForm">
           <div class="form-group">
            <label>Select Day</label>
            <input type="date" name="date" class="form-control">
           </div>
           <div class="form-group">
            <button class="btn btn-secondary float-right">View Transaction</button>
           </div>
          </form>
         </div>
        </div>
       </div>
       <div>

       </div>
      </div>


      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title text-bold">
         <i class="fa fa-list-alt" aria-hidden="true"></i>
         <span id="dis_date">Payments</span>
        </h3>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
          <thead>
           <tr>
            <th>#</th>
            <th>Student</th>
            <th>Class</th>
            <th>Term</th>
            <th>Fee</th>
            <th>Amount</th>
            <th>Type</th>
            <th>Date</th>
            <th>By</th>
            <th></th>
           </tr>
          </thead>
          <tbody id="transact_body">
           <tr>
            <td colspan="12">
             <div class="text-center">
              <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
              <i> Loading Transactions ... </i>

             </div>
            </td>
           </tr>
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

     $('#dateForm').on('submit', function(e) {
      e.preventDefault();
      form = $(this);
      date = $(form).find('input[name="date"]').val();
      if (!date) {
       littleAlert('Please select a valid date', 1);
       return;
      }
      location.href = `/control/fee/daily/${date}`
      btnProcess('.dateForm', 'View Transaction', 'before');
     })


     function fetchTransaction() {
      $.ajax({
       method: 'get',
       url: api_url + `transaction/daily/2023-08-15?page=1`
      }).done(function(res) {
       console.log(res);
       createHistoryFeeBody(res);
      }).fail(function(res) {
       console.log(res);
      })
     }


     fetchTransaction();


     function createHistoryFeeBody(data) {
      body = $('#transact_body');
      body.html(``);
      $('#dis_date').html(`${data.date} Fee Transactions`)
      data.data.data.map((tran, index) => {
       amt = Math.abs(tran.total);
       body.append(`

                        <tr>
                            <td>${index+1}</td>
                            <td>${tran.student.surname+' '+tran.student.firstname}</td>
                            <td>${tran.class.class}</td>
                            <td>${term_text(tran.term.term)}</td>
                            <td>${(tran.fee_cat) ? tran.fee_cat.fee : 'General Payment'}</td>
                            <td>${moneyFormat(amt)}</td>
                            <td>${(tran.type == 5) ? `<div class="badge bg-success">Fee Payment</div>` : `<div class="badge bg-danger">School Fee</div>`}</td>
                            <td>${formatDate(tran.created_at)}</td>
                            <td>${tran.creator.name}</td>
                            <td><a href="#"> <i class="fa fa-print" aria-hidden="true"></i> Receipt</a></td>
                        </tr>
                    `)
      })

      $('#page_links').html(dropPaginatedPages(data.data.links));

     }
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

 <!-- 
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
</body>

</html>