<?php require("myclass.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">

 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>
  Class Profile
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

<body class="sidebar-mini layout-fixed sidebar-closed sidebar-collapse" style="height: auto;">
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
  <?php require("nav.php") ?>

  <div class="content-wrapper" style="min-height: 351px;">
   <div class="littleAlert"></div>

   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0 class_name">Class Profile (sss 3)</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Class Profile</li>
       </ol>
      </div>
     </div>
    </div>
   </div>


   <section class="content">
    <div class="row">
     <div class="col-lg-3 col-6">
      <div class="small-box bg-secondary">
       <div class="inner">
        <h3 class="students">6</h3>

        <p>Students</p>
       </div>
       <div class="icon">
        <i class="ion ion-bag"></i>
       </div>
       <a href="#" class="small-box-footer">See All <i class="fas fa-arrow-circle-right"></i></a>
      </div>
     </div>
     <div class="col-lg-3 col-6">
      <div class="small-box bg-secondary">
       <div class="inner">
        <h3 class="t_fee">₦ 0</h3>

        <p>Assigned Fee</p>
       </div>
       <div class="icon">
        <i class="ion ion-stats-bars"></i>
       </div>
       <a href="/control/class/fee/18" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
     </div>
     <div class="col-lg-3 col-6">
      <div class="small-box bg-secondary">
       <div class="inner">
        <h3 class="t_pay">₦ 0</h3>
        <p>Reveived Payments</p>
       </div>
       <div class="icon">
        <i class="ion ion-person-add"></i>
       </div>
       <a href="/control/class/payments/18" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
     </div>
     <div class="col-lg-3 col-6">
      <div class="small-box bg-secondary">
       <div class="inner">
        <h3 class="teachers">10</h3>

        <p>Subject Teachers</p>
       </div>
       <div class="icon">
        <i class="ion ion-pie-graph"></i>
       </div>
       <a href="/control/class/teachers/18" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
     </div>
    </div>


    <div class="row">
     <div class="col-md-12 col-12">
      <div class="card card-secondary card-outline">
       <div class="card-header">
        <h3 class="card-title student_list "><i class="fa fa-list-alt" aria-hidden="true"></i> sss 3 Students</h3>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
          <thead>
           <tr>
            <th>sn</th>
            <th>Name</th>
            <th>Arm</th>
            <th>Gender</th>
            <th>Added</th>
            <th>Status</th>
            <th></th>
           </tr>
          </thead>
          <tbody id="student_list">
           <?php $i =1;
           $sql = $con->query("SELECT * FROM students ");
           while ($rows = mysqli_fetch_assoc($sql)) {  ?>
            <tr>
             <td><?= $i++ ?></td>
             <td><?= $rows['surname']. ' '. $rows['firstname'] ?></td>
             <td><?= $rows['arm'] ?></td>
             <td><?= $rows['gender'] ?></td>
             <td><?= $rows['created'] ?></td>
             <td>
              <div class="badge bg-success">Active</div>
             </td>
             <td>
              <div class="float-right">
               <a href="studentprofile.php?sn=<?= $rows['sn'] ?>"> Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a>
              </div>
             </td>
            </tr>

           <?php   } ?>


          </tbody>
         </table>
        </div>
        <div id="page_links"></div>
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
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZjE1OTc3MDc4YmJiYzljYTM5MzlkZjRhNmFjODI0MGJiM2ViMTNjNzI5Y2YxMTRjNDAwZWY4N2E0MGQ5OTQ3MjhmMWY2ZTY4YTlmZWRhZWIiLCJpYXQiOjE2OTI2MTYyNTEuNDQ2NzYxLCJuYmYiOjE2OTI2MTYyNTEuNDQ2NzY4LCJleHAiOjE3MjQyMzg2NTEuNDM3ODUzLCJzdWIiOiIyMCIsInNjb3BlcyI6W119.eUmXorboi-xTOv2gKTdShypU1pjVx2uW9iyg5K6EAkNxAvzoWIr8S_G1HSIE1bOK2UweSSdTi0kSTDcWXqb62_0mvPF2vFUErQhQ_FaH48TnRObzHxvfoCiYw3_AG_XP4DIf-qVyCiDsejrIsT0-nq2_C9sI7Pxs6Oo9-vNzNv9j2jfCW1lgwsi2GObaBOi4E1xgpVByr3WSuyZlyGhoszVC8I24cCD2R-RtB2lT7VmbeWZKz7m5izCj3qoID8x0v-HTvvaXOMWc1H_1bHvArSUXJiPgfVL_axEGtUMvRrqesvc-OSllT5HEz72R75FFDQhVpSLsbw5GwxieG9gfMHaUOOpfvRTax4j6TZazOLRpaW-caUQHscba2DtMTnzg7TE-5LfkrcLYdttjKire0fH1EvZ1IUqFDxkgDAgwsw60315NR5oP2_kUK1OanHTLZyfsNYclw_SuKFnhO0IJ9nox4ddGk-nSMIJA_SGt6GAONe3lJqwVFUYBVTFZnJxOHNneJFzG2WbxW5babnuXalVOoloU3F1AjXrrYu6D6GY2VG4ghHOP7BjAxUc3Lv58etgg1eb3cPied1cNHyXT90jSLiUeYqRSYWv26ROb_sJd6j-mRIBRq9xGPGFu36wIk4sbc4zQd-lh38d8KzJpKaLTU-rPDeggaTiI72BWs8w`
      }
     });

     const class_id = `18`

     function fetchClassSummary() {
      $.ajax({
       method: 'get',
       url: api_url + 'class_summary/' + class_id
      }).done(function(res) {
       data = res.data;
       $('.class_name').html(`Class Profile (${res.data.class.class})`)
       $('.students').html(data.students)
       $('.teachers').html(data.teachers);
       $('.t_fee').html(moneyFormat(Math.abs(data.fee)));
       $('.t_pay').html(moneyFormat(data.pay));
       $('.student_list').html(`<i class="fa fa-list-alt" aria-hidden="true"></i> ${data.class.class} Students`);
      }).fail(function(res) {
       if (res.status == 404) {
        littleAlert('This class does not exist', 1);
        setTimeout(() => {
         location.href = "/control/create_class"
        }, 2000);
       }
      })
     }

     fetchClassSummary();

     function students(class_id) {
      $.ajax({
       method: 'get',
       url: api_url + 'class_students/' + class_id + '?page=' + `0`
      }).done(function(res) {
       console.log(res);

       body = $('#student_list')
       body.html(``);
       res.data.data.map((stu, index) => {
        status = (stu.status == 1) ? '<div class="badge bg-success">Active</div>' : '<div class="badge bg-danger">Not Active</div>';
        body.append(`
                            <tr>
                                <td>${index+1}</td>
                                <td>${stu.surname + ' '+ stu.firstname}</td>
                                <td>${(stu.arm)? stu.arm.arm :''}</td>
                                <td>${stu.sex}</td>
                                <td>${formatDate(stu.created_at)}</td>
                                <td>${status}</td>
                                <td>
                                    <div class="float-right">
                                        <a href="/control/student/${stu.id}" > Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        `)
       })

       links = res.data.links;
       $('#page_links').html(dropPaginatedPages(res.data.links));
      }).fail(function(res) {
       console.log(res);
      })
     }

     students(class_id);
    })
   </script>



  </div>

  <footer class="main-footer">
   <strong>Copyright © <b>School Petal</b> </strong>
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



 <div id="sidebar-overlay"></div>
 </div>
</body>

</html>