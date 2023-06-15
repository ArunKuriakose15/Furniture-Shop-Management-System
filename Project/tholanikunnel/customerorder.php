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
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
 <?php
 $ph=$_SESSION['phoneno'];
 include 'connect.php';
 
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="../tholanikunnel/apple-touch-icon.png" rel="apple-touch-icon">
    <link rel="shortcut icon" href="../tholanikunnel/Admin/img/logo.png">
    <link href="../tholanikunnel/favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
   
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

  <body>
  
    <div class="header--sidebar"></div>
    <!--  Header-->
   
    <div class="ps-hero bg--cover" data-background="images/hero/bread-1.jpg"><img src="images/hero/contact-us.html" alt="">
      <div class="ps-container">
        <h3>MY ORDERS</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li class="active">ORDERS</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ps-content">
      <div class="ps-container">
        <div class="ps-cart-listing">
    <table class="table ps-cart__table">
            <thead>
            <tr align="center">
                                                    <th >ORDER ID</th>
                                                    <th >CUSTOMER NAME</th>
                                                    <th >ADDRESS</th>
                                                    <th >PHONE NUMBER</th>
                                                    
                                                    
                                                    <th >PRICE</th>
                                                    <th >ORDER DATE</th>
                                                    <th >STATUS</th>
                                                    <th >ACTION</th>
                                                    </tr>
                                       
                                                    <?php


$sql = "SELECT  order_details.orid,customer2.username,customer2.caddress,custorder.ordate,customer2.phoneno,SUM(custorder.amount) AS amount FROM order_details INNER JOIN customer2 ON order_details.phoneno=customer2.phoneno INNER JOIN custorder ON custorder.phoneno=customer2.phoneno where customer2.phoneno='$ph'";
$result = mysqli_query($conn, $sql);
while ($rows = mysqli_fetch_array($result)) 
$qry = $conn->query("SELECT * from `order_details` where phoneno='$ph' AND NOT grand='0' order by orid desc");
while($row = $qry->fetch_assoc()){
$ph= $row['phoneno'] ;
$r= $conn->query("SELECT * FROM customer2 where phoneno=$ph");
$t=mysqli_fetch_array($r);
{
$items = $conn->query("SELECT  order_details.orid,customer2.username,customer2.caddress,custorder.ordate,customer2.phoneno,SUM(custorder.amount) AS amount FROM order_details INNER JOIN customer2 ON order_details.phoneno=customer2.phoneno INNER JOIN custorder ON custorder.phoneno=customer2.phoneno ");
$dd=mysqli_fetch_array($items); 
$d=$row['orid'];
$sr=$conn->query("SELECT * FROM custorder where orid='$d'");
$ds=mysqli_fetch_array($sr);
?>
 
<tr class="tr">
<td  class="td"><?php echo $row['orid'] ?></td>
<td class="td"><?php echo $t['username'] ?></td>
<td class="td"><?php echo $t['caddress'] ?></td>
<td class="td"><?php echo $row['phoneno'] ?></td>
<td class="td"><?php echo( $row['grand']+(($row['grand'])*0.18) ) ?></td>
<td class="td"><?php echo $ds['ordate'] ?></td>
<td> 
                                                    <?php
                                                    if($row['status']=="APPROVED"){?>
                                                   <font size="5px" color="green"><?php echo $row['status']?></font></td>
                                          <?php
                                                    }
                                                    else if($row['status']=="PENDING"){?>
                                                     <font class="badge badge-xs " style="background-color: orange;" size="5px" ><?php echo $row['status']?></font></td><?php } 
                                                     
                                                     else if($row['status']=="CANCELLED"){?>
                                                     <font class="badge badge-xs " style="background-color: red;" size="5px" ><?php echo $row['status']?></font></td><?php } 

                                                     else if($row['status']=="REJECTED"){?>
                                                     <font class="badge badge-xs " style="background-color: red;" size="5px" ><?php echo $row['status']?></font></td><?php } 
                                                     else {?>
                                                     <font class="badge badge-xs badge-primary" style="background-color: green;" size="5px" ><?php echo $row['status']?></font></td><?php } ?>
                                          </span> 
<td class="td"><a target="_blank" href="../tholanikunnel/Admin/bill.php?orid=<?php  echo $row['orid'];?>" type="submit"  class="btn btn-primary">Print</a></td>
</tr>
<?php

}
}

?>
                </tbody>
        
          <?php
 
            
            
            ?>
            
              </table>
      
              <div >
      </div>
</div>
       
      </div>
    </div>
              
    <div class="ps-partners">
      <div class="ps-container">
        <div class="ps-slider--partners owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="50" data-owl-nav="false" data-owl-dots="false" data-owl-item="7" data-owl-item-xs="3" data-owl-item-sm="5" data-owl-item-md="6" data-owl-item-lg="7" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/logos/Duroflex.png" alt=""><img src="images/logos/supreme.png" alt=""><img src="images/logos/repose.png" alt=""><img src="images/logos/hyfurn.png" alt=""><img src="images/logos/sunidra.png"  alt=""><img src="images/logos/arris.png" alt="" ><img src="images/logos/kurlon.png" alt=""<img src="images/logos/nilkamal.png" alt="" align="left" ></div>
      </div>
    </div><?php
   


    
    
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
