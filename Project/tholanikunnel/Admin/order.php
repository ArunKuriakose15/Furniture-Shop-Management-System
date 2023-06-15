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
                    <h2 class="tm-block-title d-inline-block"> Order Details</h2>
                  </div>
                </div>
                <br>
                <br>
                                <table cellpadding="18px" cellspacing="50px" bgcolor="#8a8d93" border=5px >
            
                                <tbody border="8px">
                                                <tr align="center">
                                                    <th >ORDER ID</th>
                                                    <th >CUSTOMER NAME</th>
                                                    <th >LOCATION</th>
                                                    <th >PHONE NUMBER</th>
                                                    
                                                    
                                                    <th >PRICE</th>
                                                   
                                                    <th >STATUS</th>
                                                    <th >ACTION</th>
                                                    </tr>
                                       
                                        <?php

                                       $sql = "SELECT  order_details.orid,customer2.username,customer2.caddress,customer2.phoneno,SUM(custorder.amount) AS amount FROM order_details INNER JOIN customer2 ON order_details.phoneno=customer2.phoneno INNER JOIN custorder ON custorder.phoneno=customer2.phoneno  ";
                                       $result = mysqli_query($conn, $sql);
                                      while ($rows = mysqli_fetch_array($result)) 
                                      $qry = $conn->query("SELECT * from `order_details` WHERE  NOT grand=0 order by orid desc ");
						while($row = $qry->fetch_assoc()){
              $ph= $row['phoneno'] ;
                           $r= $conn->query("SELECT * FROM customer2 where phoneno=$ph ");
 $t=mysqli_fetch_array($r);
						   {
                $items = $conn->query("SELECT  order_details.orid,customer2.username,customer2.caddress,customer2.phoneno,SUM(custorder.amount) AS amount FROM order_details INNER JOIN customer2 ON order_details.phoneno=customer2.phoneno INNER JOIN custorder ON custorder.phoneno=customer2.phoneno ");
                $dd=mysqli_fetch_array($items); 
                                       ?>
                                        
                          <tr align="center">
                    <td align="center"><?php echo $row['orid'] ?></td>
                    <td align="center"><?php echo $t['username'] ?></td>
                    <td align="center"><?php echo $t['caddress'] ?></td>
                    <td align="center"><?php echo $row['phoneno'] ?></td>
                   
                    <td align="center"><?php echo( $row['grand']+(($row['grand'])*0.18) ) ?></td>
                    
                    <td align="center"><span class="badge badge-xs badge-primary"><?php echo $row['status'] ?></td></span>
                    <td align="center"><a target="_blank" href="bill.php?orid=<?php  echo $row['orid'];?>" type="submit"  class="btn btn-primary">Print</a></td>
                   </tr>
                <?php

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