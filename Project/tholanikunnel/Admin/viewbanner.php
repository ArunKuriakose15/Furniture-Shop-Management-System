<!DOCTYPE html>
<html>
  <head><link rel="shortcut icon" href="img/logo.png"></head>

<body>
<?php
include 'connect.php';
include 'header.php';
?>
            <!-- row -->
<body>
</div>
          
<div class="container tm-mt-big tm-mb-big">
          <div class="row">
          </div>
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block"> Banner Details</h2>
                  </div>
                </div>
                <br>
                <br>
                                <table cellpadding="18px" cellspacing="50px" bgcolor="#8a8d93" border=5px >
            
                                <tbody border="8px">
                                                <tr align="center">
                                                    <th >PRODUCT ID</th>
                                                    <th >PRODUCT NAME</th>
                                                    <th >PRICE</th>
                                                    <th >IMAGE</th>
                                                    <th>ACTION</th>
                                                                                                     </tr>
                                        <?php

                                       $sql = "SELECT  banner.pid,products.pname,banner.price,banner.bimage FROM banner INNER JOIN PRODUCTS ON banner.pid=products.pid ";
                                       $result = mysqli_query($conn, $sql);
                                      while ($rows = mysqli_fetch_array($result)) 
                                  {
              
                                       ?>
                                        
                          <tr align="center">
                    <td align="center"><?php echo $rows['pid'] ?></td>
                    <td align="center"><?php echo $rows['pname'] ?></td>
                    <td align="center"><?php echo $rows['price'] ?></td>
                    <td align="center"><img src="./<?php echo $rows['bimage']; ?>" width = "400px" height="200px"  alt=""></td>
                    <td align="center"><a target="_self" href="viewbanner.php?delete=<?php  echo $rows['pid'];?>" type="submit"  class="btn btn-primary">REMOVE</a></td>
                   </tr>
                <?php

            }
          
            if (isset($_GET['delete'])) {
              $delete_id = $_GET['delete'];
              $delete_query = mysqli_query($conn, "DELETE FROM `banner` WHERE pid = $delete_id ") or die('query failed');
              if ($delete_query) {
                  echo "<script> alert('Banner is removed');window.location='viewbanner.php';</script>";
              } else {
                  echo "<script> alert('Banner is not removed');window.location='viewbanner.php';</script>";
              }
          }
        
        
                ?>
                </tbody>
            </table>
            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          
      
       
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