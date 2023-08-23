<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="Sj03h7sYEFwKe2F6jAHyUXev0PNTiWyP9ZWwMwaf">
    <title>Permission Settings
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

        <?php include("nav.php") ?>


        <div class="content-wrapper">
            <div class="littleAlert"></div>
            <link rel="stylesheet" href="https://portal.schoolpetal.com/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">


            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Permission</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                                <li class="breadcrumb-item active">Permission</li>
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
                                <h3 class="card-title ">
                                    <i class="fas fa-edit"></i>
                                    Edit Staff Permissions
                                </h3>
                            </div>
                            <div class="card-body p-1">
                                <div class="table-responsive">
                                    <table id="example1" class="table mb-0 table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>sn</th>
                                                <th>Staff</th>
                                                <th class="text-center">Reg Mgm</th>
                                                <th class="text-center">Fee Mgm</th>
                                                <th class="text-center">Result</th>
                                                <th class="text-center">Other</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="user_body_list">
                                            <?php $i = 1;
                                            $sql = $con->query("SELECT * FROM staff");
                                            while ($rows = mysqli_fetch_assoc($sql)) { ?>
                                                <tr>
                                                    <td></td>
                                                </tr>
                                            <?php   }
                                            ?>


                                        </tbody>
                                    </table>
                                </div>

                                <div id="page_links" style="color: rgb(36, 35, 32)">

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section>




            <!-- <script src="https://portal.schoolpetal.com/assets/plugins/jquery/jquery.min.js"></script>

   <script>
    $(function() {

     $.ajaxSetup({
      headers: {
       'Authorization': `Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZDU2MzQ1MGQyMGY1ODlmMTcxNGFkNTkyNTUxOGM5ZjlmMTcyNmQyNzc1MGVjMjI0ZDAwOWQ5NjZlMjViZTAyZDM1ZTc2ODI4MDA3YTIzN2QiLCJpYXQiOjE2OTIwODQ4NDAuNDAxMjY4LCJuYmYiOjE2OTIwODQ4NDAuNDAxMjc3LCJleHAiOjE3MjM3MDcyNDAuMzU4MDcyLCJzdWIiOiIyMCIsInNjb3BlcyI6W119.lCs_mz-Qn3RUZeHSaQ7z8ajONGMdyQtvtsPgEE4vpSgJafBGOnUBA2PJq2575LD-PIUL2yUqtA7F2ERuZdLfmTljSdahTpWFa-yZsez1fE_3sIuTHM3qNDFuurbWN4-7JMy6yZIHkK8hINmcqlozU4r5FyCjvOO-cLY6rc9JGwdf8iuYavE2ewGRFoJgT0bkbz1ZmP50AlmLNw5DPbfrEPlgJeqpGj-0YQ-KokbHPzIheAFBKaAPZekvpTsPb0rZxtnSQGM-ND5Xzdlv04m4Uw186f3AwPtTke3g9reeWO2iXrGkyS6LvqP8xqbqMl0XBYZRPfKq8HZi0nzFgDFrT_1J9VipAlko7eto8zaP_S_Q_HtPWXwFuS_PnLFAiWHsbLaPnmsB_WX894MllDZeYO8C8b15ip_fSn1wrzQbC4vuzGeQFjQy81K938qrk-2VxDyUKLkg3p6Oag9hgkA5JW9Dok9MjKHFoCgPlWaLgrqavSX2yqZbB8k5sTsmpjBtM0DqFgaNOV9LezwZVeeucrRfYkAyLjux4NPWbn7KMeertrYGoi82muiwGYMb6oRWFbbaZUCqu3hbTCo9_0Dod3Etd-XACyfElDGWL9mUa2GoYx9IbaDLoDcZ33M9Jn2pG1F41tNM1Pw_M-Jhm9pnSF2-fa9jxrtzPHYeiKasMz0`
      }
     });





     function pullPermission() {
      $.ajax({
       method: 'get',
       url: api_url + `users/permission?page=1`
      }).done(function(res) {
       body = $('#user_body_list')
       body.html(``)
       res.data.data.map((user, index) => {
        body.append(`
                            <tr class="single">
                                <td class="align-middle">${index+1}</td>
                                <td class="align-middle" >${user.name} (${staff_role(user.role)})</td>
                                <td class="text-center">
                                    <input type="hidden" name="permission_id" value="${user.permission.id}" >
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="reg" value="${(user.permission.registration == 1) ? 1 : 0}" ${(user.permission.registration == 1) ? 'checked' :''} id="reg${index}">
                                        <label for="reg${index}" data-id="reg${index}" ></label>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="fee" value="${(user.permission.fee == 1) ? 1 : 0}" ${(user.permission.fee == 1) ? 'checked' :''} id="fee${index}">
                                        <label for="fee${index}" data-id="fee${index}" ></label>
                                    </div>
                                </td>
                                <td class="text-center">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="result" value="${(user.permission.u_result == 1) ? 1 : 0}" ${(user.permission.u_result == 1) ? 'checked' :''} id="u_result${index}">
                                        <label for="u_result${index}" data-id="u_result${index}"></label>
                                    </div>
                                </td>

                                <td class="text-center">
                                    <div class="icheck-primary">
                                        <input type="checkbox" name="other" value="${(user.permission.other == 1) ? 1 : 0}" ${(user.permission.other == 1) ? 'checked' :''} id="other${index}">
                                        <label for="other${index}" data-id="other${index}"></label>
                                    </div>
                                </td>

                                <td class="align-middle"><button class="btn btn-xs btn-success save_change float-right"><i class="fas fa-save"></i> Save</button></td>


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
      }).fail(function(res) {})
     }
     pullPermission();


     $('body').on('click', '.save_change', function() {
      btn = $(this);
      parent_td = btn.parent();
      parent_siblings = parent_td.siblings()
      ///extracting the registration permssion value and the permssion id
      reg_parent = parent_siblings[2].children;
      permission_id = reg_parent[0].value;
      reg_per = reg_parent[1].children[0].value;
      //extracting the fee permission id
      fee_per = parent_siblings[3].children[0].children[0].value;
      result_per = parent_siblings[4].children[0].children[0].value;
      other_per = parent_siblings[5].children[0].children[0].value;
      $.ajax({
       method: 'post',
       url: api_url + 'permission/update',
       data: {
        permission_id: permission_id,
        registration: reg_per,
        result: result_per,
        fee: fee_per,
        other: other_per
       },
       beforeSend: () => {
        $('.save_change').attr('disabled', 'diabled');
        btn.html(`<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> ...`)
       }
      }).done(function(res) {
       littleAlert(res.message);
       $('.save_change').removeAttr('disabled');
       btn.html(`<i class="fas fa-save"></i> Save`)
      }).fail(function(res) {
       parseError(res.responseJSON);
       $('.save_change').removeAttr('disabled');
       btn.html(`<i class="fas fa-save"></i> Save`)
      })
     })


     $('body').on('click', 'label', function() {
      label = $(this).data('id');
      inp = $(`#${label}`);
      new_val = (inp.val() == 0) ? 1 : 0;
      inp.val(new_val);
     })


     $('body').on('click', '.save_all', function() {
      trs = $('.single')
      data = [];
      trs.map(row => {
       parent = trs[row].children

       reg_parent = parent[2].children;
       permission_id = reg_parent[0].value;
       reg_per = reg_parent[1].children[0].value;
       //extracting the fee permission id
       fee_per = parent[3].children[0].children[0].value;
       result_per = parent[4].children[0].children[0].value;
       other_per = parent[5].children[0].children[0].value;

       arr = {
        permission_id: permission_id,
        registration: reg_per,
        fee: fee_per,
        result: result_per,
        other: other_per
       }
       data.push(arr)
      });

      $.ajax({
       method: 'post',
       url: api_url + 'permission/update_all',
       data: {
        data: data
       },
       beforeSend: () => {
        $('.save_change').attr('disabled', 'diabled');
        btnProcess('.save_all', '', 'before')
       }
      }).done(function(res) {
       littleAlert(res.message);
       btnProcess('.save_all', '<i class="fas fa-save"></i> Save all changes', 'after')
       $('.save_change').removeAttr('disabled');
      }).fail(function(res) {
       parseError(res.responseJSON)
       btnProcess('.save_all', '<i class="fas fa-save"></i> Save all changes', 'after')
       $('.save_change').removeAttr('disabled');
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