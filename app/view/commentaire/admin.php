<?php include("app/view/layout/header.inc.php") ?>

<div>
	<h3>Liste des commentaires</h3>

	<p>
		<?php
			if (isset($_GET["user"])) {
				scrolllist("users", "dropdown", "listusers", $users, "ID", "display_name", array("default" => "Tous les users", "selected" => $_GET["user"]));
			} else{
				scrolllist("users", "dropdown", "listusers", $users, "ID", "display_name", array("default" => "Tous les users"));
			}
		 ?>

		<?php
		foreach ($comments as $comment){
			var_dump($comment); ?>

			<a href="?module=commentaire&action=delete&page=<?php echo $page ?>&id=<?= $comment["comment_ID"] ?>" onclick="return confirm('Etes-vous certain de vouloir supprimer le commentaire ?');"> Supprimer </a>
		<?php } ?>

	</p>

</div>

<?php
if (isset($_GET['user'])){
	paginate($nb_comments, PAGINATION_COMMENTS, 'commentaire', 'admin', '&user='. $_GET['user']);
} else {	
	paginate($nb_comments, PAGINATION_COMMENTS, 'commentaire', 'admin');
}
?>


<script type="text/javascript" src="webroot/js/commentaire_admin.js"></script>

<?php include ("app/view/layout/footer.inc.php"); ?>
