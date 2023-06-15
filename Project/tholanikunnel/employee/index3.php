
<!DOCTYPE html>
<html>
 <?php
include 'header2.php';

 include 'connect.php';
 $ph=$_SESSION['phoneno'];
 $e="SELECT UPPER (`username`) AS username FROM `customer2` where phoneno=$ph AND user='emp'";
 $se=mysqli_query($conn,$e);
$ee=mysqli_fetch_array($se);
echo "<br> HI";?><h4 style="color: orange;"><?php
 echo $ee['username'];
 
 ?></h4>

         
</div>
        
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                

              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-three-cells"></i></div><strong>Total Products</strong>
                    </div>
                    <div class="number dashtext-1"><?php $sql = "SELECT * FROM products";
                    if ($result = mysqli_query($conn, $sql)) {
                    $rowcount1 = mysqli_num_rows( $result );
                    printf($rowcount1);
                    }
                    ?>
                 </div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: <?php
                    $per = ($rowcount1/100)*100;
                    echo "$per%"; ?>" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div> <section>
                 </section>

              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-list"></i></div><strong>Total Category</strong>
                    </div>

                    <div class="number dashtext-3"><?php $sql = "SELECT * FROM category";
                    if ($result = mysqli_query($conn, $sql)) {
                    $rowcount2 = mysqli_num_rows( $result );
                    printf($rowcount2);
                    }
                    ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: <?php
                    $per = ($rowcount2/100)*100;
                    echo "$per%"; ?>" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>

                 <section>
                 </section>
             
          <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-website"></i></div><strong>Total <br>Order</strong>
                    </div>
                    <div class="number dashtext-3"><?php $sql = "SELECT * FROM `order_details`";
                    if ($result = mysqli_query($conn, $sql)) {
                    $rowcount2 = mysqli_num_rows( $result );
                    printf($rowcount2);
                    }
                    ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: <?php
                    $per = ($rowcount2/100)*100;
                    echo "$per%"; ?>" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              

              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-windows"></i></div><strong>Customize Orders</strong>
                    </div>
                    <div class="number dashtext-1"><?php $sql = "SELECT * FROM customize_order";
                    if ($result = mysqli_query($conn, $sql)) {
                    $rowcount2 = mysqli_num_rows( $result );
                    printf($rowcount2);
                    }
                    ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: <?php
                    $per = ($rowcount2/100)*100;
                    echo "$per%"; ?>" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <section>
                 </section>

              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-three-cells"></i></div><strong> Out of Stock Products</strong>
                    </div>
                    <div class="number dashtext-1"><a href="outofstock.php"><?php $sql = "SELECT * FROM products where stock=0";
                    if ($result = mysqli_query($conn, $sql)) {
                    $rowcount1 = mysqli_num_rows( $result );
                    printf($rowcount1);
                    }
                    ?></a>
                 </div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: <?php
                    $per = ($rowcount1/100)*100;
                    echo "$per%"; ?>" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-1"></div>
                  </div>
                </div>
              </div>
              <section>
                 </section>

              <div class="col-md-3 col-sm-6">
                <div class="statistic-block block">
                  <div class="progress-details d-flex align-items-end justify-content-between">
                    <div class="title">
                      <div class="icon"><i class="icon-user-outline"></i></div><strong>Total <br> Suppliers</strong>
                    </div>
                    <div class="number dashtext-3"><?php $sql = "SELECT * FROM `supplerdetails`";
                    if ($result = mysqli_query($conn, $sql)) {
                    $rowcount2 = mysqli_num_rows( $result );
                    printf($rowcount2);
                    }
                    ?></div>
                  </div>
                  <div class="progress progress-template">
                    <div role="progressbar" style="width: <?php
                    $per = ($rowcount2/100)*100;
                    echo "$per%"; ?>" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-template dashbg-3"></div>
                  </div>
                </div>
              </div>
              <section>
                  </section>
                  
                 
                  <div class="col-12">
                   
                      </div>
                                        </div>
                  
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
   
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>