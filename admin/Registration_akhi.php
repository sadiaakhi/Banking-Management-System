<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add employee details</title>
    <link rel="stylesheet" href="Registration.css">
</head>

<body>

    <div class="bg">

    <div class="white-box">

        <div class="regi-head">
            Add employee
            <br>
            <br>
        </div>

        <form action="Regi.php" method="POST">
            
            <input type="number" name="ID" class="input" placeholder="Enter ID" required>
            <br>
            <input type="text" name="Employee_Name" class="input" placeholder="Enter Employee Name" required>
            <br>
            <input type="text" name="Branch_Name" class="input" placeholder="Enter Branch Name" required>
            <br>
            
            <input type="number" name="Salary" class="input" placeholder="Enter Salary" required>
            <br>
            
            <input type="submit" name="submit" value="Submit" href="#">
        </form>   

    </div>
    </div>
</body>
</html>