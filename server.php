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
	echo '<script>console.log("connected")</script>';
	// REGISTER USER
	if (isset($_POST['register'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$mobile = mysqli_real_escape_string($db, $_POST['mobile']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($mobile)) { array_push($errors, "Mobile NO is required"); }
		if (empty($address)) { array_push($errors, "Address is required"); }
		if (empty($password)) { array_push($errors, "Password is required"); }

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			
   echo '<script>console.log("pre insert")</script>';

		
			$password = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO register (name, email, mobile, address, password) 
					  VALUES('$name', '$email', '$mobile', '$address', '$password')";
			mysqli_query($db, $query);
			
   echo '<script>console.log("post insert")</script>';

			
			//  $_SESSION['name'] = $name;
			//  $_SESSION['success'] = "You are now logged in";
			//  header('location: index.php');
	// echo "<script>alert('Login Successful, You are logged in as:  . $_SESSION["name"]'); document.location='login.php';</script>";
			//  echo $name;	
		$message = "Registered Successfully";
		echo "<script type='text/javascript'>alert('$name $message');</script>";
		echo "<script> document.location.href='login.php';</script>";
		}

	}

	// LOGIN USER
	if (isset($_POST['login'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM register WHERE email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {	
			$message = "Login Success";
			echo "<script type='text/javascript'>alert('$name $message');</script>";
			echo "<script> document.location.href='uboard.php';</script>";
		}
		else{
			array_push($errors, "Wrong username/password combination");
		}
		/*  
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				$_SESSION['success'] = "You are now logged in";
				// header('location: index.php');
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		*/
		}
	}

?>