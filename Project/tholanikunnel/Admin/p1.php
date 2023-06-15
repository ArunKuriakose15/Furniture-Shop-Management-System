<?php
session_start();
include("header.php");
?>
<html>
  <body>
<?php
            include 'connect.php';     
        
                $pid=$_POST['productid'];
            $sql ="SELECT * from products where pid='$pid'";
            $run=mysqli_query($conn,$sql);

        if($rows=mysqli_fetch_array($run))
        {
           
                ?>
</div>
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Product Details</h2>
                  </div>
                </div> 
                <br><br>
        <form action="" method="post" class="tm-edit-product-form">
           <table width="600px" height="250px" align="center" >         
        
                   <tr><td > <div class="form-group mb-3">
                      <label
                                                 >Product Name
                      </label></td><td>
                      <input
                        name="name"
                        type="text"
                        value="<?php echo $rows['pname']?>"
                          class="form-control validate"
                      />
                    </div></td></tr>
                   <tr><td > <div class="form-group mb-3">
                    <label
                                                 >Product ID
                      </label></td><td>
                      <input
                        name="productid"
                        type="text"
                        value="<?php echo $rows['pid']?>"
                          class="form-control validate"
                      />
                    </div></td></tr>
                  <tr><td >  <div class="form-group mb-3">
                        <label
                         
                          >Category</label
                        ></td><td>
                                       <input type="text"  value="<?php echo $rows['categoryname']?>">      </div></td></tr>
                   <tr><td >   <div class="form-group mb-3">
                        <label
                         
                          >Description</label
                        ></td><td>
                        <textarea  value= "<?php echo $rows['pdescription']?>"                
                          class="form-control validate tm-small"
                          rows="5"
                                                 ><?php echo $rows['pdescription']?> </textarea>
                      </div></td></tr>
                     
                      
                       <tr><td >   <div class="form-group mb-3">
                              <label
                                  >Brand
                              </label></td><td>
                              <input
                              value="<?php echo $rows['brand']?>"
                                class="form-control validate"
                                data-large-mode="true"
                              />
                                                          </div></td></tr>
                                                          <tr><td ><div class="form-group mb-3"> <label
                    for="stock"
                    >supplier ID
                  </label></td><td>
                  <input
                  value="<?php echo $rows['supplierid']?>"
                      class="form-control validate"
                      data-large-mode="true"
                    /></div></td></tr>
                           <tr><td > <div class="form-group mb-3">
                              <label
                                                               >Units In Stock
                              </label></td><td>
                              <input
                              value="<?php echo $rows['stock']?>"
                              class="form-control validate"
                              data-large-mode="true"
                            />
                          </div></td></tr>

                      <tr><td >  <div class="form-group mb-3">
                          <label
                          >Dimension
                          </label></td><td>
                          <input
                          value="<?php echo $rows['dimension']?>"
                          class="form-control validate"
                          data-large-mode="true"
                        />
                      </div></td></tr>
                                         <tr><td > <div class="tm-product-img-edit mx-auto"><label
                          >Product Image
                          </label></td><td>
                      <img src="<?php echo $rows['pimage']; ?>" width = "200px" height="200px">
                        <i
                          class="fas fa-cloud-upload-alt tm-upload-icon"
                                                 ></i>
                      </div></td></tr>
                     <tr><td > <div class="form-group mb-3"><label
                        for="stock"
                        >Price
                      </label></td><td>
                      <input
                      value="<?php echo $rows['price']?>"
                      class="form-control validate"
                      data-large-mode="true"
                    /></div></td></tr>
                   <tr><td ><div class="form-group mb-3"> <label
                    for="stock"
                    >Material
                  </label></td><td>
                  <input
                  value="<?php echo $rows['material']?>"
                      class="form-control validate"
                      data-large-mode="true"
                    /></div></td></tr>
                    <tr><td ><div class="form-group mb-3"> <label
                    for="stock"
                    >Custom Status
                  </label></td><td>
                  <input
                  value="<?php echo $rows['customstatus']?>"
                      class="form-control validate"
                      data-large-mode="true"
                    /></div></td></tr>
                    <tr><td ><div class="form-group mb-3"> <label
                    for="stock"
                    >Tax
                  </label></td><td>
                  <input
                  value="<?php echo $rows['tax']?>"
                      class="form-control validate"
                      data-large-mode="true"
                    /></div></td></tr>
        </table><br>                                      
                       <div class="col-12">
                    <input type="submit" name="delete" class="btn btn-primary btn-block text-uppercase" value="DELETE PRODUCT" width=25% >
                  </div>
                  </form>
                       <?php
                        if(isset($_POST['delete']))
                        {
                        $productid=$_POST['productid'];
                      
                          $sqls ="DELETE from products where pid='$productid'";
                          $res=mysqli_query($conn,$sqls);
                      if($res)
                      {
                        echo "<script> alert('product is deleted');window.location='viewproduct.php'</script>";
                        
                      }
    }
  }

else
{
    echo "<script>alert('product is not found');window.location='viewproduct.php'</script>";
        }
        ?>  
      

      <?php
     
           
   
        ?>
   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>