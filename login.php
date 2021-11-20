<?php
include 'db.php';
include 'style.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
    .first-card {
        background-color: #fdfdfd;
    }

    .second-card {
        background-color: #a1eafb;
    }
    </style>
</head>

<body>
    <?php 
        if(isset($_POST['login'])){
            $email = $_POST['email'];
            $password = md5($_POST['password']);

            $user_result = mysqli_query($db,"select * from users where email='$email' and password='$password'");
            
            $user_count = mysqli_num_rows($user_result);

            if ($user_count===1) {
                $user_array = mysqli_fetch_assoc($user_result);
                $_SESSION['user_array'] =$user_array;
                header("Location:admin-dashboard.php");
            }else{
                $error="Invalid email or password ";
            }
            
            
        }
     ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card first-card mt-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-dark">Login Form</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="index.php" class="float-end btn btn-warning">
                                    << Back </a>
                            </div>
                        </div>
                    </div>
                    <span class="text-danger text-center mt-2"><?php echo $error; ?></span>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 offset-3">
                                <div class="card mt-2 shadow second-card">
                                    <form action="login.php" method="post">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="">
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <input type="submit" name="login" class="btn btn-danger" value="Login">
                                            <span class=" float-end">I have no
                                                account..!<a href="register.php">Register here</a></span>
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