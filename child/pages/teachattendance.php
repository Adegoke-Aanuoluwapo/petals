<?php

session_start();
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

<body class="hold-transition sidebar-mini layout-fixed skin-blue">
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
       <h1 class="m-0">Add Report</h1>
      </div>
      <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="/control/dashboard"></a></li>
        <li class="breadcrumb-item active">Report</li>
       </ol>
      </div>
     </div>
    </div>
   </div>

   <section class="content">

    <div class="row">

     <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="box">
       <div class="box-header">
        <h3 class="box-title">MARK ATTENDANCE </h3>
        <h3 class="box-title"> </h3>
       </div>
       <div class="panel-body">
        <form method="post">
         <p>
          <select name="date" class="form-control select2 select2-hidden-accessible" onchange="submit()" tabindex="-1" aria-hidden="true">


           <option value="">SELECT DATE</option>

           <option value="231111" selected="">11-Nov-2023</option>

           <option value="231104">04-Nov-2023</option>
          </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 313px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-date-lu-container"><span class="select2-selection__rendered" id="select2-date-lu-container" title="11-Nov-2023">11-Nov-2023</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
         </p>
        </form>

        <p></p>





        <form method="post">
         <table width="100%" class="table">

          <tbody>
           <tr>
            <th>Tick</th>
            <th>Name</th>
            <th>District</th>
           </tr>
           <tr>
            <td><input type="checkbox" name="present[]" style="width: 20px; height: 20px" value="15553"></td>
            <td>Abaru Sarah Precious</td>
            <td>Alaba</td>
           </tr>
           <tr>
            <td><input type="checkbox" name="present[]" style="width: 20px; height: 20px" value="15529"></td>
            <td>Adegoke Anu-oluwapo Oyedele</td>
            <td>Alaba</td>
           </tr>

          </tbody>
         </table>


         <p><button type="submit" class="btn btn-primary form-control" name="postt">MARK ATTENDANCE</button></p>

         <p><button type="submit" class="btn btn-danger" name="unmark">REMOVE</button></p>




        </form>




       </div><!-- /.tab-content -->
      </div><!-- /.box -->

     </div>












     <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="box">
       <div class="box-header">
        <h3 class="box-title">GENERAL STATISTICS </h3>

        <form method="post">

         <div class="col-md-4 no-padding">
          From
          <select name="from" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">


           <option value="">SELECT DATE</option>

          
           <option value="231104">04-Nov-2023</option>

           <option value="231111">11-Nov-2023</option>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 108px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-from-wf-container"><span class="select2-selection__rendered" id="select2-from-wf-container" title="SELECT DATE">SELECT DATE</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

         </div>

         <div class="col-md-4 no-padding">
          To
          <select name="to" class="form-control select2 select2-hidden-accessible" tabindex="-1" aria-hidden="true">


           <option value="">SELECT DATE</option>

           
           <option value="231111">11-Nov-2023</option>
          </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 108px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-to-3l-container"><span class="select2-selection__rendered" id="select2-to-3l-container" title="SELECT DATE">SELECT DATE</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

         </div>
         <div class="col-md-4 no-padding"> <br>
          <button type="submit" class="btn btn-primary form-control" name="search">SEARCH</button>
         </div>


        </form>
       </div>
       <div class="panel-body">






       </div><!-- /.tab-content -->
      </div><!-- /.box -->

     </div>





    </div><!-- /.row -->

    <!-- =========================================================== -->


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
       <form method="POST" class="row" id="addTeachersForm">

        <div class="col-md-6 form-group">
         <label>Report name</label>
         <select name="reportname" id="reportname" class="form-control" required>
          <option>Please select the type</option>
          <option value="sws">Sunday</option>
          <option value="mbs">Monday Bible Study</option>
          <option value="trh">Revival Hour</option>
          <option value="hcf">House Caring</option>
         </select>


        </div>
        <div class="col-md-6 form-group">
         <label>Date</label>
         <input type="date" id="reportdate" class="form-control" placeholder="3-5" required>


        </div>
        <div class="col-md-6 form-group">
         <label>3-5|BOYS</label>
         <input type="number" name="b35" id="b35" class="form-control" placeholder="3-5" required>


        </div>


        <div class="col-md-6 form-group">
         <label>3-5|GIRLS</label>
         <input type="number" name="g35" id="g35" class="form-control" placeholder="3-5" required>
        </div>
        <div class="col-md-6 form-group">
         <label>6-8|BOYS</label>
         <input type="number" name="b68" id="b68" class="form-control" placeholder="6-8" required>
        </div>
        <div class="col-md-6 form-group">
         <label>6-8| GIRLS</label>
         <input type="number" name="g68" id="g68" class="form-control" placeholder="6-8" required>
        </div>
        <div class="col-md-6 form-group">
         <label>9-12|BOYS</label>

         <input type="number" name="b912" id="b912" class="form-control" placeholder="9-12" required>

        </div>
        <div class="col-md-6 form-group">
         <label>9-12|GIRLS</label>

         <input type="number" name="g912" id="g912" class="form-control" placeholder="9-12" required>

        </div>



        <div class="col-12 form-group">
         <button type="button" class="btn btn-secondary float-right addStaff " onclick="addReport()" name="addreport" id="">Add Report</button>
        </div>
       </form>
       <span id="output"></span>
      </div>


     </div>
    </div>
   </div>
   <script src="jquery.min.js"></script>
   <script>
    function addReport() {
     var teacher_id;
     var reportname = document.getElementById("reportname").value;
     var reportdate = document.getElementById("reportdate").value;
     var b35 = document.getElementById("b35").value;
     var g35 = document.getElementById("g35").value;
     var b68 = document.getElementById("b68").value;
     var g68 = document.getElementById("g68").value;
     var b912 = document.getElementById("b912").value;
     var g912 = document.getElementById("g912").value;

     $.ajax({
      type: 'get',
      url: 'myclass.php?teacher_id=' + teacher_id + '&reportname=' + reportname + '&reportdate=' + reportdate + '&b35=' + b35 + '&g35=' + g35 + '&b68=' + b68 + '&g68=' + g68 + '&b912=' + b912 + '&g912=' + g912 + '&type=addreport'
     }).done(function(data) {
      alert(data)
      Report()
     })
    }

    function Report() {
     // teachers = localStorage.getItem('teachers');
     // alert(teachers);
     $('#report').html('');
     $.ajax({
      type: "get",
      url: "myclass.php?type=report",
     }).done(function(data) {
      console.log(data)
      var report = JSON.parse(data);

      for (i = 1; i < report.length; i++) {
       var teacher = report[i].teacher_id;
       var reportname = report[i].reportname;
       var reportdate = report[i].reportdate;
       var b35 = report[i].b35;
       var g35 = report[i].g35;
       var b68 = report[i].b68;
       var g68 = report[i].g68;
       var b912 = report[i].b912;
       var g912 = report[i].g912;

       $("#report").append('<tr><td>' + i + '</td><td>' + teacher + '</td><td>' + reportname + '</td><td>' + reportdate + '</td><td>' + b35 + '</td><td>' + g35 + '</td><td>' + b68 + '</td><td>' + g68 + '</td><td>' + b912 + '</td><td>' + g912 + '</td><td>');
      }
     })
    }
    Report();
   </script>




  </div>

  <?php
  include("footer.php")
  ?>