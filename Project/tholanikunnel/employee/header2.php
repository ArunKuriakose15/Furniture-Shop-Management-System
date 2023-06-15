<?php session_start();
include 'connect.php';
if(!isset($_SESSION['phoneno'])){
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
}else $ph=$_SESSION['phoneno'];
$e="SELECT * FROM `customer2` where phoneno=$ph AND user='emp'";
$se=mysqli_query($conn,$e);
$ee=mysqli_fetch_array($se);
if(!$ee){
  echo "<script> alert('Please login');window.location='../../login/login.php';</script>";
} ?>
<!DOCTYPE html>

<html lang="en">

  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Employee </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="css/font.css">
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
   
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
   
    <link rel="stylesheet" href="css/custom.css">
    
    <link rel="shortcut icon" href="../favicon.png">
    
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <a href="header.php" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">THOLANIKUNNEL</strong><strong>FURNITURE</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">T</strong><strong>F</strong></div></a>
           
          </div>
          
            <div class="list-inline-item logout"> <a id="logout" href="login.php" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
     
      <nav id="sidebar">
       
        <div class="sidebar-header d-flex align-items-center">
          <div class="profile"><img src="img/logo.png" alt="..." class="square" length="250px" width="250px">
        </div>

        </div>
        
        <h1 class="h4">Employee Dashboard</h1>
             
        <ul class="list-unstyled">
                <li class="active"><a href="index3.php"> <i class="icon-home"></i>Home </a></li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-three-cells"></i>Products </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="viewproduct.php">View Products</a></li>
                    <li><a href="addproduct.php">Add Products</a></li>
                    <li><a href="updateproduct.php">Update Products</a></li>
                                      </ul>
                </li>
              
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-new-file"></i>Return </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="salesreturn.php">Sales return details</a></li>
                   <li><a href="purchasereturndetails.php">Purchase return details</a></li> 
                  </ul>
                </li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i>Reports</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="#">Sales report</a></li>
                  <li><a href="purchase.php">Add purchase details</a></li>
                  <li><a href="purchase_details.php">View purchase details</a></li>
                                    </ul>
                </li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-page"></i>Stocks </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="viewstock.php">View stock details</a></li>
                  <li><a href="updatestock">Update stock details</a></li>  </ul>
                
                </li>
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-list"></i>Category </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="addcategory.php">Add Category</a></li>
                  <li><a href="updatecategory.php">Update category</a></li>
                  <li><a href="deletecategory.php">Delete category</a></li>
                                  </ul>
                </li>
               
         <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user-outline"></i>Supplier </a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li><a href="viewsupplier.php">View Supplier</a></li>
            <li><a href="addsupplier.php">Add Supplier</a></li>
            <li><a href="updatesupplier.php">Update Supplier</a></li>
                     </ul>
        </li>
        <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-user-outline"></i>Profile </a>
          <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
            <li><a href="resetpassword.php">Update Password </a></li>
        </ul>
      </nav>
     
        <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
           
          </div>