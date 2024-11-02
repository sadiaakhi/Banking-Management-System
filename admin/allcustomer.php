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
    $query=mysqli_query($con,"DELETE FROM `customer` WHERE `ID` = $eid;");
    echo "<script>alert('Record Deleted successfully');</script>";
    echo "<script>window.location.href='allcustomer.php'</script>";
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

  <title>Customers Details</title>

  
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<div id="wrapper">

   <?php include_once('includes/sidebar.php')?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
         <?php include_once('includes/header.php')?>
            <div class="container-fluid">

          <!-- Page Heading -->

          <h1 align="center" style="font-size:22px; class="h3 mb-4 text-gray-800"> <a href=" addcustomer.php">Add Customer Details </a> </h1>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
<br><br>

       <h1 align="center" style="font-size:25px; class="h3 mb-4 text-gray-800"><b><u>Customers Details</u></b></h1> <br>
    
<br> <br>

<p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>



 <div class="table-responsive">
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">


<tr>
  <th>S no.</th>
  <th>ID</th>
  <th>Customer_Name</th>
  <th>Account_Number</th>
  <th>Phone_No</th>
  <th>Address</th>
  <th>Action</th>
</tr>


<?php
$ret=mysqli_query($con,"select * from customer");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>

<tr>
  <td><?php echo $cnt;?></td>
  <td><?php  echo $row['ID'];?></td>
  <td><?php echo $row['Customer_Name'];?></td>
  <td><?php echo $row['Account_Number'];?></td>
  <td><?php echo $row['Phone_No'];?></td>
  <td><?php echo $row['Address'];?></td>

  <td><a href="editcustomer.php?editid=<?php echo $row['ID'];?>">Edit Profile Details</a> 
   
    <a href="allcustomer.php?delid=<?php echo $row['ID'];?>" onclick="return confirm('Do you really want to delete');" style="color:red">Delete</a>
  </td>
</tr>

<?php 
$cnt=$cnt+1;
}?>

</table>
</div>

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
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../js/demo/datatables-demo.js"></script>
</body>

</html>
<?php }  ?>