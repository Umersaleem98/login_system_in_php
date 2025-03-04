<?php 
    include 'connection.php';
    session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstap.css">
</head>
<body>
<div class="container">
        <div class="row">
            <h2 class="text-center mt-5 mb-5">Login Form</h2>
            <div class="col-md-6 mb-5">
             <form method="post">
                    <label for="" class="label-form">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="enter your email">
                    <label for="" class="label-form">password</label>
                    <input type="password" name="password" class="form-control" placeholder="enter your password">
                    <br>
                    <input type="submit" name="login" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

    <?php
    if(isset($_POST['login']))
    {
        $em = $_POST['email'];
        $pass = $_POST['password'];


        $query = "SELECT * FROM `users` WHERE email ='$em' ";
        $restul = mysqli_query($conn, $query);

        $users = mysqli_fetch_array($restul);

        if($users && password_verify($pass, $users['password']) )
        {
            $_SESSION['id'] = $users['id'];
            $_SESSION['name'] = $users['name'];
            header("location: dashboard.php");
        }
        else
        {
            echo "Invalid Email and password";
        }



    }

?>


</body>
</html>