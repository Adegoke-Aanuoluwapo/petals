<?php
session_start();
include("function.php");

$sn = $_GET['sn']; 
 $sql = $db->query("SELECT * FROM studentuser WHERE sn='$sn' ") ;
$rows = $sql->fetch_assoc();

if(isset($_POST['EditUser'])){
	$sn = $_POST['EditUser'];
	EditUser($sn);
}
if(isset($_POST['deleteUser'])){
	$sn = $_POST['deleteUser'];

    $sql = $db->query("DELETE FROM studentuser WHERE sn = '$sn' ") or die($db->error);
    header('location: addstudent.php'); exit;
}



if(isset($_POST['LinkParent'])){
    $parent = $_POST['parent'];
    $sql = $db->query("UPDATE studentuser SET parent='$parent' WHERE sn = '$sn' ") or die($db->error);
    header('location: addstudent.php'); exit;
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
							<h3> Students Profile</h3>
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




		<div class="row">

					<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">Registered Students</div>
									<table class= "table table-hover">
								        		
											    <tr><th>Surname</th><td><?= $rows['surname'] ?></td></tr>
												<tr><th>Other</th><td><?= $rows['othername'] ?></td></tr>
												<tr><th>class</th><td><?= $rows['class'] ?></td></tr>
												<tr><th>sex</th><td><?= $rows['sex'] ?></td></tr>
												<tr><th>registrationnumber</th><td><?= $rows['reg'] ?></td></tr>
												<tr><th>dateofbirth</th><td><?= $rows['dateofbirth'] ?></td></tr>
												<tr><th>Parent Data</th><td><a href="parentprofile.php?sn=<?= $rows['parent'] ?>"><?= parentData($rows['parent']) ?></a></td></tr>
												
										
										
										</table>
											  <form method="POST">
											  <button class="btn btn-success" type="submit" name="deleteUser" value="<?= $rows['sn'] ?>">Delete</button>
										      </form>

											    <form method="POST" action="addstudent.php">
													<button class="btn btn-success" name="EditData"  value="<?= $rows['sn'] ?>">UPDATE</button>	
												</form>	

                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button>
										
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

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
<form method="POST">
                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel2">Update Parent</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <label>Select Parent</label>
                          <select class="form-control" name="parent" required>
													<option value="">Select Option...</option>
                                                    <?php $i=1; $sql = $db->query("SELECT * FROM parentuser") ;
										  while($rows = $sql->fetch_assoc()) { 
												echo	'<option value="'.$rows['sn'].'">'.$rows['surname'].' '.$rows['othername'].'</option>'; 
                                                } ?>
                                                </select>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary" name="LinkParent">Save changes</button>
                        </div>
</form>
                      </div>
                    </div>
                  </div>
                  <!-- /modals -->

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
</body></html>