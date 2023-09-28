   <?php
   require_once("myclass.php");


   ?>


   <!DOCTYPE html>
   <html lang="en">

   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="H6RKhZARStAVTjfKJkHuuMF8xPlpO2rzUkJSmaoC">
    <title> Student Profile
    </title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css" />
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="../../plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css" />
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

      <style>
       .comp {
        position: relative;
        width: max-content
       }

       .comp img {
        display: block;
       }

       .comp i {
        position: absolute;
        bottom: 10px;
        right: 10px;
       }
      </style>
      <div class="content-header">
       <div class="container-fluid">
        <div class="row mb-2">
         <div class="col-sm-6">
          <h1 class="m-0">Student Profile</h1>
         </div>
         <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
           <li class="breadcrumb-item active">Student Profile</li>
          </ol>
         </div>
        </div>
       </div>
      </div>



      <div class="tab-pane" id="result">

       <div class="card">
        <div class="card-header">
         <h3 class="card-title text-bold">Results</h3>
        </div>
        <div class="card-body p-1">
         <div class="table-responsive">
          <table class="table table-striped table-hover">
           <tbody>
            <tr>
             <th>#</th>
             <th>Session</th>
             <th>Term</th>
             <th>Class</th>
             <th>Subjects</th>
             <th>Date</th>
             <th></th>
            </tr>



            <tr>
             <td>1</td>
             <td>2022/2023</td>
             <td>First Term</td>
             <td>sss 1</td>
             <td>7</td>
             <td>16 Aug, 2022</td>
             <td><a class="btn btn-xs btn-info" href="/control/view-result/284"><i class="fas fa-eye"></i> View</a></td>
            </tr>



           </tbody>
          </table>
         </div>
        </div>
       </div>

       <p class="p-0 m-0" style="page-break-before: always">
       </p>
       <div class="card">
        <div class="card-body p-1" style="font-size: larger">
         <div style="border: solid thin #000" class="mb-1 p-2">
          <table class="" width="100%">
           <tbody>
            <tr>
             <th>
              <table width="100%">
               <tbody>
                <tr>
                 <td width="18%">
                  <img width="200" class="img-circle" src="https://apis.schoolpetal.com/assets/img/schools/8012145schoolpetal-international-school.jpg">
                 </td>
                 <td width="64%">
                  <div class="text-center">
                   <h1 style="font-size: 25px; font-weight:bold;" class="mb-0">
                    SchoolPetal International School</h1>
                   <p class="mb-0"> </p>
                   <h3 style="font-size: 20px;" class="mt-0">TERMLY CONTINOUS
                    ASSESSMENT DOSSIER <br>First Term, 2022/2023 ACADEMIC SESSION </h3>
                  </div>
                 </td>
                 <td width="18%">
                  <img width="200" class="img-circle float-right" src="https://apis.schoolpetal.com/assets/img/students/user.png">
                 </td>
                </tr>
               </tbody>
              </table>
             </th>
            </tr>

           </tbody>
          </table>
         </div>

         <table class="table table-bordered mb-1">
          <tbody>
           <tr>
            <td><b>FULL NAME:</b> Okolo Odinaka Bella </td>
            <td><b>REGISTRATION NO:</b> 250</td>
            <td><b>RESULT ID:</b> 284</td>
            <td><b>CLASS:</b> sss 1</td>
            <td><b>GENDER:</b> Male</td>
           </tr>
          </tbody>
         </table>

         <table class="table table-bordered mb-1">


          <tbody>
           <tr>
            <th>Subjects</th>
            <th>CA1</th>
            <th>CA2</th>
            <th>CA3</th>
            <th>Exam</th>
            <th>Total</th>
            <th>Class Av</th>
            <th>Grade</th>
            <th>Remark</th>
           </tr>


           <tr>
            <td style="padding: 20px;" class="center">JAVASCRIPT</td>
            <td class="center">7</td>
            <td class="center">10</td>
            <td class="center">13</td>
            <td class="center">47</td>
            <td class="center">77</td>

            <td class="center">68</td>
            <td class="center">A</td>
            <td class="center">Excellent</td>
           </tr>

           <tr>
            <td style="padding: 20px;" class="center">Data science</td>
            <td class="center">6</td>
            <td class="center">8</td>
            <td class="center">12</td>
            <td class="center">40</td>
            <td class="center">66</td>

            <td class="center">73</td>
            <td class="center">B</td>
            <td class="center">V. good</td>
           </tr>

           <tr>
            <td style="padding: 20px;" class="center">CSS</td>
            <td class="center">5</td>
            <td class="center">6</td>
            <td class="center">20</td>
            <td class="center">60</td>
            <td class="center">91</td>

            <td class="center">78</td>
            <td class="center">A</td>
            <td class="center">Excellent</td>
           </tr>

           <tr>
            <td style="padding: 20px;" class="center">design dynamics webpages</td>
            <td class="center">10</td>
            <td class="center">9</td>
            <td class="center">18</td>
            <td class="center">53</td>
            <td class="center">90</td>

            <td class="center">72</td>
            <td class="center">A</td>
            <td class="center">Excellent</td>
           </tr>

          </tbody>
         </table>

         <table class="table table-bordered">
          <tfoot>
           <tr>
            <th colspan="2">Subjects: 4</th>
            <th colspan="2">Total Score: 324</th>
            <th colspan="2">Average: 81</th>
            <th colspan="2">Class Average: </th>
            <th colspan="2">No in class: 20</th>
           </tr>
          </tfoot>
         </table>
         <table class="table table-bordered mt-1" width="100%">
          <tfoot>
           <tr>
            <th>
             <div class="row">
              <div class="col-md-12">
               <div class="row">
                <div class="col-6">
                 <b>Vacation Date: </b><span style="font-weight: lighter">30 Nov, 2022</span>
                </div>
                <div class="col-6">
                 <b>Resumption Date: </b><span style="font-weight: lighter">9 Jan, 2023</span>
                </div>
               </div>
              </div>


              <div class="col-md-12">
               <div class="row">
                <div class="col-6">
                 <b>Teacher's Comment:</b><br>
                 <span style="font-weight: lighter" class="t_rem">
                  null
                 </span>
                </div>
                <div class="col-6">
                 <b>Principal's Comment: </b><br>
                 <span style="font-weight: lighter" class="p_rem">
                  null
                 </span>
                </div>

               </div>
              </div>
             </div>
            </th>
           </tr>
          </tfoot>
         </table>
         <div class="row">
          <div class="col-12 hide-print mt-3">
           <a href="/control/result/print/s/284" target="_blank" class="btn btn-info float-right">Print</a>
           <button class="btn btn-secondary float-right mr-2 up_rem" data-data="{&quot;id&quot;:284,&quot;name&quot;:&quot;Okolo Odinaka Bella  &quot;,&quot;p_rem&quot;:null,&quot;t_rem&quot;:null}">Update Remarks</button>
          </div>
         </div>
        </div>
       </div>
       <p></p>
      </div>
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