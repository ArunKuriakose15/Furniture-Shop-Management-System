<?php
include 'header2.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html>

      <!-- Sidebar Navigation end-->
     
        <!-- Page Header-->
      
         
        </div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Update Product Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="post" enctype="multipart/form-data" class="tm-edit-product-form">
                      <div class="row">
                        <label
                         
                          >Product Name
                        </label>
                        <input
                         
                          name="name"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>
                      <div class="row">
                      <div class="form-group mb-3">
                              <label
                                  >Product ID
                              </label>
                              <input
                                class="form-control validate"
                                data-large-mode="true"
                                required
                                name="pid";
                              />
                              </div></div>
                      <div class="row">
                          <div class="form-group mb-3">
                              <label
                                  >Re-enter Product ID( To change Product ID, enter new Product ID)
                              </label>
                              <input
                                class="form-control validate"
                                data-large-mode="true"
                                name="newpid"
                              />
                                                          </div>
                      <div class="form-group mb-3">
                        <label
                         
                          >Category</label
                        >
                        <select
                          class="custom-select tm-select-accounts"
                          
                          name="pcategory"
                  
                        >
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
                      </div>
                      <div class="form-group mb-3">
                        <label
                         
                          >Description</label
                        >
                        <textarea                    
                          class="form-control validate tm-small"
                          rows="5"
                          name="descript"
                                                > </textarea>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                       
                      </div>
                      <div class="row">
                          <div class="form-group mb-3 col-xs-12 col-sm-6">
                              <label
                                  >supplier ID
                              </label>
                              <input
                                class="form-control validate"
                                data-large-mode="true"
                                name="supplier"
                              />
                                                          </div>
                      
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                              <label
                                                               >Units In Stock
                              </label>
                              <input
                              class="form-control validate"
                              data-large-mode="true"
                              name="pstock"
                            />
                          </div>
                          <div class="form-group mb-3 col-xs-12 col-sm-6">
                            <label
                            >Dimension
                            </label>
                            <input
                            class="form-control validate"
                            data-large-mode="true"
                            name="dimension"
                          /> 
                          </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <label
                      
                        >Brand
                      </label>
                      <input
                      class="form-control validate"
                      data-large-mode="true"
                      name="brand"
                    />
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                          >Customization
                          </label>
                          <select
                  class="custom-select tm-select-accounts"
                  id="category"
                  name="pcustom"
                >
                  <option  selected>Select option</option>
                  <option value="1">yes</option>
                  <option value="2">no</option>
                  </select>
                                               </div>
                      
                    </div>
                   
                      <div class="custom-file mt-3 mb-3">
                      <label
                        >Upload Image
                      </label>
                        <input name="fileInput" type="file"  />
                                              </div>
                      <label
                        >Price
                      </label>
                      <input
                      class="form-control validate"
                      data-large-mode="true"
                      name="price"
                    />
                    <label
                    for="stock"
                    >Material
                  </label>
                  <select
                  class="custom-select tm-select-accounts"
                  id="category"
                  name="material"
                >
                  <option  selected>Select Material</option>
                  <option value="1">Wood</option>
                  <option value="2">Cane</option>
                  <option value="3">Steel</option>
                  <option value="4">Plastic</option>
                  <option value="5">Iron</option>
                  <option value="6">Mdf</option>
                  <option value="7">Plywood</option>
                  <option value="8">Others</option>
                </select>
                                  </div>
               
                        
         <br>
                  <div class="col-12">
                    <input type="submit" name="update" class="btn btn-primary btn-block text-uppercase" width=25% value="UPDATE PRODUCT">
                  </div>
                </form>
               
     
    </div>
    <?php
   
    if(isset($_POST['update']))
    {
      $pid=$_POST['pid'];
      $newpid=$_POST['newpid'];
      $name=$_POST['name'];
      $category=$_POST['pcategory'];
      $description=$_POST['descript'];
      $dimension=$_POST['dimension'];
      $supplier=$_POST['supplier'];
      $brand=$_POST['brand'];
      $stock=$_POST['pstock'];
      $custom=$_POST['pcustom'];
      $price=$_POST['price'];
      $material=$_POST['material'];
      $image=$_FILES['fileInput']['name'];
      $filepath = "img/".$image;
        $res="SELECT * from products where pid='$pid'";
        $resl=mysqli_query($conn,$res);
        $result=mysqli_fetch_array($resl);
        if($result)
        {
        $sql="UPDATE `products` SET `pid`=' $newpid',`pname`='$name',`brand`='$brand',`supplierid`=' $supplier',
        `pdescription`='$description',`dimension`='  $dimension',`price`='$price',`stock`='  $stock',`material`='$material',
        `categoryname`='$category',`customstatus`='$custom',`pimage`=' $filepath'   WHERE pid='$pid '";
        $results=mysqli_query($conn,$sql);
        echo "$results";
        if($results)
        {
          echo "<script> alert('product details updated');</script>";
        }
      }
        else
        {
                echo "<script> alert('inavlid product name/product ID');</script>";
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