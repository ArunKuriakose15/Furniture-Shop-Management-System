<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register </title>
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
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Register Your Account</h1>
                  </div>
                  
                </div>
              </div>
            </div>
 <div class="col-lg-6 bg-white">

              <div class="form d-flex align-items-center">
                <div class="content">
				<form method=post action=#>
                  
                    <div class="form-group-material">
                      <input id="register-username" type="text" name="userid" required data-msg="Please enter your userid" class="input-material">
                      <label for="register-username" class="label-material">UserId</label>
                    </div>
               
                    <div class="form-group-material">
                      <input id="register-password" type="password" name="password" required data-msg="Please enter your password" class="input-material">
                      <label for="register-password" class="label-material">Password        </label>
                    </div>
                    
                    <div class="form-group text-center">
                      <input type="Submit" value="Register" name="submit" class="btn btn-primary">
                    </div>
                  </form>
				  <small>Already have an account? </small><a href="login.html" class="signup">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<?php
    $conn =mysqli_connect("localhost","root","shop");      
if(isset($_POST['submit'])){
    	$userid=$_POST['userid'];
    	$password=$_POST['password'];
    $ins =mysqli_query("INSERT INTO admin values('$userid','$password')");         
            if($ins) 
            {   echo"success";
            }
            else{
   echo "Error";
	}
    mysqli_close($conn);
} 
?>
  </body>
</html>