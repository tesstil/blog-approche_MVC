<?php

if (isset($_POST["post_ID"])){
	// var_dump($_POST);

	// Appel du modèle pour insérer le commentaire
	include_once("app/model/commentaire/inserer_commentaire.php");
	$resultat = inserer_commentaire($_POST, $_SESSION["user"]["ID"]);

	// var_dump($resultat);

	if($resultat)
		header("Location:?module=article&action=view&id=" .$_POST["post_ID"]. "&notif=ok");
	else
		header("Location:?module=article&action=view&id=" .$_POST["post_ID"]. "&notif=nok");
}
else {
	die("POST absent !");
}