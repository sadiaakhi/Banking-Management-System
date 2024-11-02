<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add customer details</title>
    <link rel="stylesheet" href="Registration.css">
</head>

<body>

    <div class="bg">

    <div class="white-box">

        <div class="regi-head">
            Add Customer
            <br>
            <br>
        </div>

        <form action="addcus.php" method="POST">
            
            <input type="number" name="ID" class="input" placeholder="Enter ID" required>
            <br>
            <input type="text" name="Customer_Name" class="input" placeholder="Enter Customer Name" required>
            <br>
            <input type="text" name="Account_Number" class="input" placeholder="Enter Account Number" required>
            <br>
            <input type="number" name="Phone_No" class="input" placeholder="Enter Phone No" required>
            <br>
            <input type="text" name="Address" class="input" placeholder="Enter Address" required>
            <br>
            
            <input type="submit" name="submit" value="Submit" href="#">
        </form>   

    </div>
    </div>
</body>
</html>