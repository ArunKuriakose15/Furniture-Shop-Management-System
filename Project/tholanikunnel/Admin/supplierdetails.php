

<?php
session_start();
include("header.php");
?>
<html>
  <body>
<?php
            include 'connect.php';  
            if(isset($_POST['submit']))
            {
            $supplierid=$_POST['supplierid'];
            $sql ="SELECT * from supplerdetails where supplierid='$supplierid' ";
            $run=mysqli_query($conn,$sql);
           
        if($rows=mysqli_fetch_array($run))
        {
           
                ?>
</div>
          
        <form action="" method="post" class="tm-edit-product-form">
                    
        <h2 class="tm-block-title d-inline-block">View Supplier Details</h2>
                    <div class="form-group mb-3">
                      <label
                                                 >Supplier Name
                      </label>
                      <input
                        name="name"
                        type="text"
                        value="<?php echo $rows['sname']?>"
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
                        value="<?php echo $rows['supplierid']?>"
                          class="form-control validate"
                      />
                    </div>
                   
                      <div class="form-group mb-3">
                        <label
                         
                          >Supplier Address</label
                        >
                        <textarea  value= "<?php echo $rows['saddress']?>"                
                          class="form-control validate tm-small"
                          rows="5"
                                                 ><?php echo $rows['saddress']?> </textarea>
                      </div>
                     
                      
                          <div class="form-group mb-3">
                              <label
                                  >Supplier Phone Number
                              </label>
                              <input
                              value="<?php echo $rows['sphone']?>"
                                class="form-control validate"
                                data-large-mode="true"
                              />
                                                          </div>
                       
                       
                       <br>         
                       
                       <div class="col-12">
                    <input type="submit" name="delete" class="btn btn-primary btn-block text-uppercase" value="DELETE SUPPLIER" width=25% >
                  </div>
                  </form>
                       <?php
        }else
        {
          echo "<script> alert('supplier details not found');window.location='viewsupplier.php'</script>";
        }
      }
                        if(isset($_POST['delete']))
                        {
                        $supplierid=$_POST['supplierid'];
                      
                          $sqls ="DELETE from supplerdetails where supplierid='$supplierid'";
                          $res=mysqli_query($conn,$sqls);
                         if($res)
                      {
                        echo "<script> alert('supplier details deleted');window.location='viewsupplier.php'</script>";
                        
                      }
                      else
                      {
                        echo "<script> alert('supplier details deleted');window.location='viewsupplier.php'</script>";
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