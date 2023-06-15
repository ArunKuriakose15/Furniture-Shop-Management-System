<html>
<?php
include("header.php");
include 'connect.php';
?>
<body>
</div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Update  Password</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action=""  method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                      <div class="form-group mb-3">
                        <label
                                                    >Registered Phone number
                        </label>
                        <input
                                                    name="phoneno" id="phoneno" maxlength="10"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>

                      <div class="form-group mb-3">
                        <label
                                                    >Registered Email ID
                        </label>
                        <input
                                                    name="email"
                          type="email"
                                required                     class="form-control validate"
                        />
                      </div>

                      <div class="form-group mb-3">
                        <label
                                                    >New Password
                        </label>
                        <input
                                                    name="pass"
                          type="password"
                                required                     class="form-control validate"
                        />
                      </div>

                     <div class="form-group mb-3">
                        <label
                                                    >Confirm Password
                        </label>
                        <input
                                                    name="confpass"
                          type="password"
                                                    class="form-control validate"
                        />
                      </div>
                                           <div class="col-12">
                    <button type="submit" name="update" class="btn btn-primary btn-block text-uppercase" width=75% >UPDATE</button>
                  </div>
                    </form>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
			</div>
		</div>
	</div>
	
	<?php

if(isset($_POST["update"]))
{
	$phoneno=$_POST['phoneno'];
	$email=$_POST['email'];
	$password=$_POST['pass'];
	$confpass=$_POST['confpass'];
	$sql="UPDATE `customer2` SET `pass`='$password',`confpass`='$confpass' WHERE `phoneno`=$phoneno AND user='admin' ";
	$result=mysqli_query($conn,$sql);
	if($result)
{
	echo "<script>alert('Password is resetted');window.location='../../login/login.php'</script>";
}else
{
	echo "<script>alert('Registered details invalid');window.location='forgotpassword.php'</script>"; 
}
}
                               
?>

  </body>
</html>