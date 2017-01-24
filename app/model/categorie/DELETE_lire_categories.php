<?php

// function lire_categories() {

//     global $pdo;

//     try {
//         // send req
//         $query = $pdo->query('SELECT * FROM blog_categories');

//         // fetch req
//         $categories = $query->fetchAll();

//         // sup cursor
//         $query->closeCursor();

//         return $categories;
//     }

//     catch (Exception $e) {
//         die("Connection à MySQL impossible : " . $e->getMessage());
//     }
// }