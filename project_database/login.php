<?php
	include_once 'header.php';
?>

<div class="login-form">
<form class="w3-container" action="includes/login.inc.php" method="POST" style="text-align: center">
	<h1>Log In</h1>
	<br/>
<label>Username</label>
<input class="w3-input" type="text" name="username">
<label>Password</label>
<input class="w3-input" type="password" name="password">
<br/>
<div class="login-button">
<button class="w3-button w3-black" name="submit">Submit</button>
</div>
</form>
</div>