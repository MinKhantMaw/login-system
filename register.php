<?php
include 'style.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
    .first-card {
        background-color: #f7e8e8;
    }

    .second-card {
        background-color: #f2a2e4;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card first-card mt-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-dark">Register Form</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="index.php" class="float-end btn btn-warning">
                                    << Back </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 offset-3">
                                <div class="card mt-2 shadow second-card">
                                    <form action="">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input type="number" name="phone" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <textarea name="address" cols="20" rows="5"
                                                    class="form-control"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <input type="submit" class="btn btn-danger" value="Register">
                                            <span class=" float-end">I have my
                                                account<a href="login.php">Login here</a></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>