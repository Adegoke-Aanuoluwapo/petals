<?php 
include("functions.php");

if(isset($_POST["deleteCategory"])){
	global $con;
	$sn = $_POST['deleteCategory'];
	$sql = $con->query("DELETE FROM category WHERE sn = '$sn' ")or die($con->error);

}

if(isset($_POST['updatecate'])){

  updateCategory($sn);

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

    <?php include("header.php") ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
          

            <div class="clearfix"></div>
<!-- nav start-->
          <?php include("nav.php") ?>
<!-- nav end-->
        <!-- page content -->


			<?php if(isset($_POST['updatecategory'])){
					$sn = $_POST['updatecategory'];
          
					$sql = $con->query("SELECT * FROM category WHERE sn ='$sn' ");
					$rows = mysqli_fetch_assoc($sql); 	
			?>

      

<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Elements</h3>
						</div>

								<div class="x_content">
									<br />
									<form method = "POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="title" id="first-name"  class="form-control" value="<?=   $rows['title'] ?>" >
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Note <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" name="note"  class="form-control" value="<?= $rows['note']?>">
											</div>
										</div>
									
										
									
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
											
												<button type="submit" name="updatecate" class="btn btn-success" >Submit</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>



		<?php	} else {?>
			



        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              
              </div>
 

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">sn </th>
                            <th class="column-title">Transaction ID </th>
                            <th class="column-title">User ID </th>
                            <th class="column-title">Amount </th>
                            <th class="column-title">Payment Date </th>
                             <th class="column-title">UPDATE </th>
                              <th class="column-title">DELETE </th>
                            
                           
                            
                            </th>
                            
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                          
                           $i = 1; $sql = $con->query("SELECT * FROM payments ");
                        while ($rows =$sql->fetch_assoc()) {?>
                          <tr class="even pointer">
                            <th scope="row"><?= $i++ ?></th>
                            <td class="a-center ">
                              <?= $rows['trid']?>
                            </td>
                            <td class=" "><?= $rows['user_id']?></td>
                             <td class=" "><?= $rows['amount']?></td>
                              <td class=" "><?= $rows['created_at']?></td>
                            <form method="POST">
                             <td class=" "><button class="btn btn-success"  value="<?= $rows['sn']?>" name="updatecategory">UPDATE</button></td>
                             <td class=" "><button type="submit" class="btn btn-danger" name="deleteCategory" value="<?= $rows['sn']?>">DELETE</button></td>
                            </form>
                            
                          </tr>
                         
                         
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div>
                </div>
              </div>
            </div>
            <?php } ?>
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
