<?php
	session_start();

	include_once 'header.php';
	include_once 'includes/dbh.inc.php';


		$sql = "SELECT * FROM study";
		$result = mysqli_query($conn, $sql);
		$queryResults = mysqli_num_rows($result);

		echo "<h1 style='text-align: center;'>All Studies</h1>";

		if ($queryResults > 0){
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<div class='w3-study' style='text-align: center;'>
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
					</div>";
			}
		}
?>
