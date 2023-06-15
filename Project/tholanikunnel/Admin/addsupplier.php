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
                                                    >Supplier ID
                        </label></td>
                       <td> <input
                                                    name="supplierid"
                          type="text"
                                required                     class="form-control validate"
                        />
                        </td></tr>
                      </div>

                     <tr><td> <div class="form-group mb-3">
                        <label
                                                    >Supplier Name
                        </label></td>
                      <td>  <input
                                                    name="sname"
                          type="text"
                                required                     class="form-control validate"
                        /></td></tr>
                      </div>
                      <tr><td><div class="form-group mb-3">
                        <label
                                                    >Supplier Address
                        </label></td>
                       <td> <input
                                                    name="saddress"
                          type="text"
                                                 class="form-control validate"
                        />
                      </div></td></tr>
                     <tr><td> <div class="form-group mb-3">
                        <label
                                                    >Supplier Phone Number
                        </label></td>
                       <td> <input
                                                    name="sphno"
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
    include("connect.php");
    if(isset($_POST['submit']))
    {
        $name=$_POST['sname'];
        $phonenumber=$_POST['sphno'];
        $sid=$_POST['supplierid'];
        $address=$_POST['saddress'];
    $sql="INSERT INTO supplerdetails VALUES(' $sid',' $name',' $address',' $phonenumber')";
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