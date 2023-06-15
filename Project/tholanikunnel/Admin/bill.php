<?php
session_start();
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
<p>Bill No:<?php  echo str_pad($_GET['orid'],"8","0",STR_PAD_LEFT); ?></p>
	
    

    
		<div class="col-md-12">
			<h1 style="text-align: center;"><img src="img/logo.png" alt="..." length="200px" width="200px">THOLANIKUNNEL FURNITURES</h1>
			<p style="text-align: center;">Opposite To Union Bank of India ,Rajakumari</p>
            <p style="text-align: center;">PH: (+91)9446136143</p>
			<?php
      $id="";
      if(isset($_GET['orid'])){
			$id=$_GET['orid'];
      echo "Order ID:$id";
      $s="SELECT order_details.orid,customer2.username,customer2.caddress,customer2.pin,custorder.ordate,customer2.phoneno,SUM(custorder.amount) AS amount FROM order_details INNER JOIN customer2 ON order_details.phoneno=customer2.phoneno INNER JOIN custorder ON custorder.phoneno=customer2.phoneno WHERE order_details.orid=$id AND custorder.orid=$id";
      
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
        <th>Product Name</th>
        <th>Product Code</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>

      <?php $moid=$row['phoneno'];
       $total=0;
        $sels="SELECT * FROM `custorder` WHERE phoneno='$moid' AND orid=$id";
        $rss=mysqli_query($conn,$sels);
        while($rows=mysqli_fetch_array($rss)){

        	$pid=$rows['pid'];
          
          $selp="SELECT * FROM products WHERE pid='$pid'";
          $rsp=$conn->query($selp);
          while($rowp=$rsp->fetch_assoc()){

          	$total=$total+($rows['orqty']*$rowp['price']);
$gr=$total+($total*0.18);
        	?>

    <tr>
        <td><?php echo $rowp['pname']?></td>
        <td><?php echo $rowp['pid']?></td>
        <td><?php echo $rowp['price']?></td>
        <td><?php echo $rows['orqty']?></td>
        <td><?php echo $rows['orqty']*$rowp['price'];?></td>
      </tr>



        <?php
      }

          } ?>

          <tr>
          <th colspan="4">Tax Amount</th>
          <th><?php echo ($total*0.18) ?></th></tr><tr>
          	<th colspan="4">Sub Total(Inc.tax)</th>
          	<th><?php echo $gr; ?></th>
          </tr>


      </tbody>
  </table>

  
  <?php 
  echo $date=$row['ordate']; }
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