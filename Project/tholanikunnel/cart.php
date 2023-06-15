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
include 'header1.php'; ?>
<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
 <?php
 $ph=$_SESSION['phoneno'];
 
 
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">
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
    
    <div class="ps-hero bg--cover" data-background="images/hero/bread-1.jpg"><img src="images/hero/contact-us.html" alt="">
      <div class="ps-container">
        <h3>Shopping Cart</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li class="active">Shopping Cart</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ps-content">
      <div class="ps-container">
        <div class="ps-cart-listing">
<?php
$ss="SELECT cart.cartid,cart.qty,products.pid,products.pname,products.stock,cart.total,cart.total*cart.qty AS grand FROM cart INNER JOIN products ON cart.pid = products.pid where cart.phoneno=$ph "; 
$sele=mysqli_query($conn,$ss);  
while($rr=mysqli_fetch_array($sele))
{
  $pid=$rr['pid'];
  if($rr['stock']==0){       
    $up="UPDATE cart SET `status`='OUT OF STOCK' WHERE `pid`='$pid'";
       
    }
    elseif($rr['qty']>$rr['stock']){
      $up="UPDATE cart SET `status`='NOT AVAILABLE' WHERE `pid`='$pid'"; 
      
    }
    else {
      $up="UPDATE cart SET `status`='AVAILABLE' WHERE `pid`='$pid'"; 
      
    }
    $update=mysqli_query($conn,$up);
  
  }                              
?>
        <table class="table ps-cart__table">
            <thead>
              <tr>
                <th>All Products</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
                 <th>Action</th>
              </tr>
            </thead>
    <?php
         include 'connect.php';
       

            $sql ="SELECT cart.cartid,cart.qty,cart.status,products.pid,products.pname,products.stock,cart.total,cart.total*cart.qty AS grand FROM cart INNER JOIN products ON cart.pid = products.pid where cart.phoneno=$ph";                                 
            $res=mysqli_query($conn,$sql);    
            if(mysqli_num_rows($res)>0){ 
            
             while($rows=mysqli_fetch_array($res))
            {
             
                
          ?>
              <tbody>
              <tr>
                <td><a class="ps-product--compare" href="product-detail.html"><img class="mr-15" src="images/product/item-1.html" alt=""> <?php echo $rows['pname'] ?></a></td>
                <td><?php echo $rows['total'] ?></td>
                <td>
                 <?php echo $rows['qty'] ?>
                   
            </form> </td>
                                  <td><?php echo $rows['grand']?></td>   
                                  <td>
                                  <?php
                                                    if($rows['status']=='OUT OF STOCK'){
                                                     ?>

                                                   <font  class="badge badge-xs " style="background-color: red;" size="5px"><?php echo "Out of Stock"?></font></td>
                                          <?php
                                                    }
                                                    else if($rows['status']=='NOT AVAILABLE'){
                                                      ?>
                                                     <font class="badge badge-xs " style="background-color: orange;" size="5px" ><?php echo "available quantity: ";?><?php echo $rows['stock'];?></font></td><?php } 
                                                     
                                                     else {
                                                     ?>
                                                     <font class="badge badge-xs " style="background-color: green;" size="5px" ><?php echo "Available"?></font></td><?php } 

?>

                                  </td>            
                <td>
                <a href="cart.php?delete=<?php echo  $rows['cartid']; ?> "><button name="submit" class="ps-remove"> </button></a>
                </td>
              </tr>
             
            </tbody>
        
          <?php
          
          
            }
          }
          else{
            ?>
         <h2> <?php  echo "no items"; ?></h2>
          <?php
          }
     
            ?>
            
              </table>
      
             
                      <div class="ps-cart__total">
                     
              <h3>Total Price: <span> <?php
               $grand="SELECT SUM(grand)  AS grandtotal from cart where phoneno=$ph AND `status`='AVAILABLE'";
               $grands=mysqli_query($conn,$grand);
               while($grandtotal=mysqli_fetch_array($grands))
               {
             echo  $grandtotal['grandtotal']; }?></span></h3></tr>
           <?php 
            $sql ="SELECT cart.cartid,cart.qty,cart.status,products.pid,products.pname,products.stock,cart.total,cart.total*cart.qty AS grand FROM cart INNER JOIN products ON cart.pid = products.pid where cart.phoneno=$ph";                                 
            $res=mysqli_query($conn,$sql);    
            if(mysqli_num_rows($res)>0){         
                 
             while($rows=mysqli_fetch_array($res))
            { 
if(!$rows['status']=='OUT OF STOCK' ) {
  ?>
                    <a class="ps-btn" href="checkout.php">Process to checkout</a>
         <?php  }
         
         else if(!$rows['status']=='NOT AVAILABLE'){ ?>
        <a class="ps-btn" href="checkout.php">Process to checkout</a>
       <?php   }
        else if($rows['status']=='AVAILABLE'){ ?>
          <a class="ps-btn" href="checkout.php">Process to checkout</a>
         <?php   }
         }
          } ?>
        </div>
       
      </div>
    </div>
              
    <div class="ps-partners">
      <div class="ps-container">
        <div class="ps-slider--partners owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="50" data-owl-nav="false" data-owl-dots="false" data-owl-item="7" data-owl-item-xs="3" data-owl-item-sm="5" data-owl-item-md="6" data-owl-item-lg="7" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/logos/Duroflex.png" alt=""><img src="images/logos/supreme.png" alt=""><img src="images/logos/repose.png" alt=""><img src="images/logos/hyfurn.png" alt=""><img src="images/logos/sunidra.png"  alt=""><img src="images/logos/arris.png" alt="" ><img src="images/logos/kurlon.png" alt=""<img src="images/logos/nilkamal.png" alt="" align="left" ></div>
      </div>
    </div><?php
    if (isset($_GET['delete'])) {
      $delete_id = $_GET['delete'];
      $delete_query = mysqli_query($conn, "DELETE FROM `cart` WHERE cartid = $delete_id ") or die('query failed');
      if ($delete_query) {
          echo "<script> alert('Product is deleted from the cart');window.location='cart.php';</script>";
      } else {
          echo "<script> alert('Product is  not deleted from the cart');window.location='cart.php';</script>";
      }
  }


    
    
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