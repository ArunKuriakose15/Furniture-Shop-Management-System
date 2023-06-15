<?php session_start();
include 'connect.php';
if (!isset($_SESSION['phoneno'])) {
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
} else $ph = $_SESSION['phoneno'];
$e = "SELECT * FROM `customer2` where phoneno=$ph AND user=''";
$se = mysqli_query($conn, $e);
$ee = mysqli_fetch_array($se);
if (!$ee) {
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
} ?>
<!DOCTYPE html>
<?php
include 'connect.php';
$ph = $_SESSION['phoneno'];
$e = "SELECT UPPER (`username`) AS username FROM `customer2` where phoneno=$ph AND user=''";
$se = mysqli_query($conn, $e);
$ee = mysqli_fetch_array($se);
if ($ee) {
  echo "<br> HI"; ?><h4 style="color: orange;"><?php
                                            echo $ee['username'];

                                            ?></h4><?php } ?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link href="apple-touch-icon.png" rel="shortcut icon">
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
  <?php
  include 'header1.php';
  include 'connect.php';
  ?>
  <?php
  $sq = "SELECT banner.bid,banner.price,banner.bimage,banner.pid,products.pname,products.pdescription FROM banner INNER JOIN products ON banner.pid=products.pid";
  $resul = mysqli_query($conn, $sq);
  $rb = mysqli_num_rows($resul);

  ?>
  <div class="ps-slider--banner owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="9000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
    <?php
    while ($ro = mysqli_fetch_array($resul)) {
    ?>
      <div class="ps-product--banner">

        <div class="ps-product__thumbnail"><a href="product_details.php?id=<?php echo $ro['pid'] ?>"><img src="../tholanikunnel/Admin/<?php echo $ro['bimage']; ?>" alt=""></a></div>
        <div class="ps-product__content">
          <h3><?php echo $ro['pname'] ?></h3>
          <p><?php echo $ro['pdescription'] ?></p>
          <h4> ₹<?php echo $ro['price'] ?></h4>
          <div class="ps-product__actions"><a class="ps-btn" href="product_details.php?id=<?php echo $ro['pid'] ?>">Add to cart</a></div>
        </div>
      </div><?php } ?>
  </div>
  </div>

  <div class="ps-section ps-home-categories">
    <div class="ps-container">
      <div class="ps-section__header text-center">
        <p>Welcome to the shop</p>
        <h3 class="ps-section__title">Shop by category</h3><span class="ps-section__line"></span>
      </div>
      <div class="ps-section__content ps-col-tiny">
        <table align="center">
          <div class="row">
            <tr>
              <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="sofa&chair.php"></a><i class="furniture-sofa-2"></i><a href="sofa&chair.php">Sofa &amp; Chair</a></div>
              </td>

              <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="shelf.php"></a><i class="furniture-table-8"></i><a href="shelf.php">Shelf</a></div>
              </td>
              <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="seats.php"></a><i class="furniture-office-chair"></i><a href="seats.php">Seats</a></div>
              </td>
              <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="cabinets.php"></a><i class="furniture-cabinet-1"></i><a href="cabinets.php">Cabinets</a></div>
              </td>
              <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
                <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="dining.php"></a><i class="furniture-table-2"></i><a href="dining.php">Dining</a></div>
              </td>
            </tr>
          </div>
          <tr>
            <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
              <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="bedroom.php"></a><i class="furniture-bed"></i><a href="bedroom.php">Bedroom</a></div>
            </td>
            <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
              <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="stands.php"></a><i class="furniture-shelf-3"></i><a href="stands.php">Stands</a></div>
            </td>
            <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
              <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="chairs.php"></a><i class="furniture-armchair"></i><a href="chairs.php">Chairs</a></div>
            </td>

            <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
              <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="sofa.php"></a><i class="furniture-sofa2"></i><a href="sofa.php">Sofa</a></div>
            </td>
            <td class="col-lg-2 col-md-3 col-sm-3 col-xs-12 ">
              <div class="ps-block--category" data-mh="category"><a class="ps-block__overlay" href="table.php"></a><i class="furniture-desk2"></i><a href="table.php">Table</a></div>
            </td>
          </tr>
        </table>
      </div>
    </div>
</body>

</div>
<div class="ps-section ps-home-best-product">
  <div class="ps-container">
    <div class="ps-section__header text-center">
      <p>Choose your need item</p>
      <h3 class="ps-section__title">LATEST ARRIVALS</h3><span class="ps-section__line"></span>
    </div>
    <div class="ps-section__content mt-100">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">

          <?php
          $sql = "SELECT * FROM `products` order by pid DESC LIMIT 8;";
          $result = mysqli_query($conn, $sql);
          $r = mysqli_num_rows($result);
          ?>
          <p>Showing <?php echo $r ?> of <?php echo $r ?> results</p>
        </div>
      </div>
    </div>

  </div>
</div>
<form method="POST" action="product_details(1).php">
  <div class="col">
    <?php
    while ($rows = mysqli_fetch_array($result)) {

    ?>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
        <div class="ps-product">
          <div class="ps-product__thumbnail">


            <img src="../tholanikunnel/Admin/<?php echo $rows['pimage']; ?>" width="200px" height="200px" alt=""><a class="ps-product__overlay" href="product_details.php?id=<?php echo $rows['pid'] ?>"></a>

            <div class="ps-product__content full">
              <a class="ps-product__title" href="product_details.php?id=<?php echo $rows['pid'] ?>"><?php echo $rows['pname'] ?></a>
              <div class="ps-product__categories"><a href="product-listing.html"><? ?></a></div>
              <p class="ps-product__price">
                ₹<?php echo $rows['price'] ?>
              <div> <?php
                    if ($rows['stock'] <= 0) {
                      echo "<h4 style='color:red;'>Out of Stock</h4>";
                    } else {
                      echo "<h4 style='color:green'>In Stock</h4>";
                    }
                    ?></div>
              </p><a class="ps-btn ps-btn--sm" href="product_details.php?id=<?php echo $rows['pid'] ?>">View Details</a>

            </div>
          </div>
          <div class="ps-product__content">
            <a class="ps-product__title" href="product-detail-2.html"><?php echo $rows['pname'] ?></a>

            <p class="ps-product__price">
              ₹<?php echo $rows['price'] ?>
            </p>
          </div>
        </div>
      </div>
  </div>
  </div>
  </div>
  </div>
  </div>
<?php

    }

?>


</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="ps-home-features">
  <div class="ps-section__header text-center">
    <h2 class="ps-section__title">AUTHORIZED DEALER</h2><span class="ps-section__line"></span>
  </div>
</div>
<div class="ps-home-features">
  <div class="ps-section__header text-center">
    <h2 class="ps-section__title"></h2><span class="ps-section__line"></span>
  </div>
</div>
<div class="ps-section__right">
  <div class="ps-section__content">
    <h5 class="ps-container">We are authorized dealers of the well known brands,which provides wide variety of products with guranteed quality</h5>
    <br>
    <div class="ps-container">
      <div class="ps-slider--partners owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="50" data-owl-nav="false" data-owl-dots="false" data-owl-item="7" data-owl-item-xs="3" data-owl-item-sm="5" data-owl-item-md="6" data-owl-item-lg="7" data-owl-duration="1000" data-owl-mousedrag="on"><img src="images/logos/Duroflex.png" alt=""><img src="images/logos/supreme.png" alt=""><img src="images/logos/repose.png" alt=""><img src="images/logos/hyfurn.png" alt=""><img src="images/logos/sunidra.png" alt=""><img src="images/logos/arris.png" alt=""><img src="images/logos/kurlon.png" alt="" <img src="images/logos/nilkamal.png" alt="" align="left"></div>
    </div>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>

<div class="ps-section ps-home-collection">
  <div class="ps-container">
    <div class="ps-section__header text-center">
      <h3 class="ps-section__title">COLLECTION</h3><span class="ps-section__line"></span>
    </div>
    <div class="ps-section__content">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
          <div class="ps-collection"><a href="#"><img src="images/collection/home-1-2.png" alt=""></a></div>
        </div>

      </div>
    </div>
    <div class="ps-section__footer pt-50"><a href="#"><img src="images/collection/home-1-2.jpg" alt=""></a></div>
  </div>
</div>
<div class="ps-section ps-home-blog">
  <div class="ps-container">
    <div class="ps-section__header text-center">

    </div>
  </div>
</div>
<div class="ps-home-open-time bg--parallax" data-background="images/background/home-feature.jpg">
  <div class="container">
    <div class="ps-section__content">
      <h3>Visit our store</h3>
      <p>THOLANIKUNNEL,Opposite To Union Bank ,Rajakumari<br> (+91)9446136143</p><a class="ps-btn" href="https://www.google.com/maps/place/Tholanikunnel+Furniture/@9.9666733,77.1442753,14.66z/data=!4m5!3m4!1s0x0:0x36d51d6eb3984cac!8m2!3d9.9688945!4d77.1508789">Locate Us</a>
      <div class="ps-open-time">
        <h4>Openning hour</h4>
        <p>Monday Holiday</p>
        <p>Tuesday to Sunday: 09:00 AM to 7:00 PM</p>
      </div>
    </div>
  </div>
</div>
<div class="ps-home-features-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
        <div class="ps-block--icon"><i class="furniture-delivery-truck-1"></i>
          <h4>Free Shipping <span> ON ORDER OVER ₹50000</span></h4>
          <p>We provide free shippping for an order value greater than ₹50000. For
            other orders delivery charges must applied.
          </p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
        <div class="ps-block--icon"><i class="furniture-sofa"></i>
          <h4> Cuztomization <span> CHOOSE YOUR ITEM</span></h4>
          <p>Make your own furnitures by using customize option.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
        <div class="ps-block--icon"><i class="furniture-credit-card-1"></i>
          <h4>Secure Payment <span> INFORMATION SECURITY</span></h4>
          <p>You can use different Debit/Credit cards for shopping.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 ">
        <div class="ps-block--icon"><i class="furniture-telephone"></i>
          <h4>need help <span> ALWAYS LISTEN</span></h4>
          <p>You can contact us on the mobile number provided or you can locate us by google.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
include 'footer.php';
?>

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
<script src="js/main.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsUcTjt43mTheN9ruCsQVgBE-wgN6_AfY&amp;region=GB"></script>
</body>

</html>