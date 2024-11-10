<?php
    session_start();
    ob_start();
    header("Location: ../admin.php");
    require('config.php');

    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    // Check if the email already exists
    $result_query = mysqli_query($con, "SELECT * FROM `users` WHERE `email` = '$email'");
    $count_query = mysqli_num_rows($result_query);

    if ($count_query == 0) {
        // Insert new user into the database
        $insert_query = "INSERT INTO `users` (`email`, `password`) VALUES ('$email', '$password')";
        if (mysqli_query($con, $insert_query)) {
            $_SESSION['login_user'] = $email;
            header("Location: ../admin.php");
            exit();
        } else {
            echo '<script>alert("Registration failed. Please try again."); location.replace(document.referrer);</script>';
        }
    } else {
        echo '<script>alert("Email already exists. Please use a different email."); location.replace(document.referrer);</script>';
    }
?>