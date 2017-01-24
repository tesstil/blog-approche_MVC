<?php

protection("user", "user", "login", USER_ADMIN);
$users = selecttable('blog_users', array("orderby" => "display_name",
														"order" => "ASC"));
// var_dump($users);
// define("PAGE_TITLE", "Liste des articles du blog");
// include_once('app/view/article/index.php');