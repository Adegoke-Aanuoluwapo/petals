<?php session_start();
if(!isset($_SESSION['sales_id'])){header('location: addmarket.php'); }
include("functions.php");


if(isset($_POST['deletecat'])){
  global $con;
  $sn = $_POST['deletecat'];
  $sql = $con->query("DELETE  FROM carts WHERE sn ='$sn'");
}
if(isset($_SESSION['email'])){header("cart.php"); }
if(isset($_POST['checkout'])){
  checkOut();  
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
          
    

    



                  <div class="x_content">

                    <div class="table-responsive">
                      
                      <table class="table table-striped jambo_table bulk_action">
                        
                        <thead>
                          <tr class="headings">
                           
                            <th class="column-title">item</th>
                            
                            
                            
                            <th class="column-title">quantity</th>
                            <th class="column-title">amount</th>
                            <th class="column-title">Remove</th>
                          

                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php  $sales_id = $_SESSION['sales_id'];
                         $i=1; $sql = $con ->query("SELECT * FROM carts WHERE sales_id='$sales_id' ");
										  while($rows = $sql->fetch_assoc()) {
                                            $x = $i++;
                            ?>
                          <tr class="even pointer">
                           
                            <td><img src="<?= sqLx('items','sn',$rows['item_id'],'picture') ?>" width="100" style="padding-right:10px; float: left"/><?= ucfirst(sqLx('items','sn',$rows['item_id'],'title')) ?><br><strike>N</strike><?= $rows['selling_price']?><input type="hidden" value="<?= $rows['selling_price']?>" id="p<?=$x?>"></td>
                            
                        
                          
                            <td >
                              <input type="hidden" id="item<?=$x?>" value="<?=$rows['sn']?>" />
                            <input type="button" onclick="decrementValue('<?=$x?>')" value="-"  />
                            
<input type="number" name="quantity" value="<?=$rows['quantity']?>" maxlength="2" max="10" size="1" id="number<?=$x?>" style="width:50px;" readonly/>
<input type="button" onclick="incrementValue('<?=$x?>')" value="+"  >





                   
                    
                                          </td>

    

</td>
                           
                            <td><strike>N</strike><span id="st<?=$x?>"><?=$rows['selling_price']?></span></td>
                            <td>
											  <form method="POST">
											  <button class="btn btn-outline-danger" type="submit" name="deletecat" value="<?= $rows['sn'] ?>">
                                              <i class="fa fa-close"></i></button>

										      </form>
                        
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                      <div class></div>
                      <form method="POST">
                        <button type="submit" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm" name="checkout">Checkout</button>
                        </form>
                      <div style="margin-right:300px; float:right">
                    <div style="display:flex">
                    <h2 >Total:</h2>
                  <h2> <strike>N</strike></h2> <h2 id="total"></h2>
                  </div>
                </div>
              
                    <script type="text/javascript">
							function incrementValue(v)
{
  var sn = document.getElementById('item' +v).value;
    var p = document.getElementById('p'+v).value;
    var value = parseInt(document.getElementById('number'+v).value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
            document.getElementById('number'+v).value = value;
            var x = p * value;
            $('#st'+v).html(x);
            addAll();
            changeQty(sn, value)
    }
}
	function decrementValue(v)
{ 
  var sn = document.getElementById('item' +v).value;
    var p = document.getElementById('p'+v).value;
    var value = parseInt(document.getElementById('number'+v).value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
            document.getElementById('number'+v).value = value;
            var x = p * value;
            $('#st'+v).html(x);
            addAll();
             changeQty(sn, value)
    }
}
function addAll(){
    var i = 1;
    var x = <?=$x?>;
    var sum = 0;
    while(i<=x){
        var p = document.getElementById('p'+i).value; 
        var value = parseInt(document.getElementById('number'+i).value, 10);
    value = isNaN(value) ? 0 : value;  
sum += p * value;
i++;
    }
    $('#total').html(sum);
}
function changeQty(sn, value){

  $.ajax({
    type: 'get',
    url: 'functions.php?sn='+sn+'&val='+value
  }).done(function(data){
    
  })
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
     <?php include("footer.php") ?>
        <!-- /footer content -->
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
  
  </body>
</html>