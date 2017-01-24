<?php
function afficher_user($id) {

    global $pdo;

    try {
        // On envoit la requête
        $query = $pdo->prepare('SELECT *
                                    FROM blog_users
                                    WHERE ID=:id_session');

        // On initialise les paramètres
        $query->bindParam(':id_session', $id, PDO::PARAM_INT);
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