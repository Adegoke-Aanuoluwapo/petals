
<?php 


include("functions.php");




 if(isset($_POST['addcart'])){
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
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Gentelella Alela!</title>

    
    <style>
 
    


        </style>
   <?php include("header.php") ?>     
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

          

            <br />

       
          
        <!-- top navigation -->
   <?php include("nav.php")?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
         
          <!-- /top tiles -->

         
          <br />
          
    

    

    <?php  if(isset($_GET['sn'])){
$sn = $_GET['sn'];
$item_id = $_POST['item_id'];
$quantity = $_POST['quantity'];
$selling_price = $_POST['selling_price'];
 $sql = $con->query("SELECT * from carts");
 $rows = mysqli_fetch_assoc($sql);
 } ?>           
              
          <div class="row">

<div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
      
            <div class="x_title">Details</h2></div>
            
                
                <div class="container" >
              
                
                    <img src="<?=$rows['picture'] ?>" width="200" alt=""/>
                    
<input type="button" onclick="decrementValue()" value="-"  />
<input type="text" name="quantity" value="1" maxlength="2" max="10" size="1" id="number" style="width:50px;" disabled/>
<input type="button" onclick="incrementValue()" value="+"  >

<hr class="bg-warning">

                    <h2>description: <?= SqLx('items', $rows['$item_id'], 'sn', 'title') ?></h2>
                    <h2>Quantity: <?= $rows['quantity']?></h2>
                    <h2>price: <strike>N</strike><?= CurrentPrice($rows['sn']) ?><br><br>
<span>select color</span>
<input type="color" id="colorpicker" class="bg-warning">
</div>

<input name="item_id" type="text"  />
<input name="quantity" type="text"  />
<input name="item_id" type="text" />
                   
                    
                    <form>
                       <a type="submit" href="addcarts.php" class="btn btn-warning text-white" style="width:100%;"><i class="fa fa-shopping-cart"></i>  ADD TO CART</a>
       
</form>        
    </div>

    
<script type="text/javascript">
function incrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('number').value = value;
    }
}
function decrementValue()
{
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number').value = value;
    }

}
</script>

             								
            </div>
        </div>
    </div>
</div>
</div>
</div>


<!-- /page content -->

<!-- footer content -->

<!-- /footer content -->
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
