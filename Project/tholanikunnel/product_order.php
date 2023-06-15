<?php
session_start();
include 'connect.php';
if(!isset($_SESSION['phoneno'])){
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
}else $ph=$_SESSION['phoneno'];
$e="SELECT * FROM `customer2` where phoneno=$ph AND user=''";
$se=mysqli_query($conn,$e);
$ee=mysqli_fetch_array($se);
if(!$ee){
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
}
$ph=$_SESSION['phoneno'];
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
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
  
  ?>
 
  <body>
    <div class="header--sidebar"></div>
    <!--  Header-->
<?php 
include 'header1.php';
?>
    <div class="ps-hero bg--cover" data-background="images/hero/bread-1.jpg">
      <div class="ps-container">
        <h3>Product Orders</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li class="active">Product Orders</li>
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
          <style>
.tr{
  border-bottom:1px solid #005000;
  border-bottom-style:groove;
}
.td{
    padding-top: .5em;
    padding-bottom: .5em;
}
</style>
<div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                <div class="ps-content">
      <div class="ps-container">
        <div class="ps-cart-listing">
    <table class="table ps-cart__table">
            <thead>
            <tr>
                                    
                                                    <th>Order ID</th>
                                                    <th>Name</th>
                                                    <th>Address</th> 
                                                    <th>Phone  no</th>
                                                    <th>Amount</th>                                                    
                                                   <th>Delivery Date</th>                                               
                                                    <th>Status</th>
                                                    <th>View Bill</th>
                                                      
                                                </tr>
                                        </thead>
                                        <?php


$sql = "SELECT  order_details.orid,customer2.username,customer2.caddress,custorder.ordate,customer2.phoneno,SUM(custorder.amount) AS amount FROM order_details INNER JOIN customer2 ON order_details.phoneno=customer2.phoneno INNER JOIN custorder ON custorder.phoneno=customer2.phoneno where customer2.phoneno='$ph' AND custorder.amount=0";
$result = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_array($result)) 
$qry = $conn->query("SELECT * from `order_details` where phoneno='$ph'  order by orid desc  ");
while($row = $qry->fetch_assoc()){
$ph= $row['phoneno'] ;
$r= $conn->query("SELECT * FROM customer2 where phoneno=$ph");
$t=mysqli_fetch_array($r);
{
$items = $conn->query("SELECT  order_details.orid,customer2.username,customer2.caddress,custorder.ordate,customer2.phoneno,SUM(custorder.amount) AS amount FROM order_details INNER JOIN customer2 ON order_details.phoneno=customer2.phoneno INNER JOIN custorder ON custorder.phoneno=customer2.phoneno ");
$dd=mysqli_fetch_array($items); 
?>
 
<tr class="tr">
<td class="td"><?php echo $row['orid'] ?></td>
<td class="td"><?php echo $t['username'] ?></td>
<td class="td"><?php echo $t['caddress'] ?></td>
<td class="td"><?php echo $row['phoneno'] ?></td>
<td class="td"><?php echo( $row['grand']+(($row['grand'])*0.18) ) ?></td>
<td class="td"><?php echo $dd['ordate'] ?></td>

<td><span class="badge badge-xs badge-success" style="background-color: #0acf97;"><?php echo $row['status'] ?></td></span> 
<td class="td"><a target="_blank" href="./admin/bill.php?orid=<?php  echo $row['orid'];?>" type="submit"  class="btn btn-primary">Print</a></td>
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
                <?php
                                      
                  
               // else
               // { ?><h2 style="text-align:center"><?php
               //   echo "No Orders";
               // }
                ?>
<div>
      <div class="ps-pagination">
      </div>
</div>
    </main>
    <div class="ps-home-features-2">
      <div class="container">
        <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                <div class="ps-block--icon"><i class="furniture-delivery-truck-1"></i>
                  <h4>Free Shipping <span> ON ORDER OVER ₹11999</span></h4>
                  <p>Want to track a package? Find tracking information and order details from Your Orders.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                <div class="ps-block--icon"><i class="furniture-sofa"></i>
                  <h4>Everything Home <span> CHOOSE YOUR ITEM</span></h4>
                  <p>Shop zillions of finds, with new arrivals added daily.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                <div class="ps-block--icon"><i class="furniture-credit-card-1"></i>
                  <h4>Secure Payment <span> INFORMATION SECURITY</span></h4>
                  <p>Use the Shop Card for exclusive savings and financing options.</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
                <div class="ps-block--icon"><i class="furniture-hours"></i>
                  <h4>Support 24/7 <span> ALWAYS LISTEN</span></h4>
                  <p>We offer a 24/7 customer hotline so you’re never alone if you have a question.</p>
                </div>
              </div>
        </div>
      </div>
    </div>
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