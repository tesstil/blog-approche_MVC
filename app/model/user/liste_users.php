<?php
function liste_users() {

    global $pdo;

    try {
        // On envoit la requête
        $query = $pdo->prepare('SELECT *
                                    FROM blog_users
                                    ORDER BY user_login ASC');

        // On exécute la requête
        $query->execute();
        // On récupère tous les résultats
        $users = $query->fetchAll();
        // Supprime le curseur
        $query->closeCursor();

        return $users;
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}