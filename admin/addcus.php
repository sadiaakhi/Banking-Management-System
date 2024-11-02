<?php
session_start();
   $connect= mysqli_connect ('localhost','root',"");
   mysqli_select_db($connect,'ermsdb');

    
	$CName = $_POST['Customer_Name'];
    $ID = $_POST['ID'];
	$Account_Number = $_POST['Account_Number'];
    $Phone_No=$_POST['Phone_No'];
    $Address=$_POST['Address'];
	


    $sql="select ID from customer where ID='$ID'";
    $result= mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
if($num==1)
echo"ID is already in use";
else{
$add="INSERT INTO customer VALUES('$CName', '$ID', '$Account_Number','$Phone_No', '$Address');";
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
                  <h1>  <a class="small" href="allcustomer.php">Back</a> </h1>
 </div>

</body>
</html>