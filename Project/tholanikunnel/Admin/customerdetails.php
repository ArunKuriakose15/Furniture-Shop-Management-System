<!DOCTYPE html>
<html>
<?php
include("header.php");
?>
      <!-- Sidebar Navigation end-->
     
        <!-- Page Header-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
                     </div>
         
        </div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Customer Details</h2>
                  </div>
                </div>
               <form action="viewcustomer.php" method="post">
                <div class="table-responsive">
                    <table class="table mb-0 table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone number</th>
                                <th>Email</th>
                                <th>Address</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>1</th>
                                <td>Kolor Tea Shirt For Man</td>
                                <td><span >Pending</span>
                                </td>
                                <td>Malibag, Dhaka</td>
                                </tr>
                           
                        </tbody>
                    </table>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary btn-block text-uppercase" width=25% onclick="fun1()">DELETE CUSTOMER</button>
                  </div>
                </form>
                <script>
                  function fun1()  {
                        alert("Customer details is deleted");
                    }
                </script>
            
      
    
   
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