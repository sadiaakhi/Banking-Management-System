<?php
session_start();
   $connect= mysqli_connect ('localhost','root',"");
   mysqli_select_db($connect,'ermsdb');

	$LNum = $_POST['Loan_Number'];
    $ID = $_POST['ID'];
	$Amount = $_POST['Amount'];
   
	$sql="select Loan_Number from loan where Loan_Number='$LNum'";
    $result= mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
if($num==1)
echo"Loan number is already in use";
else{
$add="INSERT INTO loan VALUES('$LNum', '$ID', '$Amount');";
mysqli_query($connect,$add);
echo"Connection Successful";
}
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