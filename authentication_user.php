<?php      
   include('includes/dbconnection.php');
    $account_number = $_POST['account_number'];  
    $password = $_POST['pass'];  
      
        $account_number = stripcslashes($account_number);  
        $password = stripcslashes($password);  
        $account_number = mysqli_real_escape_string($con, $account_number);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from user where Account_Number = '$account_number' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
            header('location:userview.php');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  

<html>  
<head>  
    <title>User Login</title>  
    <link rel = "stylesheet" type = "text/css" href = "style_userlogin.css">   
</head> 

<body>  
    <div id = "frm">  
        <h1>User Login</h1>  
        <form name="f1" action = "authentication_user.php" onsubmit = "return validation()" method = "POST">  
            <p> <label> Account Number </label>  
                <input type = "text" id ="account_number" name  = "account_number" />  </p>  
            <p> <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  </p>  
            <p> <input type =  "submit" id = "btn" value = "Login" />  </p>  
            <p>Don't have an account? Click <a href="user_signup.php">here </a> to register. </p>
        </form>  
    </div>  
   
    <script>  
            function validation()  
            {  
                var id=document.f1.account_number.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("Account Number and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Account Number is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>  