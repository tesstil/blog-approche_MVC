<?php

include("../pdo.inc.php");

include("../article/lire_articles.php");

echo "<h2> Page 1 </h2>";
$data = lire_articles(0,2);
var_dump($data);

echo "<h2> Page 2 </h2>";
$data = lire_articles(2,2);
var_dump($data);

echo "<h2> Page 3 </h2>";
$data = lire_articles(4,2);
var_dump($data);

//var_dump($data);
echo "<h2> test d'affichage d'un article </h2>";
var_dump($data[1]);
echo "<h2>test affichage donnée d'un article </h2>";
echo $data[1][2];
echo "<br>";
echo $data[1]["post_date"];