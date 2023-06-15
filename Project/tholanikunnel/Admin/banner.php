<html>
<?php
include("header.php");
?>
<body>
</div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Add Banner</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                     <br> <table width="500Px" height="250px">
                        <tr>
                     <td> <div class="form-group mb-3">
                        <label
                                                    >Product ID
                        </label></td>
                       <td> <input
                                                    name="pid"
                          type="text"
                                required                     class="form-control validate"
                        />
                        </td></tr>
                      </div>
                      <tr>
                     <td> <div class="form-group mb-3">
                        <label
                                                    >Product image
                        </label></td>
                       <td> <input
                                                    name="fileInput"
                          type="file"
                                required                     
                        />
                        </td></tr>
                      </table>
                      <br>
                      <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" width=75% >ADD</button>
                  </div>
                    </form>

                  
	<?php
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $pid=$_POST['pid'];
        $fnm=$_FILES["fileInput"]["name"];
$dst="./cimages/".$fnm;
$dst1="cimages/".$fnm;
move_uploaded_file($_FILES["fileInput"]["tmp_name"],$dst);
    $sql="INSERT INTO banner (pid, price,bimage)SELECT '$pid',products.price,'$dst1' from banner INNER JOIN products on products.pid=$pid LIMIT 1";
    $result=mysqli_query($conn,$sql);
       if($result)
    {
      echo "<script> alert('banner is added')</script>";
      
    }
    else echo"<script> alert('Failed')</script>";
  }
    mysqli_close($conn);
        ?>
  </body>
</html>