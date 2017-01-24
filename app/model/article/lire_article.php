<?php
function lire_article($id) {

    global $pdo;

    try {
        // On envoit la requête
        $query = $pdo->prepare('SELECT *
                                    FROM blog_posts , blog_users , blog_categories
                                    WHERE post_author=ID
                                        AND post_category=cat_id
                                        AND post_ID=:id');

        // On initialise les paramètres
        $query->bindParam(':id', $id, PDO::PARAM_INT);
        // On exécute la requête
        $query->execute();
        // On récupère tous les résultats
        $articles = $query->fetchAll();
        // Supprime le curseur
        $query->closeCursor();

        return $articles;
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}