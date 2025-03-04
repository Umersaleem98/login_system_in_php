<?php 

    include 'connection.php';
    session_start();

    if(!isset($_SESSION['id']))
    {
        header("location: login.php");
        exit();
    }

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
    
<h1>Dashbaord</h1>

    <h3>Welcome <?php 

       echo  $_SESSION['name'];
       
    
    ?></h3>

    <a href="logout.php" class="btn btn-danger" >Logout</a>

</body>
</html>