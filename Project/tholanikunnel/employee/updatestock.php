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
                    <h2 class="tm-block-title d-inline-block">Update Stock Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                      

                      <div class="form-group mb-3">
                        <label
                                                    >Product ID
                        </label>
                        <input
                                                    name="productid"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>
                      
                     <div class="form-group mb-3">
                        <label
                                                    >Quantity
                        </label>
                        <input
                                                    name="quantity"
                          type="text"
                                                    class="form-control validate"
                        />
                      </div>

                      
                      
                      <div class="col-12">
                    <button type="submit" name="update" class="btn btn-primary btn-block text-uppercase" width=75% >UPDATE  STOCK</button>
                  </div>
                    </form>

                  
	<?php
  
    if(isset($_POST['update']))
    {
        $productid=$_POST['productid'];
        $quantity=$_POST['quantity'];
        
       $res="SELECT * from products where pid='$productid'";
       
        $resl=mysqli_query($conn,$res);
        $numrows=mysqli_num_rows($resl);
    if($numrows>0)
        {
                 
        $sql="UPDATE products SET stock=$quantity WHERE pid='$productid '";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      echo "<script> alert('stock details updated');</script>";
      
    }
    else{
        echo "<script> alert('stock details not updated');</script>";
    }
}
else
    {
      echo "<script> alert('inavlid product ID');</script>";
    }
  
    mysqli_close($conn);
}
        ?>
  </body>
</html>