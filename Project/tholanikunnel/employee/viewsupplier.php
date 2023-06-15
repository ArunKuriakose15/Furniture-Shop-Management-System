<?php
include 'header2.php';
include 'connect.php';
?>
<!DOCTYPE html>
<html>

     
     <body>
        </div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">View Supplier Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="supplierdetails.php" method="post" class="tm-edit-product-form">
                      <div class="form-group mb-3">
                        <label
                          
                          >Supplier Name
                        </label>
                        <input
                          name="sname"
                          type="text"
                            class="form-control validate"
                        />
                                              </div>
                                         
                    
                    <div class="form-group mb-3">
                        <label
                          
                          >Supplier ID
                        </label>
                        <input
                         
                          name="supplierid"
                          type="text"
                            class="form-control validate"
                        />
                      </div>
                                                                          </div>

                <div class="form-group mb-3 col-xs-12 col-sm-6">
                 
              </div>
                            </div>
                      </div>
                                        </div>
                  
                  <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" width=25% >SEARCH</button>
                  </div>
                </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     
    </div>

    
      
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