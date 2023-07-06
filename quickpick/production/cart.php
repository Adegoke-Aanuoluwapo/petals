<?php include("functions.php")?>

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
                            <th class="column-title">Item ID</th>
                           
                            <th class="column-title">Quantity </th>
                            <th class="column-title">Price </th>
                            <th class="column-title">Created </th>
                           
                              <th class="column-title">ACTION </th>
                            
                           
                            
                            </th>
                            
                          </tr>
                        </thead>
                       
                        <tbody>
                           <?php 
                          
                           $i = 1; $sql = $con->query("SELECT * FROM carts ");
                        while ($rows =$sql->fetch_assoc()) {?>
                          <tr class="even pointer">
                            <th scope="row"><?= $i++ ?></th>
                            <td class="a-center ">
                             
                            </td>

                            <td class=" "><?= $rows['item_id']?></td>
                            <td class=" "><?= $rows['quantity']?></td>
                            <td class=" "><?= $rows['selling_price']?></td>
                            
                            
                            

                            <td class=" "><?= $rows['created_at']?></td>
                            <form method="POST">
                             <td class=" "><a class="btn btn-success" name="updatecategory" href="categorylist.php?sn=<?= $rows['sn']?>">REMOVE</a></td>
                             
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