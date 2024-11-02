<!DOCTYPE html>
<html lang="en">
<head>
    <title>Loan</title>
    <link rel="stylesheet" href="lo.css">
</head>

<body>

    <div class="bg">

    <div class="white-box">

        <div class="regi-head">
            Loan Apply
            <br>
            <br>
        </div>

        <form action="applo.php" method="POST">
       
            
           
            <input type="text" name="Name" class="input" placeholder="Enter your name" required>
            <br>
            <input type="text" name="Account_Number" class="input" placeholder="Enter Account_Number" required>
            <br>
            
            <input type="text" name="Email" class="input" placeholder="Enter your email" required>
            <br>

            <input type="number" name="Phone_No" class="input" placeholder="Enter your Phone_No" required>
            <br>
            <input type="text" name="Profession" class="input" placeholder="Enter your Profession" required>
            <br>
            <input type="number" name="monthly_salary" class="input" placeholder="Enter your monthly salary" required>
            <br>
            <input type="number" name="loan_amount" class="input" placeholder="Enter loan amount" required>
            <br>
            <input type="text" name="cause" class="input" placeholder="Why are you applying for loan?" required>
            <br>



            <input type="submit" name="submit" value="Submit" href="#">
        </form>   

    </div>
    </div>
</body>
</html>