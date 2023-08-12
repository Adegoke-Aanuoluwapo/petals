<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>All Staff</title>

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
</head>

<body class="hold-transition sidebar-mini">
 <div class="wrapper">
  <section class="content">
   <div class="container-fluid">
    <div class="row">
     <div class="col-12">
      <div class="card">
       <div class="card-header">
        <h3 class="card-title">Staff List</h3>
        <button style="margin-left:1200px" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#addStaffModal">
         Add Staff
        </button>
       </div>
       <!-- /.card-header -->
       <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
         <thead>
          <tr>
           <th>Name</th>
           <th>Email</th>
           <th>Phone</th>
           <th>Role</th>
           
          </tr>
         </thead>
         <tbody>
          <tr>
           <td>Trident</td>
           <td>Internet
            Explorer 4.0
           </td>
           <td>Win 95+</td>
           <td> 4</td>
           <td>X</td>
          </tr>
      

         </tbody>
         <tfoot>
          <tr>
           <th>Rendering engine</th>
           <th>Browser</th>
           <th>Platform(s)</th>
           <th>Engine version</th>
           <th>CSS grade</th>
          </tr>
         </tfoot>
        </table>
       </div>
       <!-- /.card-body -->
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
      <form action="" class="row" id="addStaffForm">
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
        <button type="submit" class="btn btn-secondary float-right addStaff ">Add Staff</button>
       </div>
      </form>
     </div>

    </div>
   </div>
  </div>



  <footer class="main-footer">
   <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.2.0
   </div>
   <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="../../plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="../../plugins/jszip/jszip.min.js"></script>
 <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
 <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
 <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <!-- AdminLTE App -->
 <script src="../../dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="../../dist/js/demo.js"></script>
 <!-- Page specific script -->
 <script>
  $(function() {
   $("#example1").DataTable({
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
   }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
   });
  });
 </script>
</body>

</html>