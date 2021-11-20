<?php
include 'db.php';
include 'style.php';
session_start();
if (!isset($_SESSION['user_array'])) {
    header('Location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header('Location:login.php');
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card-title">
                                    <h3>Admin Panel</h3>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <form action="admin-dashboard.php" method="post">
                                    <button type="submit" name="logout" class="btn btn-danger float-end"
                                        onclick="return confirm('Are you sure you want to log')">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body bg-info rounded shadow text-light">
                                        <h5> Admin Information </h5>
                                        <div class="h5">
                                            Name :: <?php echo $_SESSION['user_array']['name']; ?>
                                        </div>
                                        <div class="h5">
                                            Email :: <?php echo $_SESSION['user_array']['email']; ?>
                                        </div>
                                        <div class="h5">
                                            Address:: <?php echo $_SESSION['user_array']['address']; ?>
                                        </div>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4>User List</h4>
                                <table class="table table-striped  table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = "SELECT * FROM users";
                                        $result = mysqli_query($db, $query);
                                        foreach ($result as $user) {
                                        ?>
                                        <tr>
                                            <td><?php echo $user['id']; ?></td>
                                            <td><?php echo $user['name']; ?></td>
                                            <td><?php echo $user['email']; ?></td>
                                            <td><?php echo $user['address']; ?></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>