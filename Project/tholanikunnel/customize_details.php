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
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
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
    
    <div class="ps-hero bg--cover" data-background="images/hero/bread-2.jpg">
      <div class="ps-container">
        <h3>Shop Page</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li class="active">Shop Page</li>
          </ol>
        </div>
      </div>
    </div>
    <?php
    $id="";
    if(isset($_GET['id']))
    {
      $id=$_GET['id']; 
      $sql = "SELECT * FROM `products` where pid='$id' ";
          $result = mysqli_query($conn, $sql);
      while ($rows = mysqli_fetch_array($result)) { 
?>

    <main class="ps-main">
      <div class="ps-container">
        <div class="ps-product--detail">
          <div class="row">
                <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 ">
                  <div class="ps-product__thumbnail">
                    <div class="ps-product__image">
                      <div class="item"><img src="../tholanikunnel/Admin/<?php echo $rows['pimage']; ?>" width = "500px" height="500px"  alt="" ></div>
                      
                    </div>
        
                  </div>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <div class="ps-product__info">
                   
                    <h1><?php echo $rows['pname'] ?></h1> 
                    <div class="ps-product__block ps-product__style">
                      <h4 >Brand</h4>
                      </div>
                    <div class="ps-product__short-desc">
                      <p><?php echo $rows['brand'] ?></p>
                    </div>
                    <div class="ps-product__block ps-product__style">
                      <h4 >Material</h4>
                      </div>
                    <div class="ps-product__short-desc">
                      <p><?php echo $rows['material'] ?></p>
                    </div>
                    <div class="ps-product__block ps-product__style">
                        <form action="#" method="post" enctype="multipart/form-data">
                        <div class="form-group--number">
                        <button class="minus"><span>-</span></button>
                    <input class="form-control" type="text" value="1" >
                    <button class="plus"><span>+</span></button>
                    </div>
                    </div>
                    <input class="form-control" type="hidden" name="category" value="<?php echo $rows['categoryname']  ?>" >
                    <div class="row">
                    <div class="form-group">
                    <label>Your Requriement <sup>*</sup></label>
                    <textarea class="form-control" rows="7" name="req"></textarea>
                  </div>
                  <div class="form-group">
                  <label  ><h4>Upload Your Design</h4></label>
                        <input type="file" name="img"/>
                       </div>
               </div>
                   
                    
                    
<div class="form-group submit">
                    <button class="ps-btn pl-60 pr-60" type="submit" name="submit" >Send Request</button>
                  </div>
                  </div>
                </div>
          </div>
          <div class="ps-product__content">
            <ul class="tab-list" role="tablist">
              <li class="active"><a href="#tab_01" aria-controls="tab_01" role="tab" data-toggle="tab">Description</a></li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="tab_01">
              <p><?php echo $rows['pdescription'] ?></p>
               </div>
               <?php
      } 
}
if(isset($_POST['submit']))
{
  $req=$_POST['req'];
  $cat=$_POST['category'];
  $fnm=$_FILES["img"]["name"];
$dst="./cimages/".$fnm;
$dst1="cimages/".$fnm;
move_uploaded_file($_FILES["img"]["tmp_name"],$dst);

$sql="INSERT INTO cutomize (`category`,`requirements`, `custimage`,`phoneno`,`custstatus`) VALUES ('$cat','$req','$dst1','$ph','REQUEST')";
$result=mysqli_query($conn,$sql);
if($result)
  {
  echo "<script>alert('Request Sented. Wait For Approve');window.location='customize_order.php';</script>";
  exit();
   }
else{
    echo "<script>alert('Try Again');</script>";
  exit();
     }
}
?>          
            </div>
          </div>
        </div>
      </div>
    </main>
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