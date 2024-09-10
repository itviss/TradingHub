<?php 
    $con = mysqli_connect("localhost", "root", "" ,"test");

    if(isset($_POST['signup']))
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if(mysqli_num_rows($con->query("select * from user where username = '$username'")))
        {
            echo "<h1>USER ALREADY EXISTS</h1><h2>Try Another username <a href='sign.html'>SignUP</a><br>Or try to <a href='login.html'>login</a>";
        }
        else
        {
            $con->query("insert into user values('$username', '$email', '$password')");
            include("index.html");
            echo "<script> alert('Welcome $username,Risk hai to Ishq Hai')</script>";
        }
    }