<!DOCTYPE html>
<?php
session_start(); 
?>
<html lang="en">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<link rel="shortcut icon" href="../tholanikunnel/Admin/img/logo.png">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<?php
$conn=mysqli_connect('localhost:3325', 'root','', 'registration');
if(!$conn)
{
echo "connection failed";
}
?>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt style="will-change: transform; transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
					<img src="images/pic3.png" alt="IMG">
				</div>

				<form method ="POST"class="login100-form validate-form"  >
					<span class="login100-form-title">
						 LOGIN
					</span>

					<div class="wrap-input100 validate-input" data-validate = "invalid phone number">
						<input class="input100" type="text" name="phoneno" id="phone" maxlength="10" placeholder="phone number">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" name="submit" id="submitForm" value="LOGIN">
							
						
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="../login/forgotpassword.php">
							 Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href= "../registration1/index.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>  
    $(document).ready(function() {
      $('#submitForm').click(function(){
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
			</div>
		</div>
	</div>
	
	<?php

if(isset($_POST["submit"]))
{
	$phoneno=$_POST["phoneno"];
	$password=$_POST["pass"];
	$sql="select * from customer2 where (phoneno='$phoneno' AND pass='$password') ";
	$result=mysqli_query($conn,$sql);
	if($result)
{
  echo "login  complete";
}else
{
	echo "login not  complete";
}
	$row=mysqli_fetch_array($result);
	if($row>0)
	{
		switch($row['user'] )
                    {                
                        case 'admin':
                            {
                                $_SESSION['phoneno']=$phoneno;
								echo "<script>window.location=' ../tholanikunnel/admin/index.php'</script>";
                           
                            exit();
                            }
        
							case 'emp':
								{
									$_SESSION['phoneno']=$phoneno;
									echo "<script>window.location=' ../tholanikunnel/employee/index3.php'</script>";
								
								exit();
								}
                        case '':
                            {
								$_SESSION['phoneno']=$phoneno;
								echo "<script>window.location='../tholanikunnel/index-2.php'</script>";
								exit();
                            }
							default:
							{
								echo "<script>alert('Invalid Phone number/ Password');window.location='login.php'</script>";
							}       
                        }
										} 
										else echo "<script>alert('Invalid Phone number/ Password');window.location='login.php'</script>"; 
									}   
                               
?>

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
