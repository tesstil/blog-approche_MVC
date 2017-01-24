<?php include("app/view/layout/header.inc.php"); ?>

<div>
	<h2>Liste des utilisateurs</h2>
	<ul>
		<?php foreach($users as $user) { ?>
			<li><?=$user['display_name']; ?></li>
		<?php } ?>
	</ul>
</div>




<?php include ("app/view/layout/footer.inc.php"); ?>