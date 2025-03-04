<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="bootstap.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <h2 class="text-center mt-5 mb-5 text-info">Registeration Form</h2>
            <div class="col-md-6 mb-5">
                <form action="" method="post">
                    <label for="" class="label-form">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="enter your name">
                    <label for="" class="label-form">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="enter your email">
                    <label for="" class="label-form">password</label>
                    <input type="password" name="password" class="form-control" placeholder="enter your password">
                    <br>
                    <input type="submit" name="submit" class="btn btn-primary">
                    <a href="login.php" class="btn btn-warning">Login</a>
                </form>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $na = $_POST['name'];
        $em = $_POST['email'];
        $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$na','$em','$pass')";

        $result = mysqli_query($conn, $query);

        if ($result) {
            echo "the data is inserted successfully";
        } else {
            echo "failed";
        }
    }

    ?>




</body>

</html>