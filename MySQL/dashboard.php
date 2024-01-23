<?php 
session_start();
    $id = $_SESSION['id'];
    $name = $_SESSION['firstname'];
    $last = $_SESSION['lastname'];
    $email = $_SESSION['email'];
    $password = $_SESSION['pwd'];
    $date_time = $_SESSION['reg_date'];

    // Output values
    echo $id . " name: " . $name . " " . $last. " -email: " .  $email . " -password: " . $password . " - date_time: " . $date_time;

    ?>

    <a href="logout.php"> logout</a>
