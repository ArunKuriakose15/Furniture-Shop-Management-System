<!DOCTYPE html>
<html>
 <?php
include("header.php");
include("connect.php");
 ?>
      <!-- Sidebar Navigation end-->
     
        <!-- Page Header-->
      
         
        </div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
              <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Add Product</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="#" method="post" enctype="multipart/form-data" class="tm-edit-product-form">
                      <table width="600Px" height="250px" align="center">
                      <tr><td><div class="form-group mb-3">
                        <label
                          for="name"
                          >Product Name
                        </label></td>
                       <td> <input
                          id="name"
                          name="name"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div></td></tr>
                    <tr><td>  
                          <div class="form-group mb-3">
                              <label
                                  >Product ID
                              </label></td>
                             <td> <input
                                class="form-control validate"
                                data-large-mode="true"
                                required
                                name="pid";
                              />
</div><td></tr>
                      <tr><td><div class="form-group mb-3">
                        <label
                          for="category"
                          >Category</label
                        ></td>
                        <td><select
                          class="custom-select tm-select-accounts"
                          id="category"
                          name="pcategory" >
                          <option  selected>Select category</option>            
<?php
$cat="SELECT * FROM category";
$ca=mysqli_query($conn,$cat);
while($cate=mysqli_fetch_array($ca)){
  echo  $cate['catname'];
?>

<option value="<?php echo $cate['catname']; ?>"><?php echo $cate['catname']; ?></option>
<?php }?>
                         
                            </select>
                      </div></td></tr>
                      <tr><td><div class="form-group mb-3">
                        <label
                          for="description"
                          >Description</label
                        ></td>
                       <td> <textarea                    
                          class="form-control validate tm-small"
                          rows="5"
                          name="descript"
                                                > </textarea>
                      </div></td></tr>
                      <div class="form-group mb-3">
                       
                      </div>
                      <tr><td>
                          <div class="form-group mb-3">
                              <label
                                  >supplier ID
                              </label></td>
                             <td> <input
                                class="form-control validate"
                                data-large-mode="true"
                                name="supplier"
                              />
                                                          </div></td><tr>
                      
                        <tr><td width="300Px" align="left">    <tr><td>  <div class="form-group mb-3">
                              <label
                                                               >Units In Stock
                              </label></td><td>
                              <input
                              class="form-control validate"
                              data-large-mode="true"
                              name="pstock"
                            />
                          </div></td></tr>
                         <tr><td>   <tr><td><div class="form-group mb-3">
                            <label
                            >Dimension
                            </label></td><td>
                            <input
                            class="form-control validate"
                            data-large-mode="true"
                            name="dimension"
                          /> 
                          </div></td></tr>
                       <tr><td>   <tr><td><div class="form-group mb-3">
                      <label
                      
                        >Brand
                      </label></td><td>
                      <input
                      class="form-control validate"
                      data-large-mode="true"
                      name="brand"
                    />
                        </div></td></tr>
                        <tr><td>  <tr><td><div class="form-group mb-3">
                      <label
                      
                        >Tax
                      </label></td><td>
                      <input
                      class="form-control validate"
                      data-large-mode="true"
                      name="tax"
                    />
                        </div></td></tr>
                       <tr><td>  <tr><td> <div class="form-group mb-3">
                          <label
                          >Customization
                          </label></td><td>
                          <select
                  class="custom-select tm-select-accounts"
                  id="category"
                  name="pcustom"
                >
                  <option  selected>Select option</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                  </select>
                                               </div></td></tr>
                      
                    </div>
                   
                      <tr><td><div class="custom-file mt-3 mb-3">
                      <label
                        >Upload Image
                      </label></td><td>
                        <input name="fileInput" type="file"  />
                                              </div></td></tr>
                     <tr><td> <label
                        >Price
                      </label></td><td>
                      <input
                      class="form-control validate"
                      data-large-mode="true"
                      name="price"
                    /></td></tr>
                   <tr><td> <label
                    for="stock"
                    >Material
                  </label></td><td>
                  <select
                  class="custom-select tm-select-accounts"
                  id="category"
                  name="material"
                >
                  <option  selected>Select Material</option>
                  <option value="Wood">Wood</option>
                  <option value="Cane">Cane</option>
                  <option value="Steel">Steel</option>
                  <option value="Plastic">Plastic</option>
                  <option value="Iron">Iron</option>
                  <option value="Mdf">Mdf</option>
                  <option value="Plywood">Plywood</option>
                  <option value="Others">Others</option>
                </select>
                                  </div>
                </div></td></tr>
                <div class="form-group mb-3">
                 
              </div>
                            </div>
                      </div>
                                        </div>
</table><br>
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" width=25% >Add Product</button>
                  </div>
                </form>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>

    <?php
    
if(isset($_POST['submit']))
{
  $pid=$_POST['pid'];
	$name=$_POST['name'];
	$category=$_POST['pcategory'];
	$description=$_POST['descript'];
  $dimension=$_POST['dimension'];
  $supplier=$_POST['supplier'];
	$brand=$_POST['brand'];
  $stock=$_POST['pstock'];
  $tax=$_POST['tax'];
  $custom=$_POST['pcustom'];
  $price=$_POST['price'];
  $material=$_POST['material'];
  $fnm=$_FILES["fileInput"]["name"];
$dst="./images/".$fnm;
$dst1="images/".$fnm;
move_uploaded_file($_FILES["fileInput"]["tmp_name"],$dst);
$sql="INSERT INTO products VALUES('$pid','$name','$brand','$supplier','$description','$dimension',' $price','$stock','$tax','$material','$category','$custom','$dst1')";
$result=mysqli_query($conn,$sql);
if($result)
{
  echo "<script>alert('product is added successfully');</script>";
 
  exit();
}
}
mysqli_close($conn);
	?>
   
    <!-- JavaScript files-->
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