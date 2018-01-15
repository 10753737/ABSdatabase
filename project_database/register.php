<?php
	include_once 'header.php';
?>

<!-- login form -->
<div class="login-form">
<form class="w3-container" action="includes/register.inc.php" method="POST" style="text-align: center">
	<h1>Registration Form</h1>
	<br/>
<label>First Name</label>
<input class="w3-input" type="text" name="first">
<label>Last Name</label>
<input class="w3-input" type="text" name="last">
<label>Username</label>
<input class="w3-input" type="text" name="username">
<label>Email</label>
<input class="w3-input" type="text" name="email">
<label>Password</label>
<input class="w3-input" type="password" name="password">
<label>Retype Password</label>
<input class="w3-input" type="password" name="retype_password">
<br/>
<div class="login-button">
<button class="w3-button w3-black" name="submit">Submit</button>
</div>
</form>
</div>

<?php
	include 'footer.php';
?>