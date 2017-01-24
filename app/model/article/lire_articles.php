<?php

function lire_articles($offset, $limite) {

    global $pdo;

    try {
        // send req
        $query = $pdo->prepare('SELECT post_ID, post_title, post_date, left(post_content, 300) AS contenu
                                FROM blog_posts
                                ORDER BY post_date
                                DESC LIMIT :offset, :limite');

        // init param
        $query->bindParam(':offset', $offset, PDO::PARAM_INT);
        $query->bindParam(':limite', $limite, PDO::PARAM_INT);

        // execute req
        $query->execute();

        // fetch req
        $articles = $query->fetchAll();

        // sup cursor
        $query->closeCursor();

        return $articles;
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}