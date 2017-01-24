<!DOCTYPE html>
<html lang="<?= PAGE_LANG; ?>">

<head>
	<meta charset="<?= PAGE_CHARSET; ?>" />
	<title><?= PAGE_TITLE; ?></title>

	<link rel="stylesheet" type="text/css" href="webroot/css/global.css">
</head>

<body>
	<header>
		<h1>Ceci est le header</h1>
		<div>
			<a href="index.php">Accueil</a>


			<?php if (!isset($_SESSION["user"])){ ?>
				<a href="?module=user&action=login"> Se connecter  </a>
			<?php }
			else { ?>
				<a href="?module=article&action=new">Ajouter un article</a>
				<a href="?module=user&action=liste_users">Liste des utilisateurs</a>
					<?php if ($_SESSION["level"] == USER_ADMIN){ ?>
						<a href="?module=user&action=new">Ajouter un utilisateur</a>
						<a href="?module=commentaire&action=admin">Modérer commentaires</a>
					<?php } ?>
				<a href="?module=user&action=profil">Mon profil</a>
				<a href="?module=user&action=logout">Se déconnecter</a>
			<?php } ?>
		</div>
	</header>