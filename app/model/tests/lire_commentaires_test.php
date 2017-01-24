<?php

include("../pdo.inc.php");

include("../article/lire_comments.php");

//var_dump($comments);
echo "<h2>Test d'information d'un commentaire</h2>";
var_dump($comments[0]);
echo "<h2>Test d'affichage des détails d'un commentaire</h2>";
echo $comments[0]["comment_content"];
echo "<br />";
echo $comments[0]["user_login"];
echo "<br />";
echo $comments[0]["comment_date"];