<?php
function lire_commentaires($detail) {

    global $pdo;

    try {
        // On envoit la requête
        $query = $pdo->prepare('SELECT *
                                    FROM blog_comments , blog_users
                                    WHERE comment_author=ID
                                        AND comment_post_ID=:detail
                                        ORDER BY comment_date DESC');

        // On initialise les paramètres
        $query->bindParam(':detail', $detail, PDO::PARAM_INT);
        // On exécute la requête
        $query->execute();
        // On récupère tous les résultats
        $commentaires = $query->fetchAll();
        // Supprime le curseur
        $query->closeCursor();

        return $commentaires;
    }

    catch (Exeption $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}