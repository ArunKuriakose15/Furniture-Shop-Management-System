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
  
  <?php
  
  $ph=$_SESSION['phoneno'];
include 'header1.php';
  ?>
    <div class="ps-hero bg--cover" data-background="images/hero/bread-1.jpg">
      <div class="ps-container">
        <h3>My Profile</h3>
        <div class="ps-breadcrumb">
          <ol class="breadcrumb">
            <li><a href="index-2.php">Home</a></li>
            <li class="active">My Profile</li>
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
                    <h3>Your Details</h3>
                       <?php
$sql = "SELECT * FROM `customer2` where phoneno='$ph'  ";
$res=mysqli_query($conn,$sql); 

while($rows=mysqli_fetch_array($res))
{
                       ?>
                        <div class="form-group form-group--inline">
                          <label >Name<span>*</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control" style="color:#DB6574" name="uname" value="<?php echo $rows['username']?>" type="text" required>
                            <p id="p1"></p>
                          </div>
                        </div>
                  
                        <div class="form-group form-group--inline">
                          <label >Registered Phone<span>*</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control" style="color:#DB6574" name="phno" value="<?php echo $rows['phoneno']?>" readonly type="text" id="phone" maxlength="10" required>
                          </div>
                        </div>

                        <div class="form-group form-group--inline">
                          <label >Email<span>*</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control" style="color:#DB6574" name="emailid" value="<?php echo $rows['emailid']?>" type="email" required>
                          </div>
                        </div>

                        <div class="form-group form-group--inline">
                          <label >Address<span>*</span>
                          </label>
                          <div class="form-group__content">
                          <textarea class="form-control" rows="10" style="color:#DB6574" name="add"  value="" required><?php echo $rows['caddress']?></textarea>
                          </div>
                        </div>
                        <div class="form-group form-group--inline">
                          <label >PIN Code<span>*</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control" style="color:#DB6574" name="pin" value="<?php echo $rows['pin']?>" type="text" required>
                          </div>
                        </div>
                        <button class="ps-btn ps-btn-h" name="submit">UPDATE</button> 
                  </div>
                </div>
                <?php } ?>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
$('#submit').click(function(e) {
var firstname = $('#name').val();
var name_regex = /^[a-zA-Z]+$/;
 if (!firstname.match(name_regex) || firstname.length == 0) {
$('#p1').text("* For your name please use alphabets only *"); // This Segment Displays The Validation Rule For Name
$("#name").focus();
return false;
}
});
});
</script>
        </form>

         
        <?php
        include 'connect.php';
    if(isset($_POST['submit']))
    {
        $user=$_POST['uname'];
        //$phonenumber=$_POST['phno'];
        $email=$_POST['emailid'];
        $add=$_POST['add'];
        $pin=$_POST['pin'];
        $res="UPDATE customer2 SET username='$user',emailid='$email',caddress='$add',pin='$pin' where phoneno='$ph'";
        $resl=mysqli_query($conn,$res);
        if($resl)
        {
          echo "<script> alert('Profile updated');</script>";
        }
        else{
          echo "<script> alert('Try Again');</script>";
        }
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
