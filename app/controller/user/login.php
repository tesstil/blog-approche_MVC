<?php

	// if (isset($_SESSION["user"])) {
	// 	header("Location:?module=article&action=new&notif=nok");
	// 	exit;
	// }

	if (!isset($_POST["login"])){
		define("PAGE_TITLE", "Connexion admin");
		include("app/view/user/login.php");
	}
	else {

		$_POST["password"] = md5($_POST["password"] . SALT);

		// Appel du modèle pour chercher un user
		include_once("app/model/user/verif_login.php");
		$retour = verif_login($_POST);

		// var_dump($retour);

		if(!$retour){
			header("Location:?module=user&action=login&notif=nok");
			exit;
		}
		else{
			$_SESSION["user"] = $retour;
			if($retour["ID"] == 1){
				$_SESSION["level"] = USER_ADMIN;
				// header("Location:?module=article&action=admin");
				header("Location:?");
				exit();
			}
			else{
				$_SESSION["level"] = USER_LAMBDA;
				header("Location:?");
				exit();
			}
		}
	}