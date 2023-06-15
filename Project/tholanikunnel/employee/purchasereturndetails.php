<?php
include 'header2.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>purchase </title>
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

<body>

            <!-- row -->

            <body>
        </div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Purchase Return Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="post" class="tm-edit-product-form">
                      <div class="form-group mb-3">
                        <label
                        
                          >Purchase return ID
                        </label>
                        <input name="pr_id" type="text"  class="form-control validate"   />
                        
                                                                   </div>    
                      <label
                                           >
                    </label>
                    <div class="form-group mb-3">
                        <label
                         
                          >Date of return
                        </label>
                        <input   name="dor"  type="date" class="form-control validate"  />
                          
                      </div>
                                                                          </div>

                <div class="form-group mb-3 col-xs-12 col-sm-6">
                 
              </div>
                            
           
                                         </div>
                      </div>
            
                                        </div>
                 
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" width=25% >SEARCH</button>
                        </div>
                      </div>
                    </form>

                    <br>
                    <br>
                <div class="row">
                    <div class="col">
                        
                                <div class="table-responsive">
                                <table cellpadding="18px" cellspacing="50px" bgcolor="#8a8d93" border=5px >
            
            <tbody border="8px">
                            <tr align="center">
                                                        <th >PURCHASE RETURN ID</th>
                                                    <th >RETURN DATE</th>
                                                    <th >DAMAGE</th>
                                                    
                                                    
                                                    <th >PURCHASE ID</th>
                                                   
                                                    <th >RETURN QUANTITY</th>
                                                    
                                                    </tr>
                                        </thead>
                                        <?php
                                   if(isset($_POST['submit'])){
                                       $pur_id=$_POST['pr_id'];
                                       $dop=$_POST['dor'];
                                       $sql = "SELECT * FROM purchase_return where prid='$pur_id' or prdate='$dop' ";
                                       $result = mysqli_query($conn, $sql);
                                      while ($rows = mysqli_fetch_array($result)) {
                                       ?>
                                          <tbody>
                          <tr align="center">
                    <td  class="td"><?php echo $rows['prid'] ?></td>
                    <td class="td"><?php echo $rows['prdate'] ?></td>
                    <td class="td"><?php echo $rows['prdamage'] ?></td>
                    <td class="td"><?php echo $rows['purchaseid'] ?></td>
                    <td class="td"><?php echo $rows['prqty'] ?></td>
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