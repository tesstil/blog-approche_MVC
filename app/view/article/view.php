<?php include("app/view/layout/header.inc.php"); ?>

<h1><?=$article["post_title"]?></h1>
<h2>Classé dans : <?=$article["cat_descr"]?></h2>
<h3>Rédigé par : <?=$article["user_login"]?></h3>

<div><?=$article["post_date"]?></div>
<div><?=$article["post_content"]?></div>

<?php include ("app/view/commentaire/commentaires.php") ?>

<?php include ("app/view/layout/footer.inc.php"); ?>