<?php
	// Test du paramètre
	if(isset($_GET['id'])){

		// Récupération des paramètres de l'URL et test éventuel
		$id = $_GET['id'];

		// Appel du modèle pour obtenir le détail d'un article
		include_once("app/model/article/lire_article.php");
		$articles = lire_article($id);
		$article = $articles[0];

		// Appel du modèle pour obtenir les commentaires d'un article
		include_once("app/model/commentaire/lire_commentaires.php");
		$commentaires = lire_commentaires($id);


		// Appel de la vue correspondante
		define("PAGE_TITLE", "Détail d'un article");
		include_once('app/view/article/view.php');

	} else {
		include_once("app/view/404.php");
	}
