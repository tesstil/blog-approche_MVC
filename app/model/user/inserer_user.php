<?php

function inserer_user ($user){

    global $pdo;

    try {

        $sql = "INSERT into blog_users
                    (user_login, user_pass, user_email, display_name)
                    VALUES
                    (:user_login, :user_pass, :user_email, :display_name)";
        $query = $pdo->prepare($sql);

        $query->bindValue(':user_login', $user["user_login"], PDO::PARAM_STR);
        $query->bindValue(':user_pass', $user["user_pass"], PDO::PARAM_STR);
        $query->bindValue(':user_email', $user["user_email"], PDO::PARAM_STR);
        $query->bindValue(':display_name', $user["display_name"], PDO::PARAM_STR);

        // On execute la requête
        $query->execute();

        // Return de l'id
        return $pdo->lastInsertId();

    }

    catch (Exception $e){
        return false;
    }
}