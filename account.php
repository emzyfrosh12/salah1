<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>



    <div class="row">
        <div class="col-md-6">


            <div class="container-fluid mt-5">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">

                        <div class="row">

                            <div class="col-md-12">
                               <h2>hello <?php echo $_SESSION['name']; ?> upload your image</h2>

                                <div class="card col-md-12">
                                    <div class="card-body  p-4">
                                        <div class="form">
                                            <form action="php/register_photo.php" enctype="multipart/form-data" method="POST">
                                                <div class="form-group mt-2">
                                                    <div class="row">

                                                        <div class="col-md-12">
                                                            <div class="form-group mt-2">
                                                                <label for="image">Image</label>
                                                                <input name="image" type="file" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-2">
                                                        <button class="btn btn-block btn-primary mt-3">Register</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>



                                <div class="mt-5 ">
                                    <a href="php/logout.php " class="btn btn-danger btn-md">logout</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
<div class="card mt-3 ">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <?php include('php/select.php') ?>
                </div>
            </div>
            </div>
        </div>
    </div>




</body>

</html>