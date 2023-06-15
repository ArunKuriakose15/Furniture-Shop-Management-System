<html>
<?php
include("header.php");
include 'connect.php';
?>
<body>
</div>
        <div class="container tm-mt-big tm-mb-big">
          <div class="row">
            <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
              <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                  <div class="col-12">
                    <h2 class="tm-block-title d-inline-block">Delete Category </h2>
                  </div>
                </div>
                <div class="row tm-edit-product-row">
                  <div class="col-xl-6 col-lg-6 col-md-12">
                    <form action="" method="POST" enctype="multipart/form-data" class="tm-edit-product-form">
                        <div class="form-group mb-3">
                        <label
                                                    >Category Name
                        </label>
                        <select
                          class="custom-select tm-select-accounts"
                          id="category"
                          name="pcategory" >
                          <option  selected>Select category</option>            
<?php
$cat="SELECT * FROM category";
$ca=mysqli_query($conn,$cat);
while($cate=mysqli_fetch_array($ca)){
 
?>

<option value="<?php echo $cate['catname']; ?>"><?php echo $cate['catname']; ?></option>
<?php }?>
                         
                            </select>
                      </div>
                      
                     

                      <div class="col-12">
                    <button type="submit" name="delete" class="btn btn-primary btn-block text-uppercase" width=75% >DELETE </button>
                  </div>
                    </form>

                  
	<?php
    
    if(isset($_POST['delete']))
    {
        $categ=$_POST['pcategory'];
      
       
        $sql="DELETE FROM category WHERE catname='$categ '";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
      echo "<script> alert('category is removed');</script>";
      
    }
    else{
        echo "<script> alert('category details not deleted');</script>";
    }

}
        ?>
  </body>
</html>