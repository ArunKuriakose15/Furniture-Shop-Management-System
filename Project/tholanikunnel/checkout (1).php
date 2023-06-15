<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <?php
session_start();
$ph=$_SESSION['phoneno'];
echo $ph;
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
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body>
    <div class="header--sidebar"></div>
    <!--  Header-->
  <?php
include 'header1.php';
  ?>
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
                            <input class="form-control"  name="username" id="name" type="text" required>
                            <p id="p1"></p>
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
                            <input class="form-control" name="phno" type="text" id="phone" maxlength="10" required>
                          </div>
                        </div>

                        <div class="form-group form-group--inline">
                          <label >Contact No<span>(Optional)</span>
                          </label>
                          <div class="form-group__content">
                            <input class="form-control"  name="phoneno" id="phoneno" maxlength="10" type="text" >
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
                      <table class="table ps-checkout__products" >
                        <thead>
                          <tr>
                            <th class="text-uppercase">Product</th>
                            <th class="text-uppercase">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                <?php
            
           
            include 'connect.php';
            $sql ="SELECT cart.qty,products.pid,products.pname,products.price,cart.grand FROM cart INNER JOIN products ON cart.pid = products.pid where cart.phoneno=$ph";
                        $res=mysqli_query($conn,$sql); 
             
             while($rows=mysqli_fetch_array($res))
            {
            
          ?>
                
                    
                       
                          <tr>
                            <td> <?php echo $rows['pname'] ?></td>
                            <td><?php echo $rows['grand'] ?></td>
                          </tr>
                          <?php  }?>
                              <tr>
                            <td>Order Total</td>
                            <td><?php
               $grand="SELECT SUM(grand)  AS grandtotal from cart where cart.phoneno=$ph";
               $grands=mysqli_query($conn,$grand);
               while($grandtotal=mysqli_fetch_array($grands))
               {
             echo  $grandtotal['grandtotal'];
             $g=$grandtotal['grandtotal']; }?></td>
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
    if(isset($_POST['submit']))
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
           $sq="INSERT INTO orderdetails (`phoneno`) values ($phonenumber)";
           $rs=mysqli_query($conn,$sq);
           if($rs){
            $last = "SELECT orid from orderdetails ORDER BY orid DESC LIMIT 1 ";
            $lastitem=mysqli_query($conn,$last);
            while ($las=mysqli_fetch_array($lastitem))
            {
              $la=$las['orid'];
              echo "<script> alert('<?php echo $la ?>');</script>";
            
          $sqls="INSERT INTO `custorder`( `orid`,`cartid`, `pid`,`phoneno`, `orqty`, `price`,`tax`,`amount`) SELECT $la,cart.cartid,cart.pid,$phonenumber,cart.qty,cart.total,products.tax,cart.grand FROM cart INNER JOIN products ON cart.pid = products.pid ";
          $ress=mysqli_query($conn,$sqls);
        
          if($ress)
          {
           $f=" UPDATE `orderdetails` SET `grand`=(SELECT SUM(g.amount) FROM `custorder` AS g WHERE g.orid=orderdetails.orid) WHERE EXISTS (SELECT * FROM custorder AS g WHERE g.orid=orderdetails.orid)";
           $ff=mysqli_query($conn,$f);
           echo $phonenumber;
          
           $update ="SELECT cart.qty,products.pid,products.pname,products.price,cart.grand FROM cart INNER JOIN products ON cart.pid = products.pid where cart.phoneno=$ph";
           $up=mysqli_query($conn,$update); 
          while($upk=mysqli_fetch_array($up))
          {
           $proqty=$upk['qty'];
           $proid=$upk['pid'];
          $uppp="UPDATE products SET stock=stock-'$proqty' where pid='$proid'";
          $v=mysqli_query($conn,$uppp); 
          
        }

           $del="DELETE FROM `cart` WHERE phoneno='$ph'";
           $deli=mysqli_query($conn,$del);
           echo $method;
              if($method=="cod"){
          echo "<script> alert('Order placed successfully');</script>";
              }
              else
              echo "<script>window.location='payment1.php';</script>";
          }
        }
        }
      }
        
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
<?php
 $last = "SELECT orid from orderdetails ORDER BY orid DESC LIMIT 1 ";
 $lastitem=mysqli_query($conn,$last);
 while ($las=mysqli_fetch_array($lastitem))
 {
   echo $las['orid'];
  $la=$las['orid'];
  echo $la;
 }
?>

</html>
