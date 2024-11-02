<?php
session_start();
   $connect= mysqli_connect ('localhost','root',"");
   mysqli_select_db($connect,'ermsdb');

$Name=$_POST['Name'];
$Account_Number=$_POST['Account_Number'];
$Email=$_POST['Email'];
$Phone_No=$_POST['Phone_No'];
$Profession=$_POST['Profession'];
$monthly_salary=$_POST['monthly_salary'];
$loan_amount=$_POST['loan_amount'];
$cause=$_POST['cause'];

	


    $sql="select Account_Number from applyloan where Account_Number='$Account_Number'";
    $result= mysqli_query($connect,$sql);
    $num=mysqli_num_rows($result);
if($num==1)
echo"Already registered for loan";
else{
$add="INSERT INTO applyloan VALUES('$Name','$Account_Number','$Email','$Phone_No','$Profession','$monthly_salary','$loan_amount','$cause');";
mysqli_query($connect,$add);
echo"Applied";
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