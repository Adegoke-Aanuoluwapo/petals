 <?php 
 session_start();
 include("functions.php");



if(!isset($_SESSION['email'])){header("login.php");}

  if(isset($_POST['AddToCart'])){
  global $con;
  AddCart();
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
  <style>
       .me{
        display:none;
      
       }
       .cm:hover .me {
        display:block;
       }

       .cm:hover {
        transform: scale(0.9);
        box-shadow: 0 4px 8px 0 rgba(0,0,0, 0.2), 0 6px 20px 0 rgba(0,0,0,0.19) ;
        
        
       }
       .cm{
        transition: all o.2s;
       
       }
        </style>

	<?php include("header.php") ?>;
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

				<?php include("nav.php") ?>
  
  
  <!-- page content -->

   
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Good details</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5  form-group pull-right top_search">
                  <div class="input-group">
                    <a href="cart.php"><i class="fa fa-shopping-cart" id="me" style="font-size:30px" class="float-end" title="go to cart"></i></a>
                    
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

          

                      
 
          <div class="row">

          <?php $i=1; $sql = $con->query("SELECT * FROM items") ;
							                  while($rows = $sql->fetch_assoc()) { ?>
										  	      
            <div class="col-md-4 col-sm-4  ">
              <div class="x_panel tile fixed_height_300 cm">
              <img src="<?= $rows['picture'] ?>" alt="" style="width:200px; height:200px;" >
              
              <h3 class="text-warning"><?= $rows['title'] ?></h3>
               
            
             <h2>selling price : <strike>N</strike><?= CurrentPrice($rows['sn']) ?></h2>   
             
            <h2><a href="cart_detail.php?sn=<?= $rows['sn']?>" style="text-decoration:underline;">view details</a></h2><br>      
                <form method="post">	
                  <input type="hidden" name="selling_price" value="<?= CurrentPrice($rows['sn']) ?>">
                   <input type="hidden" name="quantity" value="1">
                  <input type="hidden" name="item_id" value="<?= $rows['sn'] ?>">

                   <button type="submit" name="AddToCart" class=" btn btn-warning me text-light " style="width:100%;"><i class="fa fa-shopping-cart"></i> ADD  CART</button>
                </form>


                 
              </div>
            </div>
          
            <?php } ?>

                                            
            
          </div>
          
                      

                     
                      </div>
                     
                  </div>
                </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
       <!-- /footer content -->  
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
