<?php
    session_start();
    include("db.php");
    if($_server['REQUEST_METHOD'] =="POST")
    {
        $uname=$_POST['uname'];
        $gmail=$_POST['gmail'];
        $phone_no=$_POST['phno'];
        $pword=$_POST['pword'];

        if(!empty($username) && !empty(&password) && !is_numeric($gmail))
        {
            $query = "insert into form(uname,gmail,phno, pword) values('$username', '$gmail','$phone_no','$password')";

            mysqli_query($con, $query);
            echo"<script type='text/javascript'>alert('Successfull Register')</script>";
        }
        else
        {
            echo"<script type='text/javascript'>alert('Please enter correct username or password')</script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup style.css">
</head>
<body>
    <div class ="signup">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form method="POST">
            <label>Username</label>
            <input type="text" name="uname" required>
            <label>Gmail</label>
            <input type="text" name="gmail" required>
            <label>Phone_no</label>
            <input type="text" name="phno." required>
            <label>Password</label>
            <input type="text" name="password" required>
            <input type="submit" name="Submit" value="submit">
        </form>
        <p>Already have an account? <a href="login.php">Login here</a></p>
    </div>
</body>
</html>