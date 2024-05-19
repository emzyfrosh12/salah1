<?php
session_start();

if(isset($_SESSION['id'])){
    header("Location: account.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center mt-5">
            Welcome!
        </h1>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <h3 class="mt-5 text-center">Register </h3>
                <p class="text-center">Provide your valid credentials to register</p>

                <div class="form shadow shadow-md p-3">
                    <form action="php/register.php" method="POST" class="mt-3">
                    <div class="form-group">
                            <label for="">Name</label>
                            <input  name="fullname" type="text" class="form-control mb-3">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input  name="email" type="text" class="form-control mb-3">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input  name="password" type="password" class="form-control mb-3">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success mb-3">Login</button>
                            <p class="mt-2">Already have an account? click <a href="login.php">Login</a></p>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>




</html>
