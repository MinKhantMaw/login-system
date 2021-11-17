<?php
    $db=mysqli_connect('localhost','root','','login');
    if ($db== false) {
        die('Error' . mysqli_connect_error());
    }
?>