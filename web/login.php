<?php
    $con = mysqli_connect("localhost", "root", "", "test");
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(mysqli_num_rows($con->query("select * from user where username = '$username'")))
        {
            if(mysqli_fetch_assoc($con->query("select * from user where username = '$username'"))['password'] == $password)
            {
                include("index.html");
                echo "<script> alert('Welcome $username,Risk hai to Ishq Hai')</script>";
            }
            else echo "Incorrect Password <a href='login.html'>Login</a>";
        }
        else echo "User Doesn't Exists.<a href='sign.html'>SignUP</a> or <a href='login.html'>Login</a>";
    }