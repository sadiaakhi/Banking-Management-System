<?php
session_start();
   $connect= mysqli_connect ('localhost','root',"");
   mysqli_select_db($connect,'ermsdb');

    $Username = $_POST['Username'];
	$Account_Number = $_POST['Account_Number'];
	$Comment = $_POST['Comment'];

    $add="INSERT INTO feedback VALUES('$Username','$Account_Number','$Comment');";
    mysqli_query($connect,$add);
    echo"Done";

?>


<!DOCTYPE html>
<html lang="en">

<head>

   <title>Back </title>

</head>

<body class="bg-gradient-primary">


<div class="text-center">
                  <h1>  <a class="small" href="feedback.php">Back</a> </h1>
 </div>

</body>
</html>