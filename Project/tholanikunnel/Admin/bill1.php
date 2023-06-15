<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">
 <?php
 $ph=$_SESSION['phoneno'];
 
 include 'connect.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<head><link rel="shortcut icon" href="img/logo.png"></head>
<title>bill</title>
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<body>

<div class="container">
<p>Bill No:<?php  echo str_pad($_GET['customid'],"8","0",STR_PAD_LEFT); ?></p>
	
    

    
		<div class="col-md-12">
			<h1 style="text-align: center;"><img src="img/logo.png" alt="..." length="200px" width="200px">THOLANIKUNNEL FURNITURES</h1>
			<p style="text-align: center;">Opposite To Union Bank of India ,Rajakumari</p>
            <p style="text-align: center;">PH: (+91)9446136143</p>
			<?php
      $id="";
      if(isset($_GET['customid'])){
			$id=$_GET['customid'];
     
      $s="SELECT customize_order.customid,customize_order.amount,customize_order.orderqty,customize_order.total,customize_order.orderdate,customize_order.ddate,cutomize.category,cutomize.phoneno,customer2.username,customer2.caddress,customer2.pin,customer2.contactno FROM customize_order INNER JOIN cutomize ON customize_order.customid=cutomize.customid INNER JOIN customer2 ON cutomize.phoneno=customer2.phoneno where customize_order.customid=$id";
      
      $rs=mysqli_query($conn,$s);
      while($row=mysqli_fetch_array($rs)){

      ?>
      <div class="row">
        <div class="col-md-6">
        <p>Billing name: <?php echo $row['username'] ?></p>
        <p>Billing phone: <?php echo $row['phoneno'] ?></p>
        <p>Billing address: <?php echo $row['caddress'] ?></p>
        <p>Pin Code: <?php echo $row['pin'] ?></p>
      </div>
              <div class="col-md-6">
        <p>Shipping name: <?php echo $row['username'] ?></p>
        <p>Shipping phone: <?php echo $row['phoneno'] ?></p>
        <p>Shipping address: <?php echo $row['caddress'] ?></p>
        <p>Pin Code: <?php echo $row['pin'] ?></p>
      </div>
  </div>

      <table class="table table-striped">
    <thead>
      <tr>
        <th>Product Category</th>
        <th>Customization Code</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>

      <?php $moid=$row['phoneno'];
       $total=0;
        $sels="SELECT * FROM `cutomize` WHERE phoneno='$moid' AND customid=$id ";
        $rss=mysqli_query($conn,$sels);
        

        
          	$total=$total+($row['total']);
$gr=$total+($total*0.18);
        	?>

    <tr>
        <td><?php echo $row['category']?></td>
        <td><?php echo $row['customid']?></td>
        <td><?php echo $row['amount']?></td>
        <td><?php echo $row['orderqty']?></td>
        <td><?php echo $row['total'];?></td>
      </tr>



        <?php
      

           ?>

          <tr>
          <th colspan="4">Tax Amount</th>
          <th><?php echo ($total*0.18) ?></th></tr><tr>
          	<th colspan="4">Sub Total(Inc.tax)</th>
          	<th><?php echo $gr; ?></th>
          </tr>


      </tbody>
  </table>

  
  <?php 
  echo $date=$row['orderdate']; }
  } ?>	
	</div>
</div>
<div class="row" style="margin-top: 100px;">
		<div class="col-md-6">

		</div>
		<div class="col-md-6">
			<p style="float: right;"><img src="../Admin/img/seal1.png" alt="..." length="200px" width="200px"></p>
     
		</div>
    
	</div>
 
</div>

<script>
  window.print();
</script>
<body>
    <html>