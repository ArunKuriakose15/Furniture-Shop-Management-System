<?php


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
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLibre+Baskerville:400,700" rel="stylesheet">
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
   
    <header class="header" >
      <div class="header__top">
        <div class="ps-container">
          <div class="row">
                
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  
                </div>
          </div>
                 
      </div>
      <nav class="navigation">
        <div class="ps-container"><a target="_self" class="ps-logo" href="index-2.php"><img src="images/pic3.png" alt=""></a>
              <ul class="main-menu menu">
                <li class="current-menu-item menu-item-has-children"><a target="_self" href="index-2.php">Home</a>
                                  </li>
               
                <li class="menu-item-has-children has-mega-menu"><a target="_self" href="customize.php">Customize</a>
                 
                </li>
                <li class="menu-item-has-children"><a target="_self" href="#">Products</a>
                      <ul class="sub-menu">
                        <li class="menu-item-has-children"><a target="_self"  href="product_display.php"> All Products</a>
                              <ul class="sub-menu">
                                <li><a target="_self" target="_self" href="customerorder.php">All orders</a></li>
                                                              
                              </ul>
                        </li>
                        
                      </ul>
                </li>
              
              
                <li><div class="header__actions"></div><li class=" menu-item-has-children"><a target="_self" href="#">Account</a>
                  <ul class="sub-menu">
                    <li><a target="_self" href="profile.php">My Profile</a></li>
                    <li><a target="_self" href="../login/login.php"  >Logout</a></li>
                    <li><a target="_self" href="checkout.php">Checkout</a></li>
                    <li><a target="_self" href="customize_order.php">Customization Requests</a></li>
                    <li><a target="_self" href="customizationorder.php">Customization Orders</a></li>
                                     </ul>
            </li>
           <?php
 include 'connect.php';
 $sql ="SELECT products.pimage,cart.qty,products.pid,products.pname,cart.total,total*cart.qty AS grand FROM cart INNER JOIN products ON cart.pid = products.pid where cart.phoneno=$ph";
        
  $res=mysqli_query($conn,$sql); 
  $r=mysqli_num_rows($res);

?>
            <div class="menu-toggle"><span></span></div>
            <div class="ps-cart"><a target="_self" class="ps-cart__toggle" href="#"><span><i><?php echo $r ?></i></span><img src="images/market.svg" alt=""></a>
              <div class="ps-cart__listing">
                <div class="ps-cart__content">
                  <div class="ps-cart-item"><a target="_self" ><h3><font color="yellow">PRODUCTS</font></h3></a><br>
                  
                  <?php 
                     while($rows=mysqli_fetch_array($res))
                     {
                       ?>
                    <div class="ps-cart-item__thumbnail"><a target="_self" href="cart.php"></a><img src="../tholanikunnel/Admin/<?php echo $rows['pimage'] ; ?>"></div>
                    <div class="ps-cart-item__content"><a target="_self" class="ps-cart-item__title" ><?php echo $rows['pname'] ?></a>
                      <p><span><i>Quantity  :<?php echo $rows['qty'] ?></i></span><span><i>Total:<?php echo $rows['total'] ?></i></span></p>
                    </div>
                    <?php } ?> 
                  </div>
                                                   </div>
                
                <div class="ps-cart__footer"><a target="_self" class="ps-btn" href="cart.php">Go to cart<i class="furniture-next"></i></a></div>
              </div>
            </div></li>
              </ul>
          
              <form class="ps-form--search" action="product_search.php" method="post"><i class="furniture-search"></i>
            <input class="form-control" type="text" name="proname" placeholder="Find product">
            <button name="submit">Search</button>
          </form>
       
      </nav>
    </header>
          </div>
         
  </body>
</html>