<?php session_start();
include 'connect.php';
if(!isset($_SESSION['phoneno'])){
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
}else $ph=$_SESSION['phoneno'];
$e="SELECT * FROM `customer2` where phoneno=$ph AND user=''";
$se=mysqli_query($conn,$e);
$ee=mysqli_fetch_array($se);
if(!$ee){
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
} ?>
<!DOCTYPE html>
<html lang="en">
 <?php
 include 'connect.php';
 $ph=$_SESSION['phoneno'];
 
 
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="../tholanikunnel/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="logo.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>THOLANIKUNNEL FURNITURE</title><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLibre+Baskerville:400,700" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/furniture-icon/style.css">
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/lightGallery-master/dist/css/lightgallery.min.css">
    <link rel="stylesheet" href="css/style.css">
   
  </head>
  <?php
  include 'connect.php';
  include 'header1.php';
  ?>
 
  <body>
    <div class="header--sidebar"></div>
    <!--  Header-->
 
    <div class="ps-hero bg--cover" data-background="images/hero/bread-1.jpg">
      <div class="ps-container">
        <h3>Customize Orders</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li class="active">Customize Orders</li>
          </ol>
        </div>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-container">
        <div class="ps-filter">
          <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 ">
                  <div class="ps-filter__trigger">
                    
                </div>
                
          </div>
        </div>
          </div>
          <div class="ps-content">
      <div class="ps-container">
        <div class="ps-cart-listing">
          <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                  <form method="POST">
                                <table  class="table ps-cart__table">
            <thead>
              <tr>
                <th> Products</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Status</th>
                 <th>Action</th>
              </tr>
            </thead>
                                        <?php

                                       $sql = "SELECT * FROM `cutomize` where phoneno='$ph' AND (custstatus='APPROVED' OR custstatus='REJECTED' OR custstatus='CANCELLED' OR custstatus='PENDING' OR custstatus='REQUEST')  ";
                                       $res=mysqli_query($conn,$sql); 
             
                                       while($rows=mysqli_fetch_array($res))
                                      {
                                     
                                    ?>
                                     
                                                  <tbody>
                                        <tr>
                                          <td><input type="hidden" name="customid" value="<?php echo $rows['customid'] ?>"><?php echo $rows['category'] ?></td>
                                        <td>  <?php
                                                    if($rows['amt']=="0"){?>
                                            </td>
                                            <?php }
                                            else { ?>
                                         
                                          <?php echo $rows['amt'] ?></td> <?php } ?>
                                          <td>
                                           <?php echo $rows['custqty'] ?>
                                              
                                                            </td> <td >
                                                    <?php
                                                    if($rows['custstatus']=="APPROVED"){?>
                                                   <font class="badge badge-xs badge-primary" style="background-color: green;" size="5px" color="green"><?php echo $rows['custstatus']?></font></td>
                                          <?php
                                                    }
                                                    else if($rows['custstatus']=="PENDING"){?>
                                                     <font class="badge badge-xs " style="background-color: orange;" size="5px" color="orange"><?php echo $rows['custstatus']?></font></td><?php } 
                                                     
                                                     else if($rows['custstatus']=="REQUEST"){?>
                                                      <font class="badge badge-xs " style="background-color: blue;" size="5px" color="blue"><?php echo $rows['custstatus']?></font></td><?php } 

                                                     else if($rows['custstatus']=="CANCELLED"){?>
                                                     <font class="badge badge-xs " style="background-color: red;" size="5px" color="red"><?php echo $rows['custstatus']?></font></td><?php } 

                                                     else if($rows['custstatus']=="REJECTED"){?>
                                                     <font class="badge badge-xs " style="background-color: red;"  size="5px" color="red"><?php echo $rows['custstatus']?></font></td><?php } ?>
                                          <td> <?php
                                                    if($rows['custstatus']=="APPROVED"){?>
                                            <button class="ps-btn ps-btn--sm"  name="submit" >Buy Now</button>
                                                                                      <?php } ?>
                                            <?php
                                                    if($rows['custstatus']=="CANCELLED"){?>
                                           
                                            <?php } ?>

                                          </td>
                                        </tr>
                                       
                                      </tbody>
                                  
                                    <?php
                           
                          
                                      }
                                      ?>
                </tbody>
            </table>
                                    </form>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
       if(isset($_POST['submit']))
       {
         $customid=$_POST['customid'];
         echo "$customid";
      $qty=$_POST['quantity']; 
      $s="INSERT INTO `customize_order`( `customid`, `orderqty`,`amount`,`total`) SELECT cutomize.customid,cutomize.custqty,cutomize.amt,cutomize.amt*cutomize.custqty  from cutomize where cutomize.customid=$customid";

      $re=mysqli_query($conn,$s);
                  if($re)
      {
        echo "<script>window.location='customcheckout.php';</script>";
      }
       }
?>
                <?php
                  
              if(!$res)
                { ?><h2 style="text-align:center"><?php
                  echo "No Orders";
                }
                ?>
<div>
      <div class="ps-pagination">
      </div>
</div>
    </main>
    
    
    <?php
include 'footer.php';
    ?>
    
    <div class="ps-loading"><div class="loader ">
<div class="loader__item"></div>
<div class="loader__item"></div>
<div class="loader__item"></div>
<div class="loader__item"></div>
<div class="loader__item"></div>
</div>
    </div>
    <script src="plugins/jquery.min.js"></script>
    <script src="plugins/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script src="plugins/imagesloaded.pkgd.js"></script>
    <script src="plugins/masonry.pkgd.min.js"></script>
    <script src="plugins/isotope.pkgd.min.js"></script>
    <script src="plugins/slick/slick/slick.min.js"></script>
    <script src="plugins/jquery.matchHeight-min.js"></script>
    <script src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script src="plugins/gmap3.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Custom scripts-->
    <script src="js/main.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
  </body>


</html>