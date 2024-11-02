<?php
session_start();
   $connect= mysqli_connect ('localhost','root',"");
   mysqli_select_db($connect,'ermsdb');

	$Account_Number = $_POST['Account_Number'];
	$Branch_Name = $_POST['Branch_Name'];
    $Balance=$_POST['Balance'];
	
    $sql="select Account_Number from account where Account_Number='$Account_Number'";
    $result= mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
if($num==1)
echo"Account details already used";
else{
$add="INSERT INTO account VALUES('$Account_Number','$Branch_Name','$Balance');";
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
       <h1>  <a class="small" href="allaccount.php">Back</a> </h1>
 </div>
</body>
</html>