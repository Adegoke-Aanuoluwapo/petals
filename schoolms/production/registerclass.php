<?php
session_start();
include("function.php");
include("connection.php");

if (isset($_POST['Addclass'])) {
  Addclass();
}
if (isset($_POST['DeleteClass'])) {
  global $con;
  $class = $_POST['DeleteClass'];
  $sql = $con->query("DELETE FROM class WHERE  class ='$class'") or die(mysqli_error($con));
}
if (isset($_POST['editClass'])) {
  EditClass($id);
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
                  <h3>Register Class</h3>
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
              <?php if (isset($_POST['editclass'])) {
                $id = $_POST['editclass'];

                $sql = $con->query("SELECT * FROM class WHERE id= '$id' ");
                $row = mysqli_fetch_assoc($sql);  ?>
                <div class="row">
                  <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Staff <small>Update Class</small></h2>
                        <div class="clearfix"></div>
                      </div>
                      <div>



                        <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">class <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="first-name" name="class" value="<?= $row['class'] ?>" required="required" class="form-control ">
                            </div>
                          </div>
                          <div class="item form-group">
                            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Note <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 ">
                              <input type="text" id="last-name" name="note" value="<?= $row['note'] ?>" required="required" class="form-control">
                            </div>
                          </div>

                      </div>





                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" name="editClass" value="<?= $id ?>" class="btn btn-success">Update User</button>
                      </div>
                    </div>

                    </form>
                  </div>
                </div>
            </div>
          </div>
        </div>
      <?php } else { ?>

        <div class="row">
          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
              <div class="x_title">
                <h2>Student <small>Register Class</small></h2>
                <div class="clearfix"></div>
              </div>
              <div>



                <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">


                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Class <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="last-name" name="class" required="required" class="form-control">
                    </div>
                  </div>


                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Note<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" id="last-name" name="note" required="required" class="form-control">
                    </div>
                  </div>

              </div>
              <div class="ln_solid"></div>
              <div class="item form-group">
                <div class="col-md-6 col-sm-6 offset-md-3">
                  <button type="submit" name="Addclass" class="btn btn-success">Register Class</button>
                </div>
              </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  <?php } ?>

  <div class="row">

    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
        <div class="x_title">Registered Class</div>
        <table class="table">
          <thead>
            <tr>
              <th>sn</th>

              <th>Class</th>
              <th>note</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            $sql = $con->query("SELECT * FROM class");
            while ($rows = $sql->fetch_assoc()) {
              $class = $rows['class'];
              $note = $rows['note'];
            ?>

              <tr>
                <th scope="row"><?= $i++ ?></th>

                <td><?= $rows['class'] ?></td>
                <td><?= $rows['note'] ?></td>
                <td>
                  <form method="POST">
                    <button class="btn btn-success" type="submit" name="DeleteClass" value="<?= $rows['class'] ?>">Delete</button>
                  </form>
                <td>

                  <form method="POST">
                    <button class="btn btn-success" name="editclass" value="<?= $rows['id'] ?>">UPDATE</button>
                  </form>
                </td>
              </tr>
            <?php  } ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>
  </div>
  </div>
  </div>


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