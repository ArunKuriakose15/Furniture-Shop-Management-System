
<?php
include 'header2.php';
include 'connect.php';
?><html>

<body>
</div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Update Customer Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                      <div class="form-group mb-3">
                        <label
                                                    >Customer Name
                        </label>
                        <input
                                                    name="username"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>

                      <div class="form-group mb-3">
                        <label
                                                    >Registered Mobile Number
                        </label>
                        <input
                                                    name="phno"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>
                      <div class="form-group mb-3">
                        <label
                                                    >Re-enter Mobile Number(if any change enter new mobile number)
                        </label>
                        <input
                                                    name="phoneno"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>
                     <div class="form-group mb-3">
                        <label
                                                    >Customer Email ID
                        </label>
                        <input
                                                    name="emailid"
                          type="text"
                                                    class="form-control validate"
                        />
                      </div>

                      <div class="form-group mb-3">
                        <label
                                                    >Customer Address
                        </label>
                        <textarea                    
                          class="form-control validate tm-small"
                          rows="5"
                          name="address"
                                                > </textarea>
                      </div>
                      <div class="form-group mb-3">
                        <label
                                                    >Pincode
                        </label>
                        <input
                                                    name="pincode"
                          type="text"
                                                    class="form-control validate"
                        />
                      </div>
                      <div class="col-12">
                    <button type="submit" name="update" class="btn btn-primary btn-block text-uppercase" width=75% >UPDATE DETAILS</button>
                  </div>
                    </form>

                  
	<?php
  
    if(isset($_POST['update']))
    {
        $name=$_POST['username'];
        $phonenumber=$_POST['phno'];
        $changephone=$_POST['phoneno'];
        $emailid=$_POST['emailid'];
        $address=$_POST['address'];
        $pincode=$_POST['pincode'];
        $res="SELECT * from customer2 where phoneno='$phonenumber'";
        $resl=mysqli_query($conn,$res);
    if(!$resl)
        {
            echo "<script> alert('inavlid customer name/mobile number');</script>";
        }
        $sql="UPDATE customer2 SET username=' $name',phoneno='$changephone',emailid=' $emailid',caddress=' $address',pin=' $pincode'  WHERE phoneno='$phonenumber '";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      echo "<script> alert('customer details updated');</script>";
      
    }
    else{
      echo "<script> alert('inavlid customer name/mobile number');</script>";
    }
  }
    mysqli_close($conn);
        ?>
  </body>
</html>