<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if (strlen($_SESSION['aid']==0)) {
  header('location:logout.php');
  } else{

     
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
      

 <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><b><i>My loan details</b> </i></h1>
                  </div>
           <p style="font-size:16px; color:red" align="center"> <?php if($msg){
           echo $msg;
           }  ?> </p>



<div class="text-center">
<form  method="post" action="checkloan.php">
     
 <br> <br><label>ID :   
      <input type="ID" name="ID" id="textfield2" style="margin: top 15px; " />
      </label><br> 

      <br> <label>Account_Number :   
        <input type="Account_Number"  name="Account_Number" type="text" id="textfield" />
      </label><br><br>


      <label> 
       <input type="submit" name="button" id="button" value="Submit" />


      </label>
    </form> <br> <br>
    <img src="How-do-we-use-money.jpg" alt="Flowers in Chania" width="350" height="220"> <br> <br>
          </div>




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
