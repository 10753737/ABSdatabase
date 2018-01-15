<?php

if (isset($_POST['submit-insert'])) {
	
	include_once 'dbh.inc.php';

	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);

	//Error handlers
	//Check for empty fields
	if (empty($title) || empty($description)){
		header("Location: ../insert.php?notallfieldswerefilledin");
		exit();
	} else {
				$sql = "SELECT * FROM study WHERE title='$title' OR description ='$description'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
					header("Location: ../insert.php?signup=studyexistent");
					exit();
				} else {
					//Insert the study into the database
					$sql = "INSERT INTO study (title, description) VALUES ('$title', '$description');";
					mysqli_query($conn, $sql);
					header("Location: ../insert.php?signup=success");
					exit();
				}
			}		
}
 else {
	header("Location: ../insert.php");
	exit();
}