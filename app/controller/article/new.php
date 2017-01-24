<?php

protection("user", "user", "login", USER_LAMBDA);

if (!isset($_POST["post_title"])){
	// Appel du modèle pour obtenir les catégories
	// include_once("app/model/categorie/lire_categories.php");
	$categories = selecttable('blog_categories',
								array("orderby" => "cat_descr",
										"order" => "DESC"));

	// var_dump($categories);

	define("PAGE_TITLE", "Ajout d'un article");
	include("app/view/article/new.php");
}
else {
	// $tab = array('post_category' => 2,
	// 			'post_author' => 2,
	// 			'post_content' => 'Test de contenu',
	// 			'post_title' => 'Test de titre');

	include_once("app/model/article/inserer_article.php");
	$retour = inserer_article($_POST, $_SESSION["user"]["ID"]);

	// var_dump($retour);
	if (!$retour)
		// header("Location:?module=article&action=new&notif=nok");
		location("article", "new", "notif=nok");
	else
		// header("Location:?module=article&action=view&id=" .$retour. "&notif=ok");
		location("article", "view", "id=" .$retour. "notif=ok");
}

