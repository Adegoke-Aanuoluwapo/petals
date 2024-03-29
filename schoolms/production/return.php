<?php
session_start();
include("function.php");
include("connection.php");

if (isset($_POST['borrow'])) {
  borrow();
}

if (isset($_POST['editborrow'])) {

  Editborrow($id);
}
if (isset($_POST['deleteborrow'])) {
  $id = $_POST['deleteborrow'];
  $sql = $con->query("DELETE FROM borrow WHERE id ='$id'") or die($con->error);
  header('location:borrow.php');
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <?php include("header.php"); ?>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
          </div>

          <div class="clearfix"></div>

          <?php include("nav.php"); ?>

          <!-- page content -->
          <div class="right_col" role="main">
            <div class="">
              <div class="page-title">
                <div class="title_left">
                  <h3>Borrow Book</h3>
                </div>

                <div class="title_right">
                  <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>


              <p></p>

              <p id="me"></p>

              <script>
                setInterval(myTimer, 1000);

                function myTimer() {
                  const d = new Date();
                  document.getElementById("me").innerHTML = d.toLocaleTimeString();
                }
              </script>  
  
  
   <div class="row">

                      <div class="col-md-12 col-sm-12 ">
                        <div class="x_panel">
                          <div class="x_title">Registered Class</div>
                          <table class="table">
                            <thead>
                              <tr>
                                <th>sn</th>
                                <th>Student Name</th>
                                <th>Title</th>
                                <th>Borrow Date</th>
                                <th>Return Date</th>
                                <th>Actual Return Date</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $i = 1;
                              $sql = $con->query("SELECT * FROM borrow");
                              while ($rows = $sql->fetch_assoc()) {
                                $id = $rows['id'];
                                $studentname = $rows['studentname'];
                                $title = $rows['title'];
                                $bdate = $rows['bdate'];
                                $rdate = $rows['rdate'];
                              ?>

                                <tr>
                                  <th scope="row"><?= $i++ ?></th>

                                  <td><a href="updateborrow.php?id=<?= $rows['studentname'] ?>"><?=  GetNameTitle($rows['studentname']) ?></a></td>
                                  <td><a href="nobooks.php"><?= $rows['title'] ?><?= GetSubjectTitle($rows['title'])?></a></td>
                                  <td><?= $rows['bdate'] ?></td>
                                  <td><?= $rows['rdate'] ?></td>
                                  <td>
                                    <form method="POST">
                                      <button class="btn btn-success" type="submit" name="deleteborrow" value="<?= $rows['id'] ?>">RETURN</button>
                                    </form>
                             <?php } ?>

                       <!-- /page content -->

        <!-- footer content -->
        <?php include("footer.php"); ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
      function timeFunctionLong(input) {
        setTimeout(function() {
          input.type = 'text';
        }, 60000);
      }
    </script>
</body>

</html>