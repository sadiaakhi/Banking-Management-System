<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add account details</title>
    <link rel="stylesheet" href="Registration.css">
</head>
<body>

    <div class="bg">
    <div class="white-box">
    <div class="regi-head">
            Account details <br> <br>
    </div>

<form action="addac.php" method="POST">
        <input type="text" name="Account_Number" class="input" placeholder="Enter Account Number" required> <br>
        <input type="text" name="Branch_Name" class="input" placeholder="Enter Branch Name" required> <br>
        <input type="number" name="Balance" class="input" placeholder="Enter Balance" required> <br>
        <input type="submit" name="submit" value="Submit" href="#">
        </form>   

    </div>
    </div>
</body>
</html>