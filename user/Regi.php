<?php
session_start();
   $connect= mysqli_connect ('localhost','root',"");
   mysqli_select_db($connect,'ermsdb');

    $ID = $_POST['ID'];
	$Employee_Name = $_POST['Employee_Name'];
	$Branch_Name = $_POST['Branch_Name'];
    $Salary=$_POST['Salary'];
	


    $sql="select ID from employeedetail where ID='$ID'";
    $result= mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
if($num==1)
echo"User account is already in use";
else{
$add="INSERT INTO employeedetail VALUES('$ID','$Employee_Name','$Branch_Name','$Salary');";
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
                  <h1>  <a class="small" href="allemployees.php">Back</a> </h1>
 </div>

</body>
</html>