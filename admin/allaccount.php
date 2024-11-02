<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{


if(isset($_GET['delid']))
  {
    $eid=$_GET['delid'];
    $query=mysqli_query($con,"DELETE FROM `account` WHERE `Account_Number` = '$eid';");
    echo "<script>alert('Record Deleted successfully');</script>";
    echo "<script>window.location.href='allaccount.php'</script>";
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
  <title>Account Details</title>
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
  <?php include_once('includes/sidebar.php')?>  <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
         <?php include_once('includes/header.php')?>    <!-- Topbar -->
    
 <!-- Begin Page Content -->
        <div class="container-fluid">
        <h1 align="center" style="font-size:22px; class="h3 mb-4 text-gray-800"> <a href=" addaccount.php">Add Account Details </a> </h1>
           <p style="font-size:16px; color:red" align="center"> <?php if($msg){
           echo $msg;
           }  ?> </p> <br> <br> <br>

        <h1 align="center" style="font-size:25px; class="h3 mb-4 text-gray-800"><u><b>Account Details</b></u></h1>    
           <p style="font-size:16px; color:red" align="center"> <?php if($msg){
           echo $msg;
           }  ?> </p>
<br> <br>
 <!-- Table -->
 <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<tr>
  <th>S no.</th>
  <th>Account_Number</th>
  <th>Branch_Name</th>
  <th>Balance</th>
  <th>Action</th>
</tr>

<?php
$ret=mysqli_query($con,"select * from account");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>

<tr>
  <td><?php echo $cnt;?></td>
  <td><?php  echo $row['Account_Number'];?></td>
  <td><?php echo $row['Branch_Name'];?></td>
  <td><?php echo $row['Balance'];?></td>

  <td> <a href="editaccount.php?editid=<?php echo $row['Account_Number'];?>">Edit Account Details</a> | 
          <a href="allaccount.php?delid=<?php echo $row['Account_Number'];?>" onclick="return confirm('Do you really want to delete');" style="color:red">Delete</a>
  </td>
</tr>

<?php 
$cnt=$cnt+1;
}?>
</table>
</div>
  </div>
    </div>
      <!-- End -->
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
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../js/demo/datatables-demo.js"></script>
</body>
</html>
<?php }  ?>
