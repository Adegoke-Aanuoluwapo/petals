<?php
session_start();
if(!isset($_SESSION['user_id'])){header('location: login.php'); }
include("functions.php");


$user_id = $_SESSION['user_id'];
 $sql = $con->query("SELECT * FROM users where user_id = '$user_id'");
 $rows = mysqli_fetch_assoc($sql);


?>



<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Users Profile</title>

	<?php include("header.php") ?>;
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Quickpick</span></a>
					</div>

					<div class="clearfix"></div>

				<?php include("nav.php") ?>
			<!-- /top navigation -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tables <small>User Profile</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
              
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Basic Tables <small>basic table subtitle</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table table-hover">



                                    <tr>
                                       <th>User ID</th>
                                       <td><?= $user_id ?></td>
                                    </tr>
                                    <tr>
                                       <th>Names</th>
                                       <td><?= $rows['name'] ?></td>
                                    </tr>
                                    <tr>
                                       <th>Email</th>
                                       <td><?= $rows['email'] ?></td>
                                    </tr>
                                    <tr>
                                       <th>Phone</th>
                                       <td><?= $rows['phone'] ?></td>
                                    </tr>
                                    <tr>
                                       <th>Password</th>
                                       <td><?= $rows['password'] ?></td>
                                    </tr>
                                    <tr>
                                       <th>order date</th>
                                       <td><?= $rows['created_at'] ?></td>
                                    </tr>

                                 </table>

                                 <h4>Transaction History</h4>
                                 <table class="table">
                                  <thead>
                                        <tr><th>Transaction ID</th>
                                        <th>Amount</th>
                                        <th>Cart Items</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php 
                                   
                                    $i = 1; $sql = $con->query("SELECT * FROM checkout WHERE user_id = '$user_id' ");
                                    while ($rows = mysqli_fetch_assoc($sql)){
                                    
                                    ?>
                                    <tr>
                                      
                                      <td><?= $rows['sales_id'] ?></td>
                                   
                                         <td><strike>N</strike><?= number_format(cartAmount($rows['sales_id'])) ?></td><br>
                                         
                                        <td><?php echo cartItems($rows['sales_id']); 
                                       ?></td>
                                              
                                         
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
     <?php include("footer.php") ?>
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

</body>

</html>