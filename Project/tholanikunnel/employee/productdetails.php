<?php
session_start();
include("header2.php");
?>
<html>
  <body>
<?php
            include 'connect.php';     
        
                $pid=$_SESSION['productid'];
                if(isset($_SESSION['productid'])){
               echo "$pid";
            $sql ="SELECT * from products where pid='$pid'";
            $run=mysqli_query($conn,$sql);      
            while($rows=mysqli_fetch_array($run))
            {
                ?>

          
        <form action="" method="post" class="tm-edit-product-form">
                    

                    <div class="form-group mb-3">
                      <label
                                                 >Product Name
                      </label>
                      <input
                        name="name"
                        type="text"
                        value="<?php echo $rows['pname']?>"
                          class="form-control validate"
                      />
                    </div>
                    <div class="form-group mb-3">
                        <label
                         
                          >Category</label
                        >
                                       <input type="text"  value="<?php echo $rows['categoryname']?>">      </div>
                      <div class="form-group mb-3">
                        <label
                         
                          >Description</label
                        >
                        <textarea  value= "<?php echo $rows['description']?>"                
                          class="form-control validate tm-small"
                          rows="5"
                                                 ><?php echo $rows['description']?> </textarea>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                       
                      </div>
                      <div class="row">
                          <div class="form-group mb-3 col-xs-12 col-sm-6">
                              <label
                                  >Brand
                              </label>
                              <input
                              value="<?php echo $rows['brand']?>"
                                class="form-control validate"
                                data-large-mode="true"
                              />
                                                          </div>
                            <div class="form-group mb-3 col-xs-12 col-sm-6">
                              <label
                                                               >Units In Stock
                              </label>
                              <input
                              value="<?php echo $rows['stock']?>"
                              class="form-control validate"
                              data-large-mode="true"
                            />
                          </div>
                          
                        </div>
                        <div class="form-group mb-3 col-xs-12 col-sm-6">
                          <label
                          >Dimension
                          </label>
                          <input
                          value="<?php echo $rows['dimension']?>"
                          class="form-control validate"
                          data-large-mode="true"
                        />
                      </div>
                    </div>
                    <div class="form-group mb-3 col-xs-12 col-sm-6">
                      <div class="tm-product-img-edit mx-auto">
                      <img src="img/<?php echo $rows['pimage']; ?>" class="img-fluid d-block mx-auto" width = "200px" height="200px">
                        <i
                          class="fas fa-cloud-upload-alt tm-upload-icon"
                          onclick="document.getElementById('fileInput').click();"
                        ></i>
                      </div>
                                            </div>
                      <label
                        for="stock"
                        >Price
                      </label>
                      <input
                      value="<?php echo $rows['price']?>"
                      class="form-control validate"
                      data-large-mode="true"
                    />
                    <label
                    for="stock"
                    >Material
                  </label>
                  <input
                  value="<?php echo $rows['material']?>"
                      class="form-control validate"
                      data-large-mode="true"
                    />
                                                   </div>
                </div>
                <div class="form-group mb-3 col-xs-12 col-sm-6">
                 
              </div>
                            </div>
                      </div>
                                        </div>
                  
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase" width=25% onclick="fun1()">DELETE PRODUCT</button>
                  </div>
                </form>
        <?php
    }
}
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