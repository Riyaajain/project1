<?php
    session_start();
    include("db.php");
    if($_server['REQUEST_METHOD'] =="POST")
    {
        $uname=$_POST['uname'];
        $pword=$_POST['pword'];

        if(!empty($username) && !empty(&password) && !is_numeric($gmail))
        {
            $query="select * from connectivity where gmail='$gmail' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result)>0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['pass'] == $password)
                    {
                        header("location: index.php");
                        die;
                    }
                }
            }
            echo"<script type='text/javascript'>alert('Wrong username or password')</script>";
        }
        else
        {
            echo"<script type='text/javascript'>alert('Wrong username or password')</script>";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="signup style.css">
</head>
<body>
    <div class ="login">
        <h1>Log in</h1>
        <h4>It's free and only takes a minute</h4>
        <form method="POST">
            <label>Username</label>
            <input type="text" name="uname" required>
            <label>Password</label>
            <input type="text" name="password" required>
            <input type="submit" name="Submit" value="submit">
        </form>
        <p>Not have an account?<a href="signup.php">Sing up here</a></p>
    </div>
</body>
</html>