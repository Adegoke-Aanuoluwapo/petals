<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Children for Christ</title>

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

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->



   <?php include("nav.php")?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 class="students">120</h3>

                <p>Children</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 class="assigned_fee">5</h3>

                <p>Teachers</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 class="reveived_payment">₦ 51,000</h3>

                <p>Reveived Payments</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-secondary">
              <div class="inner">
                <h3 class="subject_teachers">32</h3>

                <p>Subject Teachers</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Classes / Arms</span>
                <span class="info-box-number classes">
                  
                </span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Subjects</span>
                <span class="info-box-number subjects"></span>
              </div>
            </div>
          </div>
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Guardians</span>
                <span class="info-box-number guardians"></span>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Staffs</span>
                <span class="info-box-number staffs"></span>
              </div>
            </div>
          </div>
        </div>

      <div class="row">
   <div class="col-md-12">
              <div class="box box-primary box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">SUBMIT WEEKLY REPORTS</h3>
                  <div class="box-tools pull-right">
                  
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="padding:10px 0" id="weeklyrep">	 <div class="col-md-4 col-sm-6 col-xs-12" style="padding:0 10px">
              <div class="info-box" style="border: thin solid #CCC;" id="popModal" data-prog="MONDAY BIBLE STUDY" data-date="06-NOV-2023" data-pid="3750">
                <span class="info-box-icon bg-aqua-active"><i class="fa fa-calendar-times-o"></i></span>
                <div class="info-box-content">
            <span class="info-box-text"><center><strong>Monday Bible Study<br>06-Nov-2023</strong></center> </span>

                         <button type="button" class="btn btn-primary btn-sm btn-block">SUBMIT REPORT</button>
                     
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->

</div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

   <div class="col-md-12">
              <div class="box box-success box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">RECENT SUBMISSION</h3>
                  <div class="box-tools pull-right">
                   
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="padding:10px 0" >	





 <div class="col-md-4 col-sm-6 col-xs-12" style="padding:0 10px">
              <div class="info-box" style="border: thin solid #CCC; " onclick="popModalEdit('3740','16')">
                <span class="info-box-icon bg-green-active"><i class="fa fa-calendar-check-o"></i></span>
                <div class="info-box-content" >
                  <span class="info-box-text"><center><strong ><h3 id="reportname"></h3><br ><h3 id="reportdate"></h3></strong></center> </span>
                     
                     <div>
                     	<table class="table table-sm" style="margin: 0; padding:0">
                     		
                     		<tbody id="activereport" >
                        </tbody>
                      </table>

                  </div>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            



 </div><!-- /.col -->
            

  </div><!-- /.col -->
            

<em style="padding-left:15px">Click a report to update it</em>

</div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>




   <div class="col-md-12">
              <div class="box box-danger box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title">PENDING REPORTS</h3>
                  <div class="box-tools pull-right">
                  
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class="box-body" style="padding:10px 0" id="pendingrep"><div class="row" style="padding:0 15px"><div class="col-md-4 col-sm-6 col-xs-12" style="padding:0 10px"><div id="popModal" class="info-box" style="border: thin solid #CCC;" data-prog="Monday Bible Study" data-date="06-Nov-2023" data-pid="3750"><span class="info-box-icon bg-maroon-active"><i class="fa fa-calendar-times-o"></i></span><div class="info-box-content"><span class="info-box-text"><center><strong>Monday Bible Study<br>06-Nov-2023</strong></center> </span><button type="button" class="btn btn-danger btn-sm btn-block">SUBMIT REPORT</button></div></div></div><div class="col-md-4 col-sm-6 col-xs-12" style="padding:0 10px"><div id="popModal" class="info-box" style="border: thin solid #CCC;" data-prog="Sunday Worship Service" data-date="05-Nov-2023" data-pid="3749"><span class="info-box-icon bg-maroon-active"><i class="fa fa-calendar-times-o"></i></span><div class="info-box-content"><span class="info-box-text"><center><strong>Sunday Worship Service<br>05-Nov-2023</strong></center> </span><button type="button" class="btn btn-danger btn-sm btn-block">SUBMIT REPORT</button></div></div></div></div><div class="row"><center><a href="pending.php" class="btn btn-default">Show all Pending Reports</a></center></div></div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>




            </div>


      </section>
      <!-- /.content -->
    </div>
    
  <?php
include("footer.php");
  ?>
  <script>
  
  </script>
 
  <script src="jquery.min.js"></script>
   <script type="text/javascript">
     
 
 
 function showActiveReport(){
             var teacher_id =localStorage.getItem('id');
           
              $.ajax({
                type:"get",
                url:"myclass.php?teacher_id="+teacher_id+"&type=activereport"

              }).done(function(data){
               
               var activereport =JSON.parse(data);
                 alert(data)
                for(a = 1; a <=activereport.length; a++){
                  var reportid =activereport[a].id;
                  var reportname =activereport[a].reportname;
                  var reportdate =activereport[a].reportdate;
                  var b35 =activereport[a].b35;
                  var g35 = activereport[a].g35;
                  var b68 =activereport[a].b68;


                  $('#activereport').append('<tr><td>'+b35+'</td><td>'+g35+'</td><td>'+b68+'</td><tr>');
                  $('#reportname').html(reportname)
                   $('#reportdate').html(reportdate)

                 }}
              );
 }
                     
          showActiveReport();
         
</script>
  <script>
   
  </script>