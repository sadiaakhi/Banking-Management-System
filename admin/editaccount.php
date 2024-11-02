<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['submit']))
  {
    $eid=$_GET['editid'];
    $ANum=$_POST['Account_Number'];
    $BName=$_POST['Branch_Name'];
    $bal=$_POST['Balance'];
    
     $query=mysqli_query($con, "UPDATE account SET Account_Number='$ANum',  Branch_Name='$BName', Balance='$bal' where Account_Number='$eid'");
    if ($query) {
    $msg="Updated.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again.";
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Edit Accounts</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

  <div id="wrapper">
     <?php include_once('includes/sidebar.php')?>
       <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
          <?php include_once('includes/header.php')?>
      <div class="container-fluid">
          <h1 class="h3 mb-4 text-gray-800">Edit Account Details</h1>
          <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
}  ?> </p>

<form class="user" method="post" action="">
  <?php
$aid=$_GET['editid'];
$ret=mysqli_query($con,"select * from account where Account_Number='$aid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
    
    <div class="row">
        <div class="col-4 mb-3">Account_Number</div>
            <div class="col-8 mb-3">  <input type="text" class="form-control form-control-user" id="Account_Number" name="Account_Number" aria-describedby="emailHelp" value="<?php  echo $row['Account_Number'];?>"></div>
                </div>  

    <div class="row">
        <div class="col-4 mb-3">Branch_Name</div>
            <div class="col-8 mb-3"> <input type="text" class="form-control form-control-user" id="Branch_Name" name="Branch_Name" aria-describedby="emailHelp" value="<?php  echo $row['Branch_Name'];?>"></div>  
               </div>

    <div class="row">
        <div class="col-4 mb-3">Balance</div>
            <div class="col-8 mb-3">
                <input type="text" class="form-control form-control-user" id="Balance" name="Balance" aria-describedby="emailHelp" value="<?php  echo $row['Balance'];?>"></div>
                    </div>

</div></div>
<?php } ?>
            <div class="row" style="margin-top:4%">
                <div class="col-4"></div>
                 <div class="col-4">
                    <input type="submit" name="submit"  value="Update" class="btn btn-primary btn-user btn-block">
                    </div> </div>
</form>

</div>
</div>
<?php include_once('includes/footer.php');?>
</div>
</div>
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../js/sb-admin-2.min.js"></script>
  <script type="text/javascript">

    $(".jDate").datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
}).datepicker("update", "10/10/2016"); 
  </script>
</body>
</html>
<?php }  ?>
