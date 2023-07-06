



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
                           
                              <th class="column-title">REMOVE </th>
                            
                           
                            
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
                              <?= $rows['title']?>
                            </td>
                            <td class=" "><?= $rows['item_id']?></td>
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