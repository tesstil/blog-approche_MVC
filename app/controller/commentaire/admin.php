<?php

protection("user", "user", "login", USER_ADMIN);

$users = selecttable('blog_users',
						array("orderby" => "display_name",
								"order" => "ASC"));
// var_dump($users);

//Traitement du paramètre de numéro de page
if(!isset($_GET["page"]))
	$page = 1;
else
	$page = $_GET["page"];

$offset = ($page - 1) * PAGINATION_COMMENTS;

$options = array("orderby" => "comment_date",
								"order" => "ASC",
								"limit" => PAGINATION_COMMENTS,
								"offset" => $offset);
if(isset($_GET["user"])){

	$options['wherecolumn'] = "comment_author";
	$options['wherevalue'] = $_GET["user"];
}

$comments = selecttable('blog_comments', $options);
// var_dump($comments);

if(isset($_GET["user"])){
	$options = array("wherecolumn" => "comment_author",
						"wherevalue" => $_GET["user"]);
}
else{
	$options = array();
}
// var_dump($options);

$nb_comments = counttable("blog_comments", $options);
// var_dump($nb_comments);

define("PAGE_TITLE", "Admin des commentaires");
include_once('app/view/commentaire/admin.php');