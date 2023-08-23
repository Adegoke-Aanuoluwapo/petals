<?php require("myclass.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="Lel6mIQGDjIStRoD1FNzRptF5gS7uqqj8tLFgWLp">
  <title> Fees Contol
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
              <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
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
                <h3 class="card-title ">
                  <i class="fa fa-plus-square" aria-hidden="true"></i>
                  Create Fee Category
                </h3>
              </div>
              <div class="card-body">
                <form method="POST">
                  <div class=" form-group">
                    <label>Fee Category</label>
                    <input type="text" name="fee_category" class="form-control" placeholder="School Fee">
                  </div>

                  <div class=" form-group">
                    <label>Fee Description</label>
                    <textarea name="description" class="form-control" col="2" placeholder="Describe fee category"></textarea>
                  </div>

                  <div class=" form-group">
                    <button class="btn btn-secondary float-right createFeeCategory " name="createfees">Create Fee Category</button>
                  </div>


                </form>
              </div>



            </div>
          </div>


          <div class="col-md-6 col-12">
            <div class="card card-secondary card-outline">
              <div class="card-header">
                <h3 class="card-title ">
                  <i class="fa fa-list-alt" aria-hidden="true"></i>
                  Fee Categories
                </h3>
              </div>
              <div class="card-body p-1">
                <div class="table-responsive">
                  <table class="table mb-0 table-bordered table-hover table-striped">
                    <thead>
                      <tr>
                        <th>Fee</th>
                        <th>Description</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody id="fee_list">
                      <?php $i = 1;
                      $sql = $con->query("SELECT * FROM fees");
                      while ($rows = mysqli_fetch_assoc($sql)) {

                      ?>
                        <tr>
                          <td><?= $rows['fee_category'] ?></td>
                          <td><?= $rows['description'] ?></td>
                          <td><button class="btn btn-xs btn-primary " data-target="#editFeeModal" data-toggle="modal"><i class="fas fa-edit " onclick="document.getElementById('cat').value='<?= $rows['fee_category'] ?>';document.getElementById('fee_id').value='<?= $rows['sn'] ?>' "></i></button></td>
                        </tr>
                      <?php  } ?>
                    </tbody>
                  </table>
                </div>
              </div>



            </div>
          </div>

        </div>
      </section>
      <div class="modal fade" id="editFeeModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title text-bold">Edit Fee Category </p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <form method='POST' id="updateFeeCategory">
                <div class=" form-group">
                  <label>Fee Category</label>
                  <input type="text" name="fee_category" id="cat" class="form-control" placeholder="School Fee">
                  <input type="hidden"  id='fee_id' name="sn">
                </div>

                <div class=" form-group">
                  <label>Fee Description</label>
                  <textarea name="description" class="form-control" col="2" id="desc" placeholder="Describe fee category"></textarea>
                </div>

                <div class=" form-group">
                  <button class="btn btn-secondary float-right updateFeeCategory " name="editfees">Update</button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>



      <!-- <script>
        $(function() {
          $.ajaxSetup({
            headers: {
              'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMGNkOWJiMTA0MjNkYjZiOThiMTBlNDZjODZhMWMzOTE1ZTBhMTk4NmZjYjYwZDcyZmMyMTE5YTA1MWFlNjI4OTlhMThkNjJhMTE1MTNhNzIiLCJpYXQiOjE2OTIwOTQ5NzAuNTc2MTE3LCJuYmYiOjE2OTIwOTQ5NzAuNTc2MTI2LCJleHAiOjE3MjM3MTczNzAuNTY2MjE0LCJzdWIiOiIyMCIsInNjb3BlcyI6W119.rVxGPkrbaXUcUxQc10m0nR1UbgPJRLk4zzMuYvNysSebVVAwCeriO7mubE34-_nkVcL7B4L6fAOoExvT-kHsgT4wHY9IwSN63Nk3z0Pk-VXYwEZI5DuzzbNQpqiW698t2LK0uc1g0BTKtWk4IJt4_ZfBtuvWmvh8eZi6vMrwY0nuVi6P477FxpDuEGYsMlx3rKKSIV-M3UShkpdL1l5IPym4pld007OUhAS4nqak259aKuQHO-8ZiCA-lu58VTYHv7HQlEcp__9ifwp8r46uXZlComrY-ECvevvm7GBCbhKBhX2XG1ZmyXD6Fu29Tj0wVSHFuZ8gBxrfI7P-zb_J3d_gYE0DDQ7gmN_jB3o6YsioeRiM6Pu1k6qTsdN4uX7D2JXsg3FMnmoyoUjy9BjP2uMGpnE7T5rVcNzE5EVdYE_yPFocfAag0doF1ZB0gMk3_4awJjvUbbJV8QWxu4moZa6wMwThWaEsdZxGsgLXDI_80pex57hhGZCZ2IMNIzTLIGgCS0YIq1usxLi0LwLX0LomTX0Tss5tYnx1BNURitClUABTEkCevxDrtMjr2eXDNVrs6-6IFCcE3e4dTYKxsww-Uy8K986KmFBFk6uCpweNMXsVyUDsAIf3JxbFlRHjSab50-Q86lqBwma1ioff0ilsY8gW0bg2vgx9oG-eSdk`
            }
          });


          $.ajax({
            method: 'get',
            url: api_url + `dashboard/param`
          }).done(function(res) {
            console.log(res);
            $('.students').html(res.students)
            $('.subjects').html(res.subjects)
            $('.staffs').html(res.staffs)
            $('.assigned_fee').html(moneyFormat(res.assigned_fee))
            $('.reveived_payment').html(moneyFormat(res.reveived_payment))
            $('.subject_teachers').html(res.subject_teachers)
            $('.guardians').html(res.guardians)

            body = $('.student_body')
            res.recently_registered.forEach(stu => {
              body.append(`
                        <li>
                            <img src="${api_url_root}${stu.photo}" alt="User Image">
                            <a class="users-list-name" href="/control/student/${stu.id}">${stu.surname + ' ' + stu.firstname}</a>
                            <span class="users-list-date">${stu.class.class}</span>
                        </li>
                    `)
            });


            labels2 = []
            data2 = []
            data3 = []

            res.pay_chart.forEach(p => {
              console.log(p);
              labels2.push(p.class.class)
              data2.push(p.payment)
              data3.push(p.fee)
            });

            console.log(labels2, data2);




            var areaChartData = {
              labels: labels2,
              datasets: [{
                  label: 'Payments',
                  backgroundColor: 'rgba(60,141,188,0.9)',
                  borderColor: 'rgba(60,141,188,0.8)',
                  pointRadius: false,
                  pointColor: '#3b8bba',
                  pointStrokeColor: 'rgba(60,141,188,1)',
                  pointHighlightFill: '#fff',
                  pointHighlightStroke: 'rgba(60,141,188,1)',
                  data: data2
                },
                {
                  label: 'Fees',
                  backgroundColor: 'rgba(210, 214, 222, 1)',
                  borderColor: 'rgba(210, 214, 222, 1)',
                  pointRadius: false,
                  pointColor: 'rgba(210, 214, 222, 1)',
                  pointStrokeColor: '#c1c7d1',
                  pointHighlightFill: '#fff',
                  pointHighlightStroke: 'rgba(220,220,220,1)',
                  data: data3
                },
              ]
            }

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = $.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
              responsive: true,
              maintainAspectRatio: false,
              datasetFill: false
            }

            new Chart(barChartCanvas, {
              type: 'bar',
              data: barChartData,
              options: barChartOptions
            })




          }).fail(function(res) {
            console.log(res);
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