<?php
session_start();
   $connect= mysqli_connect ('localhost','root',"");
   mysqli_select_db($connect,'ermsdb');

   
	$Loan_Number = $_POST['Loan_Number'];
    $ID = $_POST['ID'];
	$Amount = $_POST['Amount'];
  
	


   
$add="INSERT INTO loan VALUES('$Loan_Number','$ID','$Amount');";
mysqli_query($connect,$add);
echo"Connection Successful";

?>


<!DOCTYPE html>
<html lang="en">

<head>

   <title>Back </title>

</head>

<body class="bg-gradient-primary">


<div class="text-center">
                  <h1>  <a class="small" href="allloan.php">Back</a> </h1>
 </div>

</body>
</html>