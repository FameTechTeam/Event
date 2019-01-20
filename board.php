<?php 
	session_start();

	// variable declaration
	$name = "";
	$email  = "";
	$mobile  = "";
	$address  = "";
	$password = "";
	$errors = array(); 
	$success = "";
	// $_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'tal');

	if (isset($_POST['logout'])) {
		session_start();
		session_destroy();
		session_unset();
		unset($_SESSION['name']);
		header("location: ./login.php");
	}

?>