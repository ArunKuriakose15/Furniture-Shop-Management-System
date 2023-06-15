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
                    <h2 class="tm-block-title d-inline-block"> Out of Stock Products </h2>
                  </div>
                </div>
                <br>
                <br>
                                <table cellpadding="18px" cellspacing="50px" bgcolor="#8a8d93" border=5px >
            
                                <tbody border="8px">
                                                <tr align="center">
                                                    <th >PRODUCT ID</th>
                                                    <th >PRODUCT NAME</th>
                                                    <th >CATEGORY</th>
                                                    <th >PRICE</th>
                                                    <th >ACTION</th>
                                                    </tr>
                                       
                                        <?php

                                       $sql = "SELECT * FROM products where stock=0 ";
                                       $result = mysqli_query($conn, $sql);
                                      while ($rows = mysqli_fetch_array($result)) 
                                      {
              
						   {
                
                                       ?>
                                        
                          <tr align="center">
                    <td align="center"><?php echo $rows['pid'] ?></td>
                    <td align="center"><?php echo $rows['pname'] ?></td>
                    <td align="center"><?php echo $rows['categoryname'] ?></td>
                    <td align="center"><?php echo $rows['price'] ?></td>
                    <td align="center"><a target="_self" href="updatestock.php?accept=<?php  echo $rows['pid'];?>"  type="submit"  class="btn btn-primary">UPDATE STOCK</a><br><br>
                   
                   </tr>
                <?php

            }
          }
        
                ?>
                </tbody>
            </table>
            </div>
               <?php          
          if (isset($_GET['accept'])) {
            $accept_id = $_GET['accept'];
            $delete_query = mysqli_query($conn, "UPDATE  `cutomize` SET custstatus='APPROVED' WHERE customid = $accept_id ") or die('query failed');
            if ($delete_query) {
                echo "<script> alert('Request accepted');window.location='custorderupdate.php';</script>";
            } else {
                echo "<script> alert('Request is not accepted');window.location='customrequest.php';</script>";
            }
        }
        ?>
        
        <?php          
          if (isset($_GET['reject'])) {
            $reject_id = $_GET['reject'];
            $delete_query = mysqli_query($conn, "UPDATE  `cutomize` SET custstatus='REJECTED' WHERE customid = $reject_id ") or die('query failed');
            if ($delete_query) {
                echo "<script> alert('Request rejected');window.location='customrequest.php';</script>";
            } else {
                echo "<script> alert('Request is not rejected');window.location='customrequest.php';</script>";
            }
        }
        ?>

<?php          
          if (isset($_GET['pending'])) {
            $pending_id = $_GET['pending'];
            $delete_query = mysqli_query($conn, "UPDATE  `cutomize` SET custstatus='PENDING' WHERE customid = $pending_id ") or die('query failed');
            if ($delete_query) {
                echo "<script> alert('Request is pending');window.location='customrequest.php';</script>";
            } else {
                echo "<script> alert('Request is not pending');window.location='customrequest.php';</script>";
            }
        }
        ?>
        
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