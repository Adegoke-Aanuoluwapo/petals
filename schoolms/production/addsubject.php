<?php
session_start();
include("connection.php");
include("function.php");


if (isset($_POST['AddSubject'])) {
      addSubject();
}

if (isset($_POST['DeleteSubject'])) {
      global $con;
      $subject = $_POST['DeleteSubject'];
      $sql = $con->query("DELETE FROM subjects WHERE subject = '$subject'") or die(mysqli_error($con));
}
if (isset($_POST['EditSubject'])) {
      global $con;

      $id = $_POST['EditSubject'];

      // global $con;
      $sql = $con->query("UPDATE subjects WHERE subject ='$subject', note ='$note' WHERE id='$id'") or die(mysqli_error($con));
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
                                                      <h3>Manage Subject</h3>
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





                                          <?php if (isset($_POST['EditSubject'])) {
                                                $id = $_POST['EditSubject'];
                                                $sql = $con->query("SELECT * FROM subjects WHERE id= '$id' ");
                                                $row = mysqli_fetch_assoc($sql);  ?>
                                                <div class="row">
                                                      <div class="col-md-12 col-sm-12 ">
                                                            <div class="x_panel">
                                                                  <div class="x_title">
                                                                        <h2>SUBJECT <small>Update subject</small></h2>
                                                                        <div class="clearfix"></div>
                                                                  </div>




                                                                  <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                                                        <div class="item form-group">
                                                                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Subject <span class="required">*</span>
                                                                              </label>
                                                                              <div class="col-md-6 col-sm-6 ">
                                                                                    <input type="text" id="first-name" name="subject" value="<?= $row['subject'] ?>" required="required" class="form-control ">
                                                                              </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Note <span class="required">*</span>
                                                                              </label>
                                                                              <div class="col-md-6 col-sm-6 ">
                                                                                    <input type="text" id="last-name" name="note" value="<?= $row['note'] ?>" required="required" class="form-control">
                                                                              </div>
                                                                        </div>

                                                                        <div class="ln_solid"></div>
                                                                        <div class="item form-group">
                                                                              <div class="col-md-6 col-sm-6 offset-md-3">
                                                                                    <button type="submit" name="EditSubject" value="<?= $row['id'] ?>" class="btn btn-success">Update Subject</button>
                                                                              </div>
                                                                        </div>

                                                                  </form>
                                                            </div>
                                                      </div>
                                                </div>

                                          <?php } else {  ?>

                                                <div class="row">
                                                      <div class="col-md-12 col-sm-12 ">
                                                            <div class="x_panel">
                                                                  <div class="x_title">
                                                                        <h2>student <small>subject</small></h2>
                                                                        <div class="clearfix"></div>
                                                                  </div>




                                                                  <form method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                                                                        <div class="item form-group">
                                                                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Subject <span class="required">*</span>
                                                                              </label>
                                                                              <div class="col-md-6 col-sm-6 ">
                                                                                    <input type="text" id="first-name" name="subject" required="required" class="form-control ">
                                                                              </div>
                                                                        </div>
                                                                        <div class="item form-group">
                                                                              <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Note <span class="required">*</span>
                                                                              </label>
                                                                              <div class="col-md-6 col-sm-6 ">
                                                                                    <input type="text" id="last-name" name="note" required="required" class="form-control">
                                                                              </div>
                                                                        </div>

                                                                        <div class="ln_solid"></div>
                                                                        <div class="item form-group">
                                                                              <div class="col-md-6 col-sm-6 offset-md-3">
                                                                                    <button type="submit" name="AddSubject" class="btn btn-success">Add Subject</button>
                                                                              </div>
                                                                        </div>

                                                                  </form>
                                                            </div>
                                                      </div>
                                                </div>

                                          <?php }  ?>

                                          <div class="row">

                                                <div class="col-md-12 col-sm-12 ">
                                                      <div class="x_panel">
                                                            <div class="x_title">Registered subjects</div>
                                                            <table class="table">
                                                                  <thead>
                                                                        <tr>
                                                                              <th>#</th>
                                                                              <th>subject</th>
                                                                              <th>Note</th>

                                                                              <th>Delete</th>
                                                                              <th>Update</th>
                                                                        </tr>
                                                                  </thead>
                                                                  <tbody>
                                                                        <?php $i = 1;
                                                                        $sql = $con->query("SELECT * FROM subjects");
                                                                        while ($rows = $sql->fetch_assoc()) {
                                                                        ?>

                                                                              <tr>
                                                                                    <th scope="row"><?= $i++ ?></th>
                                                                                    <td><?= $rows['subject'] ?></td>
                                                                                    <td><?= $rows['note'] ?></td>
                                                                                    <td>
                                                                                          <form method="POST">
                                                                                                <button class="btn btn-success" type="submit" name="DeleteSubject" value="<?= $rows['subject'] ?>">Delete</button>
                                                                                          </form>
                                                                                    </td>
                                                                                    <td>

                                                                                          <form method="POST">
                                                                                                <button class="btn btn-success" name="EditSubject" value="<?= $rows['id'] ?>">UPDATE</button>
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
                                    <div>
                                          <div>










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