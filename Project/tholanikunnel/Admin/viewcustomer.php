
<?php
include 'header.php';
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
                    <h2 class="tm-block-title d-inline-block">View Customer Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="post" class="tm-edit-product-form">
                      <div class="form-group mb-3">
                        <label
                          for="name"
                          >Customer Name
                        </label>
                        <input
                          name="name"
                          type="text"
                            class="form-control validate"
                        />
                                              </div>
                                         
                      <label
                                           >
                    </label>
                    <div class="form-group mb-3">
                        <label
                          for="name"
                          >Customer Phone Number
                        </label>
                        <input
                         
                          name="phoneno"
                          id="phone"
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
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>  
    $(document).ready(function() {
      $('#submit').click(function(){
        var phone = $('#phone').val();
        var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
        if(phone == ""){
            $("#phoneError").text("Please enter phone").css("color","red");
        }else if(!phone.match(phoneNum) || phone.length != 10){
            $("#phoneError").text("Please enter valid phone").css("color","red");
        }else{
            $("#phoneError").text("Phone number is valid").css("color","green");
        }
      });
      $("#phone").keypress(function (e) {
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                $("#phoneError").html("Enter only digits").css('color','red');
                return false;
            }
        });
    });
</script>
                </form>
              
                </div>
        
              </div><br><br>
              <?php
                
        if(isset($_POST['submit'])){
                $phoneno=$_POST['phoneno'];
                $custname=$_POST['name'];
       
            $sql ="SELECT * FROM `customer2` WHERE `user`='' AND (phoneno=$phoneno) ";
            $res=mysqli_query($conn,$sql); 
            if(($res))
            {  
              ?>
              <br>
            <table class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto"  cellpadding="8px" bgcolor="#8a8d93" border=5px >
            <tbody border="5px">
              <tr align="center" ><th>NAME</th>
              <th>PHONENO</th>
              <th>EMAIL ID</th>
              <th>ADDRESS</th>
              <th>PINCODE</th>
              <th >ACTION</th></tr>
              <?php   
             while($rows=mysqli_fetch_array($res))
            {
            ?>
           
               <tr> <td align="center"><?php echo $rows['username'] ?></td>
                <td align="center"><?php echo $rows['phoneno'] ?></td>
                <td align="center"><?php echo $rows['emailid'] ?></td>
                <td align="center"><?php echo $rows['caddress'] ?></td>
                <td align="center"><?php echo $rows['pin'] ?></td>
                <td align="center"><a target="_blank" href="viewcustomer.php?delete=<?php  echo $rows['phoneno'];?>" type="submit"  class="btn btn-primary">Delete</a></td></tr>
            <?php
          }
        }
        else echo"<script> alert('customer details not found');</script>";
        }
       

            ?>
            </tbody>
            </table>
            </div>
           
          </div>
          <?php
    if (isset($_GET['delete'])) {
      $delete_id = $_GET['delete'];
      $delete_query = mysqli_query($conn, "DELETE FROM `customer2` WHERE phoneno = $delete_id ") or die('query failed');
      if ($delete_query) {
          echo "<script> alert('Customer details deleted');window.location='viewcustomer.php';</script>";
      } else {
          echo "<script> alert('Customer is  not deleted from the cart');window.location='viewcustomer.php';</script>";
      }
  }
?>
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