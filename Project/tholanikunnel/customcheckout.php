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
    <link href="favicon.png" rel="icon">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>tholanikunnel Furnitures</title><link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLibre+Baskerville:400,700" rel="stylesheet">
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
    <header class="header" >
      <div class="header__top">
        <div class="ps-container">
          <div class="row">
                
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  
                </div>
          </div>
                 
      </div>
      <nav class="navigation">
        <div class="ps-container"><a class="ps-logo" href="index-2.php"><img src="images/pic3.png" alt=""></a>
              <ul class="main-menu menu">
                <li class="current-menu-item menu-item-has-children"><a href="index-2.php">Home</a>
                                  </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Category</a>
                  <div class="mega-menu">
                    <div class="mega-wrap">
                      <div class="mega-column">
                        <ul class="mega-item mega-features">
                          <li><a href="1product-list.html">WOODEN FURNITURE</a></li>
                          <li><a href="1product-list.html">CANE PRODUCTS</a></li>
                          <li><a href="1product-list.html">MATTRESS</a></li>
                          <li><a href="1product-list.html">KIDS ACCESSORIES</a></li>
                          <li><a href="1product-list.html">DECOR ITEMS</a></li>
                          <li><a href="1product-list.html">MDF PRODUCTS</a></li>
                          <li><a href="1product-list.html">LOCKERS</a></li>
                        </ul>
                      </div>
                      <div class="mega-column">
                        <h4 class="mega-heading">Tables </h4>
                        <ul class="mega-item">
                          <li><a href="1product-list.html">Wooden Table</a></li>
                          <li><a href="1product-list.html">MDF Table</a></li>
                          <li><a href="1product-list.html">Steel Table</a></li>
                          <li><a href="1product-list.html">Plastic Tables</a></li>
                          <li><a href="1product-list.html">Office Table</a></li>
                          <li><a href="1product-list.html">Dining Table</a></li>
                          <li><a href="1product-list.html">Study Table</a></li>
                        </ul>
                      </div>
                      <div class="mega-column">
                        <h4 class="mega-heading">Sofa & Chair</h4>
                        <ul class="mega-item">
                          <li><a href="1product-list.html">Leather Sofa </a></li>
                          <li><a href="1product-list.html">Corner Sofa</a></li>
                          <li><a href="1product-list.html">Resin Sofa</a></li>
                          <li><a href="1product-list.html">Wooden Sofa</a></li>
                          <li><a href="1product-list.html">Wooden Chair</a></li>
                          <li><a href="1product-list.html">Plastic Chair</a></li>
                          <li><a href="1product-list.html">Cane chair</a></li>
                        </ul>
                      </div>
                      <div class="mega-column">
                        <h4 class="mega-heading">Almaras & Waldrobe</h4>
                        <ul class="mega-item">
                          <li><a href="1product-list.html">Steel Almara</a></li>
                          <li><a href="1product-list.html">Wooden Almara</a></li>
                          <li><a href="1product-list.html">MDF Waldrobe</a></li>
                          <li><a href="1product-list.html">Wooden Waldrobe</a></li>
                          <li><a href="1product-list.html">MDF Cabinet</a></li>
                          <li><a href="1product-list.html">Bedside Drawers</a></li>
                          <li><a href="1product-list.html">Wooden Drawers</a></li>
                        </ul>
                      </div>
                      <div class="mega-column">
                        <h4 class="mega-heading">Brand</h4>
                        <ul class="mega-item">
                          <li><a href="1product-list.html">ARRIS</a></li>
                          <li><a href="1product-list.html">DUROFLEX</a></li>
                          <li><a href="1product-list.html">HYFURN</a></li>
                          <li><a href="1product-list.html">NILKAMAL</a></li>
                          <li><a href="1product-list.html">REPOSE</a></li>
                          <li><a href="1product-list.html">SUPREME</a></li>
                          <li><a href="1product-list.html">SHERLON`</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li><a href="#">Cutomize</a></li>
                <li class="menu-item-has-children"><a href="#">Pages</a>
                      <ul class="sub-menu">
                        <li class="menu-item-has-children"><a href="compare.html">Product</a>
                              <ul class="sub-menu">
                                <li><a href="1product-list.html">Product List</a></li>
                                <li><a href="product-list-no-sidebar.html">Product List No Sidebar</a></li>
                                <li><a href="product-detail.html">Product Detail</a></li>
                              </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="whishlist.html">Other Pages</a>
                              <ul class="sub-menu">
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="404-page.html">404-page</a></li>
                                                               <li><a href="compare.html">Compare</a></li>
                                                              </ul>
                        </li>
                      </ul>
                </li>
              
                <li><a href="contact-us.html">Contact</a></li>
                <li><div class="header__actions"></div><li class=" menu-item-has-children"><a href="#">Account</a>
                  <ul class="sub-menu">
                    <li><a href="checkout.html">My Profile</a></li>
                    <li><a href="file:///C:/xampp/htdocs/login/login.php">Login&Register</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="whishlist.html">Whishlist</a></li>
                                     </ul>
            </li>
           
            <div class="menu-toggle"><span></span></div>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>1</i></span><img src="images/market.svg" alt=""></a>
              <div class="ps-cart__listing">
                <div class="ps-cart__content">
                  <div class="ps-cart-item"><a class="ps-cart-item__close" href="#"></a>
                    <div class="ps-cart-item__thumbnail"><a href="product-detail.html"></a><img src="images/product/Item-7.jpg" alt=""></div>
                    <div class="ps-cart-item__content"><a class="ps-cart-item__title" href="product-detail.html">Wooden Rack</a>
                      <p><span>Quantity:<i>1</i></span><span>Total:<i>₹10120</i></span></p>
                    </div>
                  </div>
                                                    </div>
                <div class="ps-cart__total">
                  <p>Number of items:<span>1</span></p>
                  <p>Item Total:<span>₹10120</span></p>
                </div>
                <div class="ps-cart__footer"><a class="ps-btn" href="cart.html">Check out<i class="furniture-next"></i></a></div>
              </div>
            </div></div> </li>
              </ul>
          
          <form class="ps-form--search" action="http://warethemes.com/html/flourish/do_action" method="post"><i class="furniture-search"></i>
            <input class="form-control" type="text" placeholder="Find product">
            <button>Search</button>
          </form>
        </div>
        </div>
      </nav>
    </header>
    <div class="ps-hero bg--cover" data-background="images/hero/bread-1.jpg">
      <div class="ps-container">
        <h3>Check out</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li class="active">Check out</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="ps-checkout">
      <div class="ps-container">
        <form class="ps-form--checkout" action="" method="post">
          <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                  <div class="ps-checkout__billing">
                    <h3>Shipping Details</h3>
                       
                        <div class="form-group form-group--inline">
                          <label > Name<span>*</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control"  name="username" type="text" required>
                          </div>
                        </div>
                       
                        <div class="form-group form-group--inline">
                          <label >Email Address<span>*</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control" name="emailid" type="email" required>
                          </div>
                        </div>
                        
                        <div class="form-group form-group--inline">
                          <label >Registered Phone<span>*</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control" name="phno" id="phone" maxlength="10" type="text" required>
                          </div>
                        </div>

                        <div class="form-group form-group--inline">
                          <label >Contact No<span>(Optional)</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control" name="phoneno" id="phoneno" maxlength="10" type="text" >
                          </div>
                        </div>
                        <div class="form-group form-group--inline">
                          <label >Address<span>*</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control" name="address" type="text" required>
                          </div>
                        </div>
                      
                        <div class="form-group form-group--inline">
                          <label >Pincode<span>*</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control" name="pincode"  type="text" required>
                          </div>
                        </div>
                    
                    
                  </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                  <div class="ps-checkout__order">
                    <header>
                      <h3>Your Order</h3>
                    </header>
                    <div class="content">
                      <table class="table ps-checkout__products">
                        <thead>
                          <tr>
                            <th class="text-uppercase"> Order ID</th>
                            <th class="text-uppercase">Quantity</th>
                          </tr>
                        </thead>
                        <tbody>
                <?php
            
           
            include 'connect.php';
            $sql ="SELECT * FROM customize_order";
                        $res=mysqli_query($conn,$sql); 
             
             while($rows=mysqli_fetch_array($res))
            {
            
          ?>
                
                    
                       
                          <tr>
                            <td> <?php echo $rows['custorid'] ?></td>
                            <td><?php echo $rows['orderqty'] ?></td>
                          </tr>
                          <?php  }?>
                              <tr>
                            <td>Order Total</td>
                            <td name="grand"><?php
               $grand="SELECT SUM(total)  AS grandtotal from customize_order";
               $grands=mysqli_query($conn,$grand);
               while($grandtotal=mysqli_fetch_array($grands))
               {
                   
             echo  $grandtotal['grandtotal']; 
             $g= $grandtotal['grandtotal'];}?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <footer>
                      <h3>Payment Method</h3>
                      <div class="form-group cheque">
                        <div class="ps-radio ps-radio--small">
                          <?php
                          if($g>=10000)
                          { ?>
                          <input class="form-control" type="radio" value="cod" id="rdo01" name="payment" >
                          <label for="rdo01">Cash On Delivery</label>
                        </div>
                         </div>
                      <div class="form-group paypal">
                        <div class="ps-radio ps-radio--small">
                          <input class="form-control" type="radio" value="online" name="payment" id="rdo02" >
                          <label for="rdo02">Online Payment</label> 
                          <?php 
                          }
                          else
                          {
                          ?>
                           <div class="form-group paypal">
                        <div class="ps-radio ps-radio--small">
                          <input class="form-control" type="radio" value="online" name="payment" id="rdo02" >
                          <label for="rdo02">Online Payment</label>   </div>
                          <?php
                          }
                          ?>
                      
                        <ul class="ps-payment-method">
                          <li><a href="#"><img src="images/payment/1.png" alt=""></a></li>
                          <li><a href="#"><img src="images/payment/2.png" alt=""></a></li>
                          <li><a href="#"><img src="images/payment/rupay.png" alt=""></a></li>
                          
                        </ul>
                        <button class="ps-btn ps-btn--fullwidth" name="submit">Place Order</button>
                      </div>
                    </footer>
                  </div>


                  <?php
if($g>=50000)
{
                    ?>
                  <div background-color="red" class="ps-shipping">
 
                  <h3 class="mt-40">FREE DELIVERY</h3>
                    <p>YOUR ORDER IS ELIGIBLE FOR FREE DELIVERY AND CASH ON DELIVERY </p>
                   
                  </div>
                  <?php
}
else if(($g>=10000)&&($g<50000)){
?>
<div background-color="red" class="ps-shipping">
 
 <h3 class="mt-40">DELIVERY CHARGES </h3>
   <p>YOUR ORDER IS ELIGIBLE FOR CASH ON DELIVERY. THE DELIVERY CHARGES MUST PAID ON DELIVERY TIME.</p>
   
 </div>
 <?php 
}else {
?>
<div background-color="red" class="ps-shipping">
 
 <h3 class="mt-40">CASH ON DELIVERY NOT AVAILABLE </h3>
   <p>YOUR ORDER IS NOT ELIGIBLE FOR CASH ON DELIVERY. THE DELIVERY CHARGES MUST PAID ON DELIVERY TIME.</p>
   
 </div>
 <?php 
}
?>
          </div>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>  
    $(document).ready(function() {
      $('#submit').click(function(){
        var phone = $('#phone').val();
        var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(phone == ""){
            $("#phoneError").text("Please enter phone").css("color","red");
        }else if(!phone.match(phoneNum) || phone.length != 10){
            $("#phoneError").text("Please enter valid phone").css("color","red");
        }else{
            $("#phoneError").text("Phone number is valid").css("color","green");
        }
      });
      $("#phone").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                $("#phoneError").html("Enter only digits").css('color','red');
                return false;
            }
        });
    });
</script>
<script>  
    $(document).ready(function() {
      $('#submit').click(function(){
        var phone = $('#phoneno').val();
        var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(phone == ""){
            $("#phoneError").text("Please enter phone").css("color","red");
        }else if(!phone.match(phoneNum) || phone.length != 10){
            $("#phoneError").text("Please enter valid phone").css("color","red");
        }else{
            $("#phoneError").text("Phone number is valid").css("color","green");
        }
      });
      $("#phoneno").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                $("#phoneError").html("Enter only digits").css('color','red');
                return false;
            }
        });
    });
</script>
        </form>

         
        <?php
    if(isset($_POST['submit']))
    {
        if(isset($_POST['payment']))
    {
        $name=$_POST['username'];
        $phonenumber=$_POST['phno'];
        $changephone=$_POST['phoneno'];
        $emailid=$_POST['emailid'];
        $address=$_POST['address'];
        $pincode=$_POST['pincode'];
        $method=$_POST['payment'];
        $res="SELECT * from customer2 where phoneno='$phonenumber'";
        $resl=mysqli_query($conn,$res);
        $rows=mysqli_fetch_array($resl);
        if(!$rows)
        {
          echo "<script> alert('Registered phone number incorrect');</script>";
        }

    if($rows)
        {        
        $sql="UPDATE customer2 SET username=' $name',contactno='$changephone',emailid=' $emailid',caddress=' $address',pin=' $pincode'  WHERE phoneno='$phonenumber '";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
          $sqls="INSERT INTO `customize_order`( `customid`, `amount`, `orderqty`, `total`) SELECT cutomize.customid,cutomize.amt,cutomize.custqty,cutomize.amt*cutomize.custqty FROM customize_order INNER JOIN cutomize ON customize_order.customid = cutomize.customid ";
          $ress=mysqli_query($conn,$sqls);
          if($ress)
          {
            
            $sd="DELETE FROM `cutomize` WHERE customid=cutomize.customid; ";
            $del=mysqli_query($conn,$sd);
            if($del)
            {
              
            
              if($method=="cod"){
                echo "<script> alert('Order placed successfully');</script>";
              }
              else
              echo "<script>window.location='payment.php';</script>";
          }}
        }
      }
    }
    else
    echo "<script> alert('Please select payment option');</script>";
      }
?>

      </div>
    </div>
    <div class="ps-partners">
      <div class="ps-container">
      <div class="ps-slider--partners owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="50" data-owl-nav="false" data-owl-dots="false" data-owl-item="7" data-owl-item-xs="3" data-owl-item-sm="5" data-owl-item-md="6" data-owl-item-lg="7" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/logos/Duroflex.png" alt=""><img src="images/logos/supreme.png" alt=""><img src="images/logos/repose.png" alt=""><img src="images/logos/hyfurn.png" alt=""><img src="images/logos/sunidra.png"  alt=""><img src="images/logos/arris.png" alt="" ><img src="images/logos/kurlon.png" alt=""<img src="images/logos/nilkamal.png" alt="" align="left" ></div>
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
