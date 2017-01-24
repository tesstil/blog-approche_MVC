<?php include("app/view/layout/header.inc.php") ?>

<div>
	<h3>Ajouter un utilisateur</h3>

	<form id="form_user" method="post" action="?module=user&action=new">
		<table>
			<tr>
				<th><label for="display_name">Nom de l'utilisateur</label></th>
				<td><input name="display_name" type="text" maxlenght="250" required /></td>
			</tr>
			<tr>
				<th><label for="user_login">Identifiant</label></th>
				<td><input name="user_login" type="text" maxlenght="60" required /></td>
			</tr>
			<tr>
				<th><label for="user_pass">Mot de passe</label></th>
				<td><input name="user_pass" type="password" maxlenght="15" required /></textarea></td>
			</tr>
			<tr>
				<th><label for="user_email">Email</label></th>
				<td><input name="user_email" type="email" maxlenght="100" required /></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Enregistrer" /><input type="reset" value="Effacer" /></td>
			</tr>
		</table>
	</form>
</div>

<?php include ("app/view/layout/footer.inc.php"); ?>