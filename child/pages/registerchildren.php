<html>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Register children</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker-bs3.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="../plugins/iCheck/all.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="../plugins/colorpicker/bootstrap-colorpicker.min.css">
        <!-- Bootstrap time Picker -->
        <link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="../plugins/select2/select2.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
        <script src="jquery.min.js"></script>
        <!-- <script src="../plugins/jquery/jquery.min.js"></script> -->

</head>

<body class="skin-blue sidebar-mini">
        <div class="wrapper">
                <?php include("nav.php") ?>

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                        <!-- Content Header (Page header) -->
                        <section class="content-header">
                                <h1>
                                        Register Children

                                </h1>
                                <ol class="breadcrumb">
                                        <li><i class="fa fa-dashboard"></i> Setup</li>
                                        <li class=""> Akure</li>
                                        <li class="active">Futa</li>
                                        <li class="active">Alaba</li>
                                </ol>
                        </section>

                        <!-- Main content -->

                        <section class="content">

                                <div class="row">

                                        <div class="col-md-4 col-sm-12 col-xs-12" id="profile">
                                                <div class="box">
                                                        <div class="box-header">

                                                                <h3 class="box-title">REGISTER CHILD </h3>
                                                        </div>
                                                        <div class="panel-body">

















                                                                <form method="post">

                                                                        <p>
                                                                                <input name="surname" class="form-control" placeholder="Surname*" id="surname" required="">
                                                                        </p>

                                                                        <p>
                                                                                <input name="firstname" class="form-control" placeholder="First Name*" id="firstname" required="">
                                                                        </p>
                                                                        <p>
                                                                                <input name="othername" class="form-control" placeholder="Other Names" id="othername" required>
                                                                        </p>

                                                                        <p>
                                                                                <input name="familyname" class="form-control" placeholder="Family Name*" id="familyname" required="">
                                                                                <i><small>Should be the same for members of a family</small></i>
                                                                        </p>
                                                                        <p>
                                                                                <select name="gender" class="form-control select2 select2-hidden-accessible" required="" tabindex="-1" aria-hidden="true" id="sex">
                                                                                        <option selected="" disabled="" value="">SELECT GENDER...</option>
                                                                                        <option value="MALE">Male</option>
                                                                                        <option value="FEMALE">Female</option>
                                                                                </select>
                                                                        </p>


                                                                        <p><i>Date of Birth</i>
                                                                                <input name="birthdate" type="date" class="form-control" placeholder="Date of Birth*" id="birthdate" required="">
                                                                        </p>

                                                                        <p>
                                                                                <textarea name="address" class="form-control" placeholder="Detailed Residential Address*" id="address" rows="2" required=""></textarea>
                                                                        </p>

                                                                        <p>
                                                                                <textarea name="addressarea" class="form-control" id="addressarea" placeholder="Describe Area, Community, Bus Stop, Junction" rows="2"></textarea>
                                                                        </p>


                                                                        <p><input name="school" class="form-control" placeholder="School" id="school"></p>
                                                                        <p>
                                                                                <select name="class" class="form-control select2 select2-hidden-accessible" style="width: 100%" required="" tabindex="-1" aria-hidden="true" id="class">
                                                                                        <option selected="" disabled="" value="">SELECT CLASS...</option>
                                                                                        <option value="kg">PRE NUR</option>
                                                                                        <option value="nursery">NUR</option>
                                                                                        <option value="pry1">PRY 1</option>
                                                                                        <option value="pry2">PRY 2</option>
                                                                                        <option value="pry3">PRY 3</option>
                                                                                        <option value="pry4">PRY 4</option>
                                                                                        <option value="pry5">PRY 5</option>
                                                                                        <option value="pry6">PRY 6</option>

                                                                                        <option value="JSS1">JSS 1</option>
                                                                                        <option value="JSS2">JSS 2</option>
                                                                                        <option value="JSS3">JSS 3</option>


                                                                                </select>

                                                                        <p>

                                                                                <button type="button" onclick="registerChildren()" class="btn btn-warning" name="registerchild" style="width:100%">REGISTER CHILD</button>

                                                                        </p>


                                                                </form>

                                                        </div><!-- /.tab-content -->
                                                </div><!-- /.box -->


                                        </div>





                                        <div class="col-md-8 col-sm-12 col-xs-12">
                                                <div class="box">
                                                        <div class="box-header">
                                                                <h3 class="box-title">Recent Entries</h3>
                                                        </div><!-- /.box-header -->
                                                        <div class="box-body table-responsive">
                                                                <table class="table table-bordered ">
                                                                        <thead>
                                                                                <tr>

                                                                                        <th>SN</th>
                                                                                        <th>Full Names</th>

                                                                                        <th>Gender</th>
                                                                                        <th>Profile</th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody id="children">


                                                                        </tbody>

                                                                </table>
                                                        </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                        </div>

                                </div><!-- /.row -->

                                <!-- =========================================================== -->
                        </section>

                </div>
        </div>


        <script>
                function registerChildren() {
                        var surname = document.getElementById("surname").value;
                        var firstname = document.getElementById("firstname").value;
                        var othername = document.getElementById("othername").value;
                        var familyname = document.getElementById("familyname").value;
                        var sex = document.getElementById("sex").value;
                        var birthdate = document.getElementById("birthdate").value;
                        var address = document.getElementById("address").value;
                        var addressarea = document.getElementById("addressarea").value;
                        var school = document.getElementById("school").value;
                        var clas = document.getElementById("class").value;

                        $.ajax({
                                type: 'get',
                                url: 'myclass.php?surname=' + surname + '&firstname=' + firstname + '&othername=' + othername + '&familyname=' + familyname + '&sex=' + sex + '&birthdate=' + birthdate + '&address=' + address + '&addressarea=' + addressarea + '&school=' + school + '&class=' + clas + '&type=registerchild'

                        }).done(function(data) {
                                alert(data)
                                //  if (data == "teacher added succefully") {
                                //         alert("child added successfully")
                                // } else {
                                //  alert("Invalid input");
                                //  }

                        });










                }

                function children() {
                        $.ajax({
                                type: 'get',
                                url: 'myclass.php?type=children',
                        }).done(function(data) {
                               // console.log(data)
                                var children = JSON.parse(data)
                                for (i = 1; i < children.length; i++) {
                                        var surname = children[i].surname;
                                        var firstname = children[i].firstname;
                                        var othername = children[i].othername;
                                        var familyname = children[i].familyname;
                                        var school = children[i].school;
                                        var clas = children[i].class;
                                        $("#children").append('<tr><td>' + i + '</td><td>' + surname + ' ' + firstname + ' ' + othername + '</td><td>' + school + '</td><td>' + clas + '</td></tr>')
                                }
                        })
                }

                children();
        </script>