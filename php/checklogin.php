<?php 
	session_start();
	ob_start(); 
	require ('config.php');

	$email = $_POST['email'];
	$password = $_POST['password'];

	$result_query = mysqli_query($con, "SELECT * FROM `users` WHERE `email` = '$email'");
	$row = mysqli_fetch_array($result_query);
	$count_query = mysqli_num_rows($result_query);

	if ($count_query != 0 && password_verify($password, $row['password'])) {
		$sessionemail = $row['email'];
		$_SESSION['login_user']= $sessionemail;
		header("Location: ../adminpage.php");
		exit();
	} 
	else {
		echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';
	}
?>