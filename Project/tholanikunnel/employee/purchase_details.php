<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>purchase details</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/logo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="../css/style1.css" rel="stylesheet">

</head>


<?php
include 'connect.php';
include 'header2.php';
?>
     <body>
        </div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">View Purchase Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="post" class="tm-edit-product-form">
                      
                                         
                      <label
                                           >
                    </label>
                    <div class="form-group mb-3">
                        <label
                          for="name"
                          >Purchase Date
                        </label>
                        <input
                         
                          name="date"
                          type="date"
                            class="form-control validate"
                            required
                        />
                      </div>
                                                                          </div>

              
                            
           
                                         </div>
                      </div>
            
                                        </div>
                 
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" width=25% >SEARCH</button>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                </form>
                
                                <table class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto"  cellpadding="8px" bgcolor="#8a8d93" border=5px >
            <tbody border="5px">
              <tr align="center" >
              <th>PURCHASE ID</th>
              <th>PRODUCT ID</th>
              <th>PURCHASE ID</th>
              <th>PURCHASE DATE</th>
              <th>QUANTITY</th>
              <th>AMOUNT</th>
            </tr>
                                    
                                        <?php
                                   if(isset($_POST['submit'])){
                                       
                                       $dop=$_POST['date'];
                                       $sql = "SELECT * FROM purchase where  purchasedate='$dop' and pid !=0 ";
                                       $result = mysqli_query($conn, $sql);
                                      while ($rows = mysqli_fetch_array($result)) {
                                       ?>
                                          <tbody>
                          <tr>
                    <td align="center"><?php echo $rows['purchaseid'] ?></td>
                    <td align="center"><?php echo $rows['pid'] ?></td>
                    <td align="center"><?php echo $rows['supplierid'] ?></td>
                    <td align="center"><?php echo $rows['purchasedate'] ?></td>
                    <td align="center"><?php echo $rows['purchaseqty'] ?></td>
                    <td align="center"><?php echo $rows['purchaseamt'] ?></td>
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
         
      
    
          
      </nav>
</body>


</html>