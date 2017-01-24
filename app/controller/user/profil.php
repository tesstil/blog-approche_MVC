<?php

protection("user", "user", "login", USER_LAMBDA);

	$id = $_SESSION["user"]['ID'];

	include_once("app/model/user/afficher_user.php");
	$users = afficher_user($id);
	$user = $users[0];

	if (isset($_POST["user_login"])){

		$_POST["user_pass"] = md5($_POST["user_pass"] . SALT);

		include_once("app/model/user/modifier_user.php");
		modifier_user($id, $_POST);
	}

	// Appel de la vue correspondante
	define("PAGE_TITLE", "Détail d'un user");
	include_once('app/view/user/profil.php');