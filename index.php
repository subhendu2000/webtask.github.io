<?php include 'mail.php'?>

<!DOCTYPE html>
<html>
    <head>
        <title>Student Registration Form</title>
        <style>
            body{
                display:flex;
                justify-content: center;
                align-items: center;
                flex-directions: column;
                min-height: 100vh;
                background-color: skyblue;
            }
        </style>
    </head>
    <body>
           <form action="" method="post">
            <div class="container">
                <h1>Registration</h1>
                <h3>Fill up the form with correct data.</h3>
                First Name: <input type="text" name="firstname"   required>
                <br><br>
                Last Name: <input type="text" name="lastname"   required>
                <br><br>
                Phone Number: <input type="text" name="phonenumber" size="10"   required>
                <br><br>
                Email Id: <input type="email" name="emailid" required>
                <br><br>
                Gender: <br> <input type="radio" name="gender" value="Male" required>Male</input>
                <br><input type="radio" name="gender" value="Female" required>Female</input>
                <br><input type="radio" name="gender" value="Other" required>Other</input>
                <br><br>
                Address: <input type="text" name="address" required>
                <br><br>
                <button type="submit" name="sumbit" class="button">  SUMBIT </button>
            </div>
        </form>
</body>
</html>