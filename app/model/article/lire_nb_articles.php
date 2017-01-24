<?php

function lire_nb_articles() {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT COUNT(post_ID)
                                as nb_articles
                                  FROM blog_posts'
                               );

        // execute req
        $query->execute();

        // fetch req
        $nb_articles = $query->fetch();

        // supprimer cursor
        $query->closeCursor();

        return $nb_articles['nb_articles'];
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}