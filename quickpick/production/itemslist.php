<?php 
include("functions.php");
include("connect.php");

if(isset($_POST["deleteItems"])){
	global $con;
	$sn = $_POST['deleteItems'];
	$sql = $con->query("DELETE FROM items WHERE sn = '$sn' ")or die($con->error);

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
        


			<?php if(isset($_POST['updateitems'])){
					$sn = $_POST['updateitems'];
					$sql = $con->query("SELECT * FROM items WHERE sn ='$sn' ");
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
								<!-- <div class="x_title">
									<h2>Item list <small>varieties of items</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div> -->
								<div class="x_content">
									<br />
									<form method="POST"  id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                  <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">CatID <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="cat_id" id="first-name"  class="form-control "value="<?php $rows['cat_id']?>"  />
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="title" id="first-name"  class="form-control " value="<?= $rows['title']?>" />
											</div>
										</div>
                   
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Note <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text"  name="note"  class="form-control" value="<?= $rows['note']?>" />
											</div>
										</div>
									
										 <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Created Time <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="date" name="title"   class="form-control " value="<?= $rows['created_at']?>" />
											</div>
										</div>
									
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
											
												<button type="submit" name="addcategory" class="btn btn-success" ></button>
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
                <h3>Tables <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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

            <div class="row" style="display: block;">
              


            

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                   
                   
                  


                  
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <p>Item List </p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            
                           <th class="column-title">sn </th>
                             <th class="column-title">Cat ID </th>
                            <th class="column-title">title </th>
                            <th class="column-title">note </th>
                             <th class="column-title">Created time </th>
                             <th class="column-title">Update </th>
                              <th class="column-title">Delete </th>
                            
                           
                            
                            </th>
                            
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                          
                           $i = 1; $sql = $con->query("SELECT * FROM items ");
                        while ($rows =$sql->fetch_assoc()) {?>
                          <tr class="even pointer">
                            <th scope="row"><?= $i++ ?></th>
                            <td class="a-center ">
                              <?= $rows['cat_id']?>
                            </td>
                            <td class="a-center ">
                              <?= $rows['title']?>
                            </td>
                            <td class="a-center "><?= $rows['note']?></td>
                            <td class="a-center "><?= $rows['created_at']?></td>
                            <form method="POST">
                             <td class=" "><button class="btn btn-success" value="<?= $rows['sn']?>" name="updateitems">
                            <a href="itemslist.php?sn=<?= $rows['sn']?>">UPDATE</a></button></td>
                             <td class=" "><button type="submit" class="btn btn-danger" name="deleteItems" value="<?= $rows['sn']?>">DELETE</button></td>
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
                      <?php  } ?>
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