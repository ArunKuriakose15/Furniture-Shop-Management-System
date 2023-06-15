<html>
<?php
include("header.php");
?>
<body>
</div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Add Employee</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                     <br> <table width="500Px" height="250px">
                     

                     <tr><td> <div class="form-group mb-3">
                        <label
                                                    >Employee Name
                        </label></td>
                      <td>  <input
                                                    name="name"
                          type="text"
                                required                     class="form-control validate"
                        /></td></tr>
                        <tr>
                     <td> <div class="form-group mb-3">
                        <label
                                                    >Employee Phonenumber
                        </label></td>
                       <td> <input
                                                    name="phoneno"
                          type="text"
                                required                     class="form-control validate"
                        />
                        </td></tr>
                      </div>
                      </div>
                      <tr><td> <div class="form-group mb-3">
                        <label
                                                    >Employee Email ID
                        </label></td>
                      <td>  <input
                                                    name="email"
                          type="email"
                                required                     class="form-control validate"
                        /></td></tr>
                      </div>
                      <tr><td><div class="form-group mb-3">
                        <label
                                                    >Employee Address
                        </label></td>
                       <td> <input
                                                    name="address"
                          type="text"
                                                 class="form-control validate"
                        />
                      </div></td></tr>
                     <tr><td> <div class="form-group mb-3">
                        <label
                                                    >Password
                        </label></td>
                       <td> <input
                                                    name="pass"
                          type="password"
                                                 class="form-control validate"
                        />
                      </div></td></tr>
                      <tr><td> <div class="form-group mb-3">
                        <label
                                                    >Confirm Password
                        </label></td>
                       <td> <input
                                                    name="confpass"
                          type="password"
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
    include("connect.php");
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $phonenumber=$_POST['phoneno'];
        $sid=$_POST['email'];
        $address=$_POST['address'];
        $pass=$_POST['pass'];
        $conf=$_POST['confpass'];
    $sql="INSERT INTO `customer2`(`username`, `phoneno`, `emailid`, `pass`, `confpass`, `user`, `caddress`) VALUES ('$name',' $phonenumber','$sid','$pass','$conf','emp',' $address')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      echo "<script> alert('registration complete')</script>";
      
    }
    else echo"<script> alert('supplier details already exists')</script>";
  }
    mysqli_close($conn);
        ?>
  </body>
</html>