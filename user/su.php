<?php
session_start();
   $connect= mysqli_connect ('localhost','root',"");
   mysqli_select_db($connect,'ermsdb');

   $Account_Number=$_POST['Account_Number'];
   $UName=$_POST['Username'];
   $Password=$_POST['Password'];
   $Email=$_POST['Email'];
   $Phone_No=$_POST['Phone_No'];



    $sql="select Account_Number from user where Account_Number='$Account_Number'";
    $result= mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
if($num==1)
echo"User account is already in use";
else{
$add="INSERT INTO user VALUES('$Account_Number','$UName','$Password','$Email','$Phone_No');";
mysqli_query($connect,$add);
echo"Registered";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

   <title>Sign-in now </title>

</head>

<body class="bg-gradient-primary">


<div class="text-center">
                  <h1>  <a class="small" href="index.php">Sign-in now </a> </h1>
 </div>

</body>
</html>