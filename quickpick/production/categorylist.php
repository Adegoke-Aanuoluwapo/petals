<?php 
include("functions.php");

if(isset($_POST["deleteCategory"])){
	global $con;
	$sn = $_POST['deleteCategory'];
	$sql = $con->query("DELETE FROM category WHERE sn = '$sn' ")or die($con->error);

};

if(isset($_POST['updatecate'])){
    global $con;
    $sn = $_POST['updatecate'];
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


			<?php if(isset($_GET['sn'])){
					$sn = $_GET['sn'];
          
					$sql = $con->query("SELECT * FROM category WHERE sn ='$sn' ");
					$rows = mysqli_fetch_assoc($sql); 	
			?>

      

<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Form Elements</h3>
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
								<div class="x_title">
									<h2>Form Design <small>different form elements</small></h2>
									
									<div class="clearfix"></div>
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

             
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                   
                     
                    
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                  </div>
                </div>
              </div>



              <div class="clearfix"></div>


              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                   
                   
                     
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Add class <code>bulk_action</code> to table for bulk actions options on row select</p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">sn </th>
                            <th class="column-title">Title </th>
                            <th class="column-title">Note </th>
                            <th class="column-title">Quantity </th>
                            <th class="column-title">Created </th>
                             <th class="column-title">UPDATE </th>
                              <th class="column-title">DELETE </th>
                            
                           
                            
                            </th>
                            
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                          
                           $i = 1; $sql = $con->query("SELECT * FROM category ");
                        while ($rows =$sql->fetch_assoc()) {?>
                          <tr class="even pointer">
                            <th scope="row"><?= $i++ ?></th>
                            <td class="a-center ">
                              <?= $rows['title']?>
                            </td>
                            <td class=" "><?= $rows['note']?></td>
                            <td class=" "><?= Qty($rows['sn'])?></td>
                            <td class=" "><?= $rows['created_at']?></td>
                            <form method="POST">
                             <td class=" "><a class="btn btn-success" name="updatecategory" href="categorylist.php?sn=<?= $rows['sn']?>">UPDATE</a></td>
                             <td class=" "><a type="submit" class="btn btn-danger" name="deleteCategory" value="<?= $rows['sn']?>">DELETE</a></td>
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
