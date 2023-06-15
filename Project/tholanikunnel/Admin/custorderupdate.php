<!DOCTYPE html>
<html>

  <?php
  include 'connect.php';
  include 'header.php';  
?>
<body>
</div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Update Customize Order Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                      

                      <div class="form-group mb-3">
                        <label
                                                    >Customize Order ID
                        </label>
                        <input
                                                    name="o_id"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>
                      
                      <div class="form-group mb-3">
                          <label
                          >Status
                          </label>
                          <select
                  class="custom-select tm-select-accounts"
                  id="category"
                  name="o_status"
                >
                  <option  selected>Select option</option>
                  <option value="APPROVED">APPROVED</option>
                  <option value="REJECTED">REJECTED</option>
                  <option value="CANCELLED">CANCELLED</option>
                  <option value="PENDING">PENDING</option>
                  <option value="PACKED">PACKED</option>
                  <option value="SHIPPED">SHIPPED
                  <option value="OUT OF DELIVERY">OUT OF DELIVERY</option>
                  <option value="DELIVERED">DELIVERED</option>
                  </option>

                  </select>
                                               </div>
                                               <div class="form-group mb-3">
                        <label
                                                    >Due date
                        </label>
                        <input
                                                    name="ddate"
                          type="date"
                                required                     class="form-control validate"
                        />
                      </div>
                      <div class="form-group mb-3">
                        <label
                                                    >Amount
                        </label>
                        <input
                                                    name="price"
                          type="text"
                                required                     class="form-control validate"
                        />
                      </div>
                      
                      <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" width=75% >UPDATE </button>
                  </div>
                    </form>
      <?php
     
        if(isset($_POST['submit'])){
                $o_id=$_POST['o_id'];
                $o_status=$_POST['o_status'];
                $ddate=$_POST['ddate'];
                $price=$_POST['price'];
            $sql ="UPDATE `cutomize`  SET `ddate`='$ddate',`amt`='$price',`custstatus`='$o_status' where `customid`='$o_id' ";
            $run=mysqli_query($conn,$sql);  
                    if($run) {
                      $ss="UPDATE customize_order SET `ddate`='$ddate',`amount`='$price',`status`='$o_status',`total`=(SELECT customize_order.amount*customize_order.orderqty FROM customize_order WHERE customid='$o_id') where `customid`='$o_id'";
                      $s=mysqli_query($conn,$ss);
                        echo '<script>alert("Updated")</script>';
                    }else{
           echo '<script>alert("Not Updated")</script>';
            }
 
        } 
        ?>
        </section>
          </div>
    
      </nav>
        
        </body>
        </html>