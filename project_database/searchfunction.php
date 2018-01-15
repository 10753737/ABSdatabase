<?php
	include_once 'header.php';
	include_once 'includes/dbh.inc.php';

	if (isset($_POST['submit-search'])){
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM study WHERE study_id LIKE '%$search%' OR description LIKE '%$search%'
		OR title LIKE '%$search%' OR pi_id LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);

		echo "<h1 style='text-align: center;'>There are ".$queryResult." results.</h1>";
		echo "<br>";

		if ($queryResult > 0){
			while ($row = mysqli_fetch_assoc($result)){
				echo "<div class='w5-study' style='text-align: center;'>
					<hr>
  					<table class='w3-table w3-striped w3-border'>
    				<tr>
      				<th>Study ID</th>
      				<th>Title</th>
      				<th>Principal Investigator</th>
      				<th>Date</th>
      				<th>Description</th>
    				</tr>
    				<tr>
			      	<td>".$row['study_id']."</td>
			      	<td>".$row['title']."</td>
			      	<td>".$row['pi_id']."</td>
			      	<td>".$row['date']."</td>
			      	<td>".$row['description']."</td>
    				</tr>
  					</table>
					</div>
				";
			}
		} else {
			echo "<h1 style='text-align: center;'There are no results matching your search.</h1>";
		}

	}

