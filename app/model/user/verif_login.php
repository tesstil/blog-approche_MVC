<?php
function verif_login($form) {

    global $pdo;

    try {
        // On envoit la requête
        $query = $pdo->prepare('SELECT * FROM blog_users
                                    WHERE user_login=:login
                                        AND user_pass=:password');

        // On initialise les paramètres
        $query->bindParam(':login', $form["login"], PDO::PARAM_STR);
        $query->bindParam(':password', $form["password"], PDO::PARAM_STR);
        // On exécute la requête
        $query->execute();
        // On récupère tous les résultats
        $users = $query->fetchAll();
        // Supprime le curseur
        $query->closeCursor();
        // On retourne un user ou false
        if((empty($users)) || (sizeof($users) > 1))
            return false;
        else
            return $users[0];
    }

    catch (Exception $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}