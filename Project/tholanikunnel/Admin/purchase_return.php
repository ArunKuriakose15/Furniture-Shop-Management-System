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
include 'conn.php';
if(!$conn)
{
echo "connection failed";
}
?>
  <body style="background-color:#2d3035;"> 
  <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header"> 
            <!-- Navbar Header--><a href="index.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">THOLANIKUNNEL</strong>  <strong>FURNITURE</strong></div>
              <!-- Breadcrumb-->
           <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item "><a href="index.php"  style="color:#DB6574">Home</a></li>
            <li class="breadcrumb-item active">Purchase  Return     </li>
          </ul>
        </div> 
        <h2 class="tm-block-title d-inline-block" align=center>Purchase Return</h2>
        <form  method=post action=# class="form-horizontal">
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Purchase Return ID</label>
                        <div class="col-sm-9">
                          <input  type="text" required name="Pr_ID"  placeholder="Purchase Return ID" class="form-control is-invalid">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Return Date</label>
                        <div class="col-sm-9">
                          <input  type="date"  name="Pr_date"  placeholder="Return Date" class="form-control is-invalid">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Damage</label>
                        <div class="col-sm-9">
                        <textarea  class="form-control is-invalid" name="Pdamage" placeholder="Damage" rows="10" cols="30"></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Purchase ID</label>
                        <div class="col-sm-9">
                          <input  type="text"  name="Pur_id" placeholder="Purchase ID"  class="form-control is-invalid">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-3 form-control-label">Damaged Quantity</label>
                        <div class="col-sm-9">
                        <input   type="text"  name="Prqty" placeholder="Damaged Quantity" class="form-control is-invalid"   >
                        </div>
                      </div>
                      <div class="form-group row">       
                        <div class="col-sm-9 offset-sm-3">
                          <input type="submit" value="ADD" name="submit" class="btn btn-primary">
                        </div>
                      </div>
                    </form>

      <?php  
        if(isset($_POST['submit'])){
                $Pr_ID=$_POST['Pr_ID'];
                $p_id=$_POST['Pr_date'];
                $Pdamage=$_POST['Pdamage'];
                $Pur_id=$_POST['Pur_id'];
                $Prqty=$_POST['Prqty']; 
            $sql =" INSERT INTO purchase_return VALUES ('$Pr_ID','$p_id','$Pdamage','$Pur_id','$Prqty')";
            $run=mysqli_query($conn,$sql);      
                    if($run) {
                        echo '<script>alert("Successfully inserted")</script>';
                    }else{
                        echo '<script>alert("Not inserted")</script>';
            }
            
        } 
        ?>
              </section>
          </div>
    
             <div class="footer__block block no-margin-bottom">
             </div>
      </nav>
        </body>
        </html>