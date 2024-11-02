<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add loan details</title>
    <link rel="stylesheet" href="Registration.css">
</head>
<body>

    <div class="bg">
    <div class="white-box">
    <div class="regi-head">
            Loan details <br> <br>
    </div>

<form action="addlo.php" method="POST">
        <input type="text" name="Loan_Number" class="input" placeholder="Enter Loan Number" required> <br>
        <input type="text" name="ID" class="input" placeholder="Enter Customer ID" required> <br>
        <input type="number" name="Amount" class="input" placeholder="Enter loan amount" required> <br>
        <input type="submit" name="submit" value="Submit" href="#">
        </form>   

    </div>
    </div>
</body>
</html>