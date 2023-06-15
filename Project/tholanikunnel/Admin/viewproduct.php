
<!DOCTYPE html>
<html>
  <?php
 include("header.php");
 ?>
     </div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">View Product</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form  method="post" action="p1.php"  class="tm-edit-product-form">
                      <div class="form-group mb-3">
                        <label
                                                   >Product Name
                        </label>
                        <input
                                                   name="name"
                          type="text"
                            class="form-control validate"
                        />
                      </div>
                      
                      <div class="form-group mb-3">
                        <label
                                                  >Product ID
                        </label>
                        <input
                                                   name="productid"
                          type="text"
                            class="form-control validate"
                        />
                      </div>
                      <div class="form-group mb-3">
                        <label
                                                    >Category</label
                        >
                        <select
                          class="custom-select tm-select-accounts"
                         name="category"
                        >
                          <option  selected>Select category</option>
                          <option value="Wooden Products">Wooden Products</option>
                          <option value="Cane Products">Cane Products</option>
                          <option value="Mattress">Mattress</option>
                          <option value="Kids Accessories">Kids Accessories</option>
                          <option value="Decor Items">Decor Items</option>
                          <option value="Mdf Products">Mdf Products</option>
                          <option value="Lockers">Lockers</option>
                          <option value="Others">Others</option>
                        </select>
                      </div>
                      
                    
                                                               <label
                   
                    >Material
                  </label>
                  <select
                  class="custom-select tm-select-accounts"
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
                </div>
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                 
              </div>
                            </div>
                      </div>
                                        </div>
                  
                  <div class="col-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" value="SEARCH" width=25% >
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>
 
       
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