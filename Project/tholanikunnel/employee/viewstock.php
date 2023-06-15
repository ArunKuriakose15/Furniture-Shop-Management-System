<?php
include 'connect.php';
include 'header2.php';
?>
<!DOCTYPE html>
<html>
  <head><link rel="shortcut icon" href="img/logo.png"></head>

<body>

            <!-- row -->
<body>
</div>
          
<div class="container tm-mt-big tm-mb-big">
          <div class="row">
          </div>
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block"> Stock Details</h2>
                  </div>
                </div>
                <br>
                <br>
                                <table cellpadding="18px" cellspacing="50px" bgcolor="#8a8d93" border=5px >
            
                                <tbody border="8px">
                                                <tr align="center">
                                                    <th >PRODUCT ID</th>
                                                    <th >PRODUCT NAME</th>
                                                    <th >QUANTITY</th>
                                                    
                                                    </tr>
                                       
                                        <?php

                                       $sql = "SELECT * FROM products ";
                                       $result = mysqli_query($conn, $sql);
                                      while ($rows = mysqli_fetch_array($result)) 
                                      {
            ?>
                                        
                          <tr align="center">
                    <td align="center"><?php echo $rows['pid'] ?></td>
                    <td align="center"><?php echo $rows['pname'] ?></td>
                    <td align="center"><?php echo $rows['stock'] ?></td>
                    
                   </tr>
                <?php

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