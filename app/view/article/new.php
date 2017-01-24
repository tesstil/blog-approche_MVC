<?php include("app/view/layout/header.inc.php") ?>

<div>
	<h3>Ajouter un article</h3>

	<form id="form_post" method="post" action="?module=article&action=new">
		<table>
			<tr>
				<th><label for="post_category">Catégorie</label></th>
				<td>
					<?php scrolllist("post_category", "dropdown", "listcat", $categories, "cat_id", "cat_descr"); ?>
				</td>
			</tr>
			<tr>
				<th><label for="post_title">Titre</label></th>
				<td><input name="post_title" type="text" required /></td>
			</tr>
			<tr>
				<th><label for="post_content">Contenu</label></th>
				<td><textarea name="post_content" rows="10" cols="100" required ></textarea></td>
			</tr>
			<tr>
				<th></th>
				<td><input type="submit" value="Enregistrer" /><input type="reset" value="Effacer" /></td>
			</tr>
		</table>
	</form>
</div>

<?php include ("app/view/layout/footer.inc.php"); ?>