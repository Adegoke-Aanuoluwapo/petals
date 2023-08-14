<?php
include("myclass.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="csrf-token" content="ljggAe7i4a5kLTUAj8avXcNNFD4T80thmG81l5Au">
 <title>Add Staff
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




  <div class="content-wrapper">
   <div class="littleAlert"></div>

   <div class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1 class="m-0">Add Staff</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Add Staff</li>
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
          Staff List
         </h3>
         <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#addStaffModal"> Add Staff</button>
        </div>
       </div>
       <div class="card-body p-1">
        <div class="table-responsive">
         <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
          <thead>
           <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th></th>
           </tr>
          </thead>
          <tbody>
           <?php
           $i = 1;
           $sql = $con->query("SELECT * FROM staff");
           while ($rows = mysqli_fetch_assoc($sql)) { ?>
            <tr>
             <td><?= $i++ ?></td>
             <td><?= $rows['name'] ?></td>
             <td><?= $rows['email'] ?></td>
             <td><?= $rows['phone'] ?></td>
             <td><?= $rows['role'] ?></td>
            </tr>

           <?php } ?>



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


   <div class="modal fade" id="addStaffModal">
    <div class="modal-dialog modal-dialog-centered">
     <div class="modal-content">
      <div class="modal-header">
       <p class="modal-title text-bold">Add Staff </p>
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
       </button>
      </div>
      <div class="modal-body">
       <form method="POST" class="row" id="addStaffForm">
        <div class="col-md-6 form-group">
         <label>Name</label>
         <input type="text" name="name" class="form-control" placeholder="Thomas Gideon">
        </div>

        <div class="col-md-6 form-group">
         <label>Email</label>
         <input type="email" name="email" class="form-control" placeholder="staff@schoolpetal.com">
        </div>

        <div class="col-md-6 form-group">
         <label>Phone</label>
         <input type="text" name="phone" class="form-control" placeholder="09000000000">
        </div>

        <div class="col-md-6 form-group">
         <label>Role</label>
         <select name="role" class="form-control select2bs4" style="width: 100%;">
          <option selected disabled>Select Role</option>
          <option value="8">Accountant</option>
          <option value="9">Administrator</option>
          <option value="7">Teacher</option>
         </select>
        </div>
        <div class="col-12 form-group">
         <button type="submit" class="btn btn-secondary float-right addStaff " name="addstaff">Add Staff</button>
        </div>
       </form>
      </div>

     </div>
    </div>
   </div>



   <!-- <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script> -->


   <!-- <script>
    $(function() {
     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNGU3NjllMTRlYTdhMGYwZjAwNjE1MDY5NTQ1MjU0ZDdlZGIyNDlkMDYyMGE2NWI1NjE4NWQ4M2Y4ZWVjMWM5MzE3NjE3MmM0ZGFlMDY5ZGEiLCJpYXQiOjE2OTIwMDE1NTQuMjk4MTksIm5iZiI6MTY5MjAwMTU1NC4yOTgxOTgsImV4cCI6MTcyMzYyMzk1NC4yMzUyMjQsInN1YiI6IjIwIiwic2NvcGVzIjpbXX0.TvDlREkRLwyL9RQEnDvlkKbccLqw1aP_fzkC10jtxuouYgUrzbsQfrT71C-C_MQEtakfEkCt3TXKf0tF6o-IOdlAI_22Di7totsMY6UEeKtqTiRojjLoadITfkhIeqvHcAiakWzb3R9g9hC3_OdOT2zu8vQ6SNrSa5CWIIZ7-WPzQmazLu2aXaSi6KCDkZEUrcG4m_0S2XSEG1352-20MgLDiL7B4u6OhgxuMaQVex-6bg-6Tr6fS0Xkcz-SxuMgREbOJiVnBA-2zwcW0wPQTBk8ZmjL4LOd7jFAl-tvM7yKb6kuF4sbA3CB8GwUl01XoSVBt4A_KURIGAokuWDLWHxyZEcw2CddMrbaJJfRuJZiSIFAHhSRd3aQp6LPGSVStqnbt36VFKJW0Fti7wfh0FrjPaefBTJ4MgpY85f_QNZd8Aa6B2kTgmZ5QxroI-kXB4SN3PVcjmoytV0x4D6DY-1qvo5MUsT0fdW07t0bVn33TJufvVsZtqBuE1L5MeTHR54sTDuoZjz2XHKdxP20M56iqLAn5EFDQxrZNxuyGHGdzIsewl8hmVpAwYlPx2eo6k4uydjVc-7g_G97vARgrchlAU-JHSVsZi5J0SxlK4C5v3zysscH3sUghCJtbfXXPv9976hwwo5-rOvAkc9LY0LgpjcoKyy_wFTT7JcJzec`
      }
     });


     function fetchStaffSummaryInfo() {
      page = '1'
      $.ajax({
       method: 'get',
       url: api_url + 'get_all_staffs?page=' + page
      }).done(function(res) {
       body = $('#staff_list_body')
       body.html(``);


       res.data.data.map((staff, index) => {
        body.append(`
                            <tr>
                                <td>${(index + 1) + ((page-1) * 100)}</td>
                                <td>${staff.name}</td>
                                <td>${staff.email}</td>
                                <td>${staff.phone}</td>
                                <td>${staff_role(staff.role)}</td>
                                <td>
                                    <div class="float-right">
                                        <a href="/control/staff_profile/${staff.id}" > Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a>
                                    </div>
                                </td>
                            </tr>
                        `);
       })

       link_body = $('#page_links')
       link_body.html(dropPaginatedPages(res.data.links));



      }).fail(function(res) {
       console.log(res);
      });
     }


     fetchStaffSummaryInfo();


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
       "responsive": true,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
     }, 2500);


     $('#addStaffForm').on('submit', function(e) {
      e.preventDefault();
      form = $(this)

      name = $(form).find('input[name="name"]').val();
      email = $(form).find('input[name="email"]').val();
      phone = $(form).find('input[name="phone"]').val();
      role = $(form).find('select[name="role"]').val();

      if (!email || !phone || !name || !role) {
       littleAlert('All fields are required', 1);
       return
      }

      $.ajax({
       method: 'post',
       url: api_url + 'add_staff',
       data: {
        name: name,
        email: email,
        phone: phone,
        role: role
       },
       beforeSend: () => {
        btnProcess('.addStaff', 'Add Staff', 'before');
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.addStaff', 'Add Staff', 'after');
       form[0].reset();
       $('#addStaffModal').modal('hide');
       fetchStaffSummaryInfo();
      }).fail(function(res) {
       parseError(res.responseJSON);
       btnProcess('.addStaff', 'Add Staff', 'after');
      });


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

 <script> -->
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