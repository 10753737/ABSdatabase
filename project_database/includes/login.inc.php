<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';

	$username = mysqli_real_escape_string($conn, $_POST['username']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	//Error handlers
	//Check if inputs are empty
	if (empty($username) || empty($password)) {
		header("Location: ../login.php?login=empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE username='$username' OR email='$username'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../login.php?login=error");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)) {
				//De-hashing the password
				$hashedPwdCheck = password_verify($password, $row['password']);
				if ($hashedPwdCheck == false) {
					header("Location: ../login.php?login=error");
					exit();
				} elseif ($hashedPwdCheck == true) {
					//Log in the user here
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['first_name'];
					$_SESSION['u_last'] = $row['last_name'];
					$_SESSION['u_email'] = $row['email'];
					$_SESSION['u_uid'] = $row['username'];
					header("Location: ../index.php?login=success");
					exit();
				}
			}
		}
	}
} else {
	header("Location: ../index.php?login=error");
	exit();
}

