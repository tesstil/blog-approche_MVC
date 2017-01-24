<?php
	// Appel du modèle pour obtenir la liste des utilisateurs
	include_once("app/model/user/liste_users.php");
	$users = liste_users();

	//Traitement sur les données
    foreach ($users as $cle => $user) {
        $users[$cle]['display name'] = "Nom d'utilisateur : ".$user['display_name'];
    }

	// Appel de la vue correspondante
	define("PAGE_TITLE", "Liste des utilisateurs");
	include_once('app/view/user/liste_users.php');