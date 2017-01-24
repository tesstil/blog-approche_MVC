<?php

protection("user", "user", "login", USER_ADMIN);

if (!isset($_POST["user_login"])){
	define("PAGE_TITLE", "Ajout d'un utilisateur");
	include("app/view/user/new.php");
}
else {

	$_POST["user_pass"] = md5($_POST["user_pass"] . SALT);

	include_once("app/model/user/inserer_user.php");
	$retour_user = inserer_user($_POST);

	if (!$retour_user)
		location("user", "new", "notif=nok");
	else
		location("user", "liste_users", "notif=ok");
}

