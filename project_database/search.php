<?php
	include_once 'includes/dbh.inc.php';
	include_once 'header.php';
?>

<div class ="w4-study">
	<h1 style="text-align: center;">Search Page</h1>
	<p>Use field tags, Boolean operators, parentheses, and query sets to create your query.</p>
</div>
<div>
	<form class="w3-study" action="searchfunction.php" method="POST">
	<label>Basic Search</label>
	<input class="w3-input" name="search" type="text" placeholder="Example: Negotiation, Alfred Zerres">
	<label>Option 1</label>
	<input class="w3-check" type="checkbox">
	<label>Option 2</label>
	<input class="w3-check" type="checkbox">
	<label>Option 3</label>
	<br/>
	<div class="login-button">
	<button class="w3-button w3-black" name="submit-search">Submit</button>
	</div>

	</form>
</div>
</div>

<?php

	include_once 'footer.php';