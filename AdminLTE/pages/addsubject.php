<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="ljggAe7i4a5kLTUAj8avXcNNFD4T80thmG81l5Au">
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

  <!-- Preloader -->
  <?php include('nav.php'); ?>


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
         <h1 class="m-0">Subjects</h1>
        </div>
        <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
          <li class="breadcrumb-item active">Subjects</li>
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
          <h3 class="card-title">
           <i class="fas fa-plus-square"></i>
           Add Subject
          </h3>
         </div>
         <div class="card-body">
          <form action="" id="addSubject">
           <div class="form-group">
            <label>Subject</label>
            <input type="text" name="subject" class="form-control" placeholder="Enter Subject name i.e Mathematics, Biology">
           </div>
           <div class="form-group mb-0 float-right">
            <button class="btn btn-secondary addSubject">Add Subject</button>
           </div>
          </form>
         </div>
        </div>
       </div>

       <div class="col-md-6 col-12">
        <div class="card card-secondary card-outline">
         <div class="card-header">
          <h3 class="card-title">
           <i class="fa fa-list-alt" aria-hidden="true"></i>
           Subject List
          </h3>
         </div>
         <div class="card-body p-1">
          <div class="table-responsive">
           <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
            <thead>
             <tr>
              <th>Subject</th>
              <th></th>
             </tr>
            </thead>
            <tbody id="subject_list_body">
             <tr>
              <td colspan="12">
               <div class="text-center"> <span class="spinner-border spinner-border-sm" aria-hidden="true"></span> <i>Loading Subjects ...</i> </div>
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

     <div class="modal fade" id="editSubjectModal">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal">
       <div class="modal-content">
        <div class="modal-header">
         <p class="modal-title text-bold">Edit Subject (Subject)</p>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
         </button>
        </div>
        <div class="modal-body">
         <form action="" id="editSubjectForm">
          <div class="form-group">
           <label>Subject</label>
           <input type="text" name="subject" class="form-control" placeholder="Enter Subject name i.e Mathematics, Biology">
           <input type="hidden" name="subject_id">
          </div>
          <div class="form-group mb-0 float-right">
           <button class="btn btn-secondary" id="updateSubject">Update Subject</button>
          </div>
         </form>
        </div>

       </div>
      </div>
     </div>


     <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

     <script>
      $(function() {

       $.ajaxSetup({
        headers: {
         'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNGU3NjllMTRlYTdhMGYwZjAwNjE1MDY5NTQ1MjU0ZDdlZGIyNDlkMDYyMGE2NWI1NjE4NWQ4M2Y4ZWVjMWM5MzE3NjE3MmM0ZGFlMDY5ZGEiLCJpYXQiOjE2OTIwMDE1NTQuMjk4MTksIm5iZiI6MTY5MjAwMTU1NC4yOTgxOTgsImV4cCI6MTcyMzYyMzk1NC4yMzUyMjQsInN1YiI6IjIwIiwic2NvcGVzIjpbXX0.TvDlREkRLwyL9RQEnDvlkKbccLqw1aP_fzkC10jtxuouYgUrzbsQfrT71C-C_MQEtakfEkCt3TXKf0tF6o-IOdlAI_22Di7totsMY6UEeKtqTiRojjLoadITfkhIeqvHcAiakWzb3R9g9hC3_OdOT2zu8vQ6SNrSa5CWIIZ7-WPzQmazLu2aXaSi6KCDkZEUrcG4m_0S2XSEG1352-20MgLDiL7B4u6OhgxuMaQVex-6bg-6Tr6fS0Xkcz-SxuMgREbOJiVnBA-2zwcW0wPQTBk8ZmjL4LOd7jFAl-tvM7yKb6kuF4sbA3CB8GwUl01XoSVBt4A_KURIGAokuWDLWHxyZEcw2CddMrbaJJfRuJZiSIFAHhSRd3aQp6LPGSVStqnbt36VFKJW0Fti7wfh0FrjPaefBTJ4MgpY85f_QNZd8Aa6B2kTgmZ5QxroI-kXB4SN3PVcjmoytV0x4D6DY-1qvo5MUsT0fdW07t0bVn33TJufvVsZtqBuE1L5MeTHR54sTDuoZjz2XHKdxP20M56iqLAn5EFDQxrZNxuyGHGdzIsewl8hmVpAwYlPx2eo6k4uydjVc-7g_G97vARgrchlAU-JHSVsZi5J0SxlK4C5v3zysscH3sUghCJtbfXXPv9976hwwo5-rOvAkc9LY0LgpjcoKyy_wFTT7JcJzec`
        }
       });


       function fetchSubject() {
        $.ajax({
         method: 'get',
         url: api_url + 'get_all_subject',
        }).done(function(res) {
         body = $('#subject_list_body');
         body.html(``);
         res.data.map(sub => {
          body.append(`
                            <tr>
                                <td>${sub.subject}</td>
                                <td>
                                    <div class="float-right">
                                        <button class="btn btn-xs btn-primary editSubject" data-data='${JSON.stringify(sub)}'><i class="fas fa-edit"></i></button>
                                    </div>
                                </td>
                            </tr>
                        `)
         })
        }).fail(function(res) {
         console.log(res);
        })
       }

       fetchSubject()

       $('body').on('click', '.editSubject', function() {
        data = $(this).data('data');
        modal = $('#editSubjectModal')
        modal.modal('show');
        $(modal).find('input[name="subject"]').val(data.subject);
        $(modal).find('input[name="subject_id"]').val(data.id);
        $(modal).find('.modal-title').html(`Edit Subject (${data.subject})`);
       })


       $('#addSubject').on('submit', function(e) {
        e.preventDefault();
        form = $('#addSubject')
        subject = $(form).find('input[name="subject"]').val();
        if (!subject) {
         littleAlert('The subject field is required', 1);
         return;
        }

        $.ajax({
         method: 'post',
         url: api_url + 'create_subject',
         data: {
          subject: subject
         },
         beforeSend: () => {
          btnProcess('.addSubject', 'Add Subject', 'before');
         }
        }).done(function(res) {
         littleAlert(res.message);
         btnProcess('.addSubject', 'Add Subject', 'after');
         $('#subject_list_body').prepend(`
                        <tr>
                            <td>${subject}</td>
                            <td>
                                <div class="float-right">
                                    <button class="btn btn-xs btn-primary" disabled><i class="fas fa-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                    `);
         $("#addSubject")[0].reset();
         fetchSubject();
        }).fail(function(res) {
         parseError(res.responseJSON);
         btnProcess('.addSubject', 'Add Subject', 'after');
        })
       })


       $('#editSubjectForm').on('submit', function(e) {
        e.preventDefault();
        form = $('#editSubjectForm')
        subject = $(form).find('input[name="subject"]').val();
        subject_id = $(form).find('input[name="subject_id"]').val();
        if (!subject) {
         littleAlert('The subject field is required', 1);
         return
        }

        $.ajax({
         method: 'post',
         url: api_url + 'update_subject',
         data: {
          subject: subject,
          subject_id: subject_id
         },
         beforeSend: () => {
          btnProcess('#updateSubject', 'Update Subject', 'before');
         }
        }).done(function(res) {
         littleAlert(res.message);
         fetchSubject();
         $('#editSubjectModal').modal('hide');
         btnProcess('#updateSubject', 'Update Subject', 'after');
        }).fail(function(res) {
         parseError(res.responseJSON)
         btnProcess('#updateSubject', 'Update Subject', 'after');
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