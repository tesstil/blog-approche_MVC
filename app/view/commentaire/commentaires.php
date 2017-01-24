<div>
	<h3>Les commentaires</h3>
	<ul>
		<?php
		// Pour chaque commentaire du tableau des commentaires
		foreach($commentaires as $commentaire) { ?>
			<li><?=$commentaire['comment_content']; ?></li>
			<li>Auteur : <?=$commentaire['user_login']; ?></li>
			<li>Date : <?=$commentaire['comment_date']; ?><br /><br /></li>
		<?php } ?>
	</ul>
</div>

<?php if(isset($_SESSION["user"])){?>
	<h2>Saisie d'un commentaire</h2>
	<form id="form_com" method="post" action="?module=commentaire&action=insert">
		<table>
			<tr>
				<th><label for="contenu">Commentaire</label></th>
				<td>
					<textarea name="contenu" rows="10" cols="100" required ></textarea>
					<input name="post_ID" type="hidden" value="<?= $_GET["id"]; ?>">
				</td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Enregistrer" /><input type="reset" value="Effacer" /></td>
			</tr>
		</table>
	</form>
<?php } else { ?>
	<div>Connectez-vous pour pouvoir commenter.
		<a href="?module=user&action=login">Cliquez ici !</a>
	</div>
<?php }  ?>
