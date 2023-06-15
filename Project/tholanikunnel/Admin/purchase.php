<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Purchase </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/logo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <?php
include 'connect.php';
include 'header.php';
if(!$conn)
{
echo "connection failed";
}
?>
  <body>
</div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Add Supplier</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                     <br> <table width="500Px" height="250px">
                        <tr>
                     <td> <div class="form-group mb-3">
                        <label
                                                    >Product ID
                        </label></td>
                       <td> <input
                                                    name="pid"
                          type="text"
                                required                     class="form-control validate"
                        />
                        </td></tr>
                      </div>

                     <tr><td> <div class="form-group mb-3">
                        <label
                                                    >Supplier ID
                        </label></td>
                      <td>  <input
                                                    name="supplierid"
                          type="text"
                                required                     class="form-control validate"
                        /></td></tr>
                      </div>
                      <tr><td><div class="form-group mb-3">
                        <label
                                                    >Purchase Date
                        </label></td>
                       <td> <input
                                                    name="pdate"
                          type="date"
                                                 class="form-control validate"
                        />
                      </div></td></tr>
                     <tr><td> <div class="form-group mb-3">
                        <label
                                                    >Quantity
                        </label></td>
                       <td> <input
                                                    name="qty"
                          type="text"
                                                 class="form-control validate"
                        />
                      </div></td></tr>
                      <tr><td> <div class="form-group mb-3">
                        <label
                                                    >Amount
                        </label></td>
                       <td> <input
                                                    name="amount"
                          type="text"
                                                 class="form-control validate"
                        />
                      </div></td></tr>
                      </table>
                      <br>
                      <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" width=75% >ADD</button>
                  </div>
                    </form>


      <?php  
        if(isset($_POST['submit'])){
                $p_id=$_POST['pid'];
                $supp_id=$_POST['supplierid'];
                $pur_date=$_POST['pdate'];
                $qty=$_POST['qty'];
                $amt=$_POST['amount'];
               
            $sql =" INSERT INTO purchase (pid,supplierid,purchasedate,purchaseqty,purchaseamt)VALUES ('$p_id','$supp_id','$pur_date','$qty','$amt')";
            $run=mysqli_query($conn,$sql);      
                    if($run) {
                        echo '<script>alert("Successfully inserted")</script>';
                    }else{
                        echo '<script>alert("Not inserted")</script>';
            }
            
        } 
        ?>
              
          </div>
  
        </body>
        </html>