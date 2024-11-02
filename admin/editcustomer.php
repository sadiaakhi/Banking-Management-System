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
    $ID=$_POST['ID'];
    $CName=$_POST['Customer_Name'];
    $ANum=$_POST['Account_Number'];            
    $phn=$_POST['Phone_No'];
    $adr=$_POST['Address'];
    
     $query=mysqli_query($con, "UPDATE customer SET ID='$ID', Customer_Name='$CName', Account_Number='$ANum', 
     Phone_No='$phn', Address='$adr'  WHERE ID='$eid'; ");
    if ($query) {
    $msg="Customer profile has been updated.";
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

  <title>Edit Customer Profile</title>

  
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

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">Edit Customer Profile</h1>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>

<form class="user" method="post" action="">
  <?php
$aid=$_GET['editid'];
$ret=mysqli_query($con,"select * from customer where ID='$aid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>

             <div class="row">
                <div class="col-4 mb-3">ID</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="ID" name="ID" aria-describedby="emailHelp" value="<?php  echo $row['ID'];?>"></div>
                    </div>  

               <div class="row">
                <div class="col-4 mb-3">Customer Name</div>
                   <div class="col-8 mb-3">   <input type="text" class="form-control form-control-user" id="Customer_Name" name="Customer_Name" aria-describedby="emailHelp" value="<?php  echo $row['Customer_Name'];?>"></div>
                </div>  
                    <div class="row">
                      <div class="col-4 mb-3">Account Number</div>
                     <div class="col-8 mb-3">  <input type="text" class="form-control form-control-user" id="Account_Number" name="Account_Number" aria-describedby="emailHelp" value="<?php  echo $row['Account_Number'];?>"></div>  
                </div>

              <div class="row">
                    <div class="col-4 mb-3">Phone No </div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="Phone_No" name="Phone_No" aria-describedby="emailHelp" value="<?php  echo $row['Phone_No'];?>"></div>
                </div>

              <div class="row">
                    <div class="col-4 mb-3">Address</div>
                    <div class="col-8 mb-3">
                      <input type="text" class="form-control form-control-user" id="Address" name="Address" aria-describedby="emailHelp" value="<?php  echo $row['Address'];?>"></div>
                </div>

          </div></div>
<?php } ?>
                    <div class="row" style="margin-top:4%">
                      <div class="col-4"></div>
                      <div class="col-4">
                      <input type="submit" name="submit"  value="Update" class="btn btn-primary btn-user btn-block">
                    </div>
                    </div>
                  
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
