<?php
function modifier_user($id, $user) {

    global $pdo;

    try {
        // On envoit la requête
        $query = $pdo->prepare('UPDATE blog_users
                                    SET user_login = :user_login,
                                        user_pass = :user_pass,
                                        user_email = :user_email,
                                        display_name = :display_name
                                    WHERE ID=:id_session');

        // On initialise les paramètres
        $query->bindValue(':user_login', $user["user_login"], PDO::PARAM_STR);
        $query->bindValue(':user_pass', $user["user_pass"], PDO::PARAM_STR);
        $query->bindValue(':user_email', $user["user_email"], PDO::PARAM_STR);
        $query->bindValue(':display_name', $user["display_name"], PDO::PARAM_STR);
        $query->bindParam(':id_session', $id, PDO::PARAM_INT);
        // On exécute la requête
        $query->execute();
        // Supprime le curseur
        $query->closeCursor();
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}