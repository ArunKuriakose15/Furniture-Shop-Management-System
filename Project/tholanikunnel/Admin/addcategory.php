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
                    <h2 class="tm-block-title d-inline-block">Add Category Details</h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                      

                      
                      
                     <div class="form-group mb-3">
                        <label
                                                    >Category Name
                        </label>
                        <input
                                                    name="catname"
                          type="text"
                                   required                 class="form-control validate"
                        />
                      </div>

                      
                      
                      <div class="col-12">
                    <button type="submit" name="submit" class="btn btn-primary btn-block text-uppercase" width=75% >ADD CATEGORY </button>
                  </div>
                    </form>

                  
                    <?php
    include("connect.php");
    if(isset($_POST['submit']))
    {
        $catname=$_POST['catname'];
         
        
    $sql="INSERT INTO category(catname) VALUES(' $catname')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      echo "<script> alert('Category successfully added ')</script>";
      
    }
    else echo"<script> alert('Category  already exists')</script>";
  }
    mysqli_close($conn);
        ?>
  </body>
</html>