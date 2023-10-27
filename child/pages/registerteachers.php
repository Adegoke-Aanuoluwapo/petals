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
    <?php
    include("nav.php");
    ?>




    <div class="content-wrapper">
      <div class="littleAlert"></div>

      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Add Teachers</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/control/dashboard">Home</a></li>
                <li class="breadcrumb-item active">Add Teachers</li>
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
                  <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#addStaffModal"> Add Teachers</button>
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
                    <tbody id="teacher">

                      <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>

                          <div class="float-right">
                            <a href="staffprofile.php?sn="> Profile <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> </a>
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


      <div class="modal fade" id="addStaffModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title text-bold">Add Children Teachers </p>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" class="row">

                <div class="col-md-6 form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name" required>
                </div>


                <div class="col-md-6 form-group">
                  <label>District</label>
                  <input type="text" name="district" class="form-control" placeholder="Alaba" id="district" required>
                </div>
                <div class="col-md-6 form-group">
                  <label>Phone</label>
                  <input type="text" name="phone" class="form-control" placeholder="09000000000" id="phone" required>
                </div>
                <div class="col-md-6 form-group">
                  <label>Role</label>
                  <select name="role" class="form-control select2bs4" style="width: 100%;" id="role">
                    <option selected disabled>Select Role</option>
                    <option value="8">Group Cordinator</option>
                    <option value="9">District Coordinator</option>
                    <option value="7">Teacher</option>
                  </select>
                </div>
                <div class="col-md-6 form-group">
                  <label>Group</label>

                  <input name="group" class="form-control" placeholder="Futa" id="grdistrict" required>

                </div>
                <div class="col-md-6 form-group">
                  <label>Region</label>

                  <input name="region" class="form-control" placeholder="Akure" id="region" required>

                </div>



                <div class="col-12 form-group">
                  <button type="button" class="btn btn-secondary float-right addStaff " name="addteacher" onclick="addTeachers()">Add Teacher</button>
                </div>
              </form>
              <span id="output"></span>
            </div>


          </div>
        </div>
      </div>





    </div>

    <?php
    include("footer.php")
    ?>

    <script src="jquery.min.js"></script>

    <script>
      function addTeachers() {
        var name = document.getElementById("name").value;
        var district = document.getElementById("district").value;
        var phone = document.getElementById("phone").value;
        var role = document.getElementById("role").value;
        var grdistrict = document.getElementById("grdistrict").value;
        var region = document.getElementById("region").value;

        $.ajax({
          type: 'get',
          url: 'myclass.php?name=' + name + '&district=' + district + '&phone=' + phone + '&role=' + role + '&grdistrict=' + grdistrict + '&region=' + region + '&type=addteacher'

        }).done(function(data) {
          alert(data)
          // if (data == "teacher added succefully") {
          //  window.location.replace('index.php');
          // } else {
          //  alert("Invalid login");
          // }

        });


      }

      function teachers() {
        $.ajax({
          type: "get",
          url: "myclass.php?type=teacher",
        }).done(function(data) {
          console.log(data)
          var teachers = JSON.parse(data);
          
          for (var a = 0; a < teachers.length; a++) {
            var name = teachers[a].name;
            var district = teachers[a].district;
            var grdistrict = teachers[a].grdistrict
            var phone = teachers[a].phone;
            var role = teachers[a].role;
            var region = teachers[a].region;

            //appending at html
            $("#teacher").append('<tr><td>' + name + '</td><td>' + district + '</td><td>' + grdistrict + '</td><td>' + phone + '</td><td>' + role + '</td><td>' + region + '</td><tr>');
          }
        })
      }

  teachers();
      //$("#teacher").html();
    </script>