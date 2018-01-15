<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$password_retype = mysqli_real_escape_string($conn, $_POST['retype_password']); 

	//Error handlers
	//Check for empty fields
	if (empty($first) || empty($last) || empty($username) || empty($email) || empty($password) || empty($password_retype)) {
		header("Location: ../register.php?notallfieldswerefilledin");
		exit();
	} else {
		//Check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../register.php?signup=invalid");
			exit();
		} else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../register.php?signup=invalidemail");
				exit();
			} else {
				$sql = "SELECT * FROM users WHERE username='$username'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../signup.php?signup=usernametaken");
					exit();
				} else {
					//Hashing the password
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users (first_name, last_name, username, email, password) VALUES ('$first', '$last', '$username', '$email', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../register.php?signup=success");
					exit();
				}
			}
		}
	}

} else {
	header("Location: ../register.php");
	exit();
}