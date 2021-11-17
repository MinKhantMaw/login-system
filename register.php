<?php
include 'db.php';
include 'style.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
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
        background-color: #c5e3f6;
    }
    </style>
</head>

<body>
    <?php
    $nameError = "";
    $emailError = "";
    $addressError = "";
    $passwordError = "";
    $confirm_passwordError = "";

    if (isset($_POST['register'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if (empty($name)) {
            $nameError = "The name field is required";
        }
        if (empty($email)) {
            $emailError = "The email field is required";
        }
        if (empty($address)) {
            $addressError = "The address field is required";
        }
        if (empty($password)) {
            $passwordError = "The password field is required";
        }
        if (empty($confirm_password)) {
            $confirm_passwordError = "The confirm_password field is required";
        }

        if (!empty($name) && !empty($email) && !empty($address) && !empty($password) && !empty($confirm_password)) {
            $query = "INSERT INTO users (name,email,address,password) VALUES ('$name','$email','$address','$password')";
            $result = mysqli_query($db, $query);
            if ($result == true) {
                echo "<script>alert('Registration Successfully')</script>";
                //header("Location:login.php");
            } else {
                die("Registration Fail" . mysqli_error($db));
            }
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
                                    <form action="register.php" method="post">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" name="name" class="form-control is-invalid"
                                                    placeholder="">
                                                <span class="text-danger"><?php echo "$nameError"; ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" name="email" class="form-control is-invalid"
                                                    placeholder="">
                                                <span class="text-danger"><?php echo "$emailError"; ?></span>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Address</label>
                                                <textarea name="address" cols="20" rows="5"
                                                    class="form-control is-invalid"></textarea>
                                                <span class="text-danger"><?php echo "$addressError"; ?></span>

                                            </div>
                                            <div class="form-group">
                                                <label for="">Password</label>
                                                <input type="password" name="password" class="form-control is-invalid"
                                                    placeholder="">
                                                <span class="text-danger"><?php echo "$passwordError"; ?></span>

                                            </div>
                                            <div class="form-group">
                                                <label for="">Confirm Password</label>
                                                <input type="password" name="confirm_password"
                                                    class="form-control is-invalid" placeholder="">
                                                <span
                                                    class="text-danger "><?php echo "$confirm_passwordError"; ?></span>

                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary" name="register"
                                                value="register">Register</button>
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