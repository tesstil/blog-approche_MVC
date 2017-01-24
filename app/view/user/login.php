<?php include("app/view/layout/header.inc.php") ?>

<div>
	<h3>Identification</h3>

	<form action="?module=user&action=login" method="post">
		<label for="login">Login : </label>
		<input type="text" name="login" id="login" required>
		<br />
		<label for="password">Password : </label>
		<input type="password" name="password" id="password" required>
		<br />
		<label for="connexion">Rester connecté</label>
		<input type="checkbox" name="auto">
		<br />
		<input type="submit" value="Se connecter">
	</form>

</div>
