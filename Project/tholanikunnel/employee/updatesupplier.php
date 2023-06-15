<?php
include 'header2.php';
include 'connect.php';
?>
<html>

<body>
</div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Update Supplier Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                      <div class="form-group mb-3">
                        <label
                                                    >Supplier ID
                        </label>
                        <input
                                                    name="sid"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>

                      <div class="form-group mb-3">
                        <label
                                                    >Supplier Name
                        </label>
                        <input
                                                    name="sname"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>

                      <div class="form-group mb-3">
                        <label
                                                    >Re-enter Supplier ID("If any change enter new Supplier ID")
                        </label>
                        <input
                                                    name="sid1"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>

                     <div class="form-group mb-3">
                        <label
                                                    >Supplier Phone Number
                        </label>
                        <input
                                                    name="sphone"
                          type="text"
                                                    class="form-control validate"
                        />
                      </div>

                      <div class="form-group mb-3">
                        <label
                                                    >Supplier Address
                        </label>
                        <textarea                    
                          class="form-control validate tm-small"
                          rows="5"
                          name="saddress"
                                                > </textarea>
                      </div>
                                           <div class="col-12">
                    <button type="submit" name="update" class="btn btn-primary btn-block text-uppercase" width=75% >UPDATE DETAILS</button>
                  </div>
                    </form>

                  	<?php
    
    if(isset($_POST['update']))
    {
        $sid=$_POST['sid'];
        $sid1=$_POST['sid1'];
        $name=$_POST['sname'];
        $phonenumber=$_POST['sphone'];
       $address=$_POST['saddress'];
       $res="SELECT * from supplerdetails where supplierid='$sid'";
       $resl=mysqli_query($conn,$res);
       $resl1=mysqli_fetch_array($resl);
    
   if($resl1)
       {
       $sql="UPDATE supplerdetails SET supplierid='$sid1',sname=' $name',sphone='$phonenumber',saddress=' $address'  WHERE supplierid='$sid '";
   $result=mysqli_query($conn,$sql);
   if($result)
   {
     echo "<script> alert('supplier details updated');</script>";
     
   }
     }
  else{
    echo "<script> alert('invalid Supplier ID');</script>";
  }
 }
   mysqli_close($conn);
       ?>
  </body>
</html>