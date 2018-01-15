<?php

	include_once 'header.php';
?>

<div class ="w4-study">
	<h1 style="text-align: center;">Insert New Study</h1>
</div>
<div>
	<form class="w4-study" action="includes/insert.inc.php" method="POST">
	<label>Title</label>
	<input class="w3-input" name="title" type="text">
	<label>Description</label>
	<input class="w3-input" name="description" type="text">
	<br/>
	<div class="login-button">
	<button class="w3-button w3-black" name="submit-insert">Insert</button>
	</div>

	</form>
</div>

<?php

include_once 'footer.php';

?>