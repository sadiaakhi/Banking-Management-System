<?php
session_start();
   $connect= mysqli_connect ('localhost','root',"");
   mysqli_select_db($connect,'ermsdb');

    $ID = $_POST['ID'];
	$Account_Number = $_POST['Account_Number'];
	
?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Account Details</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">


</head>
<a href="allaccount.php"> <i style='font-size:70px; color:white; padding-left: 1%' class='fab'>&#xf260;</i></a>
<body class="bg-gradient-primary">

<h1 class="text-center"; style="color:white"> My account details</h1>

<br> <br> <br> <br> <br>
 <div class="table-responsive" style="color:white">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" >
    
    <tr>
    <th><b>Customer_Name</th>
    <th><b>ID</th>
      <th><b>Account_Number</th>
      <th><b>Balance</th>
      <th><b>Branch_Name</th>
     
    </tr>
    
    <?php
    $ret=mysqli_query($connect,"select Customer_Name, ID, customer.Account_Number, Balance, Branch_Name from customer NATURAL JOIN account where customer.Account_Number='$Account_Number' && customer.ID='$ID';");
    $cnt=1;
    while ($row=mysqli_fetch_array($ret)) {
    ?>
    
    <tr>

      <td><b><?php  echo $row['Customer_Name'];?></td>
      <td><b><?php  echo $row['ID'];?></td>
      <td><b><?php  echo $row['Account_Number'];?></td>
      <td><b><?php echo $row['Balance'];?></td>
      <td><b><?php echo $row['Branch_Name'];?></td>
     
    
     
      </td>
    </tr>
    
    <?php 
    $cnt=$cnt+1;
    }?>
    </table>

  

</body>
</html>