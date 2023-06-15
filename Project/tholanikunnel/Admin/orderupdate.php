<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer </title>
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
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <?php
  include 'connect.php';  
  include 'header.php';
?>
 <body>
</div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Update Customize Order Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                      

                      <div class="form-group mb-3">
                        <label
                                                    > Order ID
                        </label>
                        <input
                                                    name="orid"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>
                      
                      <div class="form-group mb-3">
                          <label
                          >Status
                          </label>
                          <select
                  class="custom-select tm-select-accounts"
                  id="category"
                  name="status"
                >
                  <option  selected>Select option</option>
                  <option value="APPROVED">APPROVED</option>
                  <option value="REJECTED">REJECTED</option>
                  <option value="CANCELLED">CANCELLED</option>
                  <option value="PENDING">PENDING</option>
                  <option value="PACKED">PACKED</option>
                  <option value="SHIPPED">SHIPPED
                  <option value="OUT OF DELIVERY">OUT OF DELIVERY</option>
                  <option value="DELIVERED">DELIVERED</option>
                  </option>

                  </select>
                                               </div>
                                              
                      
                      <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" width=75% >UPDATE </button>
                  </div>
                    </form>

      <?php
     
        if(isset($_POST['submit'])){
                $o_id=$_POST['orid'];
                $o_status=$_POST['status'];
               
            $sql ="UPDATE `order_details`  SET `status`='$o_status' where `orid`=$o_id ";
            $run=mysqli_query($conn,$sql);      
                    if($run) {
                        echo '<script>alert("Status Updated")</script>';
                    }else{
           echo '<script>alert("Not Updated")</script>';
            }
 
        } 
        ?>
        </section>
          </div>
    
           
      </nav>
        
        </body>
        </html>