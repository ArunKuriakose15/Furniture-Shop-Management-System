<!DOCTYPE html>
<html>
<head><link rel="shortcut icon" href="img/logo.png"></head>

<body>
<?php
include 'connect.php';
include 'header.php';
?>
        <body>
</div>
            <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Customize Order Details</h2>
                  </div>
                </div>
      <br>
      <br><br><br>       
                                <table   cellpadding="15px" cellspacing="50px" bgcolor="#8a8d93" border=5px  >
            
                                <tbody border="8px">
                                                <tr>
                                                    <th>ORDER ID</th>
                                                    <th>CATEGORY </th>
                                                    <th>MOBILE NUMBER</th>
                                                    <th>REQUEST DATE</th>
                                                    <th>DUE DATE</th>
                                                    <th>QUANTITY</th>
                                                    <th>AMOUNT</th>
                                                    <th>REQUIREMENT</th>
                                                    <th>STATUS</th>
                                                    <th>ACTION</th>
                                                </tr>
                                       
                                        <?php

                                       $sql = "SELECT customize_order.custorid,customize_order.customid,cutomize.category,cutomize.phoneno,customize_order.orderdate,customize_order.ddate,customize_order.orderqty,customize_order.orderqty*customize_order.amount AS amount,cutomize.requirements,customize_order.status FROM customize_order INNER JOIN cutomize ON customize_order.customid=cutomize.customid ";
                                       $result = mysqli_query($conn, $sql);
                                      while ($rows = mysqli_fetch_array($result)) {
                                       ?>
                                          <tbody>
                          <tr>
                    <td class="td"><?php echo $rows['customid'] ?></td>
                    <td class="td"><?php echo $rows['category'] ?></td>
                    <td class="td"><?php echo $rows['phoneno'] ?></td>
                    <td class="td"><?php echo $rows['orderdate'] ?></td>
                    <td class="td"><?php  echo $rows['ddate'] ?></td>
                    <td class="td"><?php echo $rows['orderqty'] ?></td>
                    <td class="td"><?php echo $rows['amount'] ?></td>
                    <td class="td"><?php echo $rows['requirements'] ?></td>
                   
                    <td class="td"><span class="badge badge-xs badge-primary"><?php echo $rows['status'] ?></td></span>
                    <td ><a target="_blank" href="bill1.php?customid=<?php  echo $rows['customid'];?>" type="submit"  class="btn btn-primary">Print</a></td>
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
         
      
    
          
     
</body>


</html>