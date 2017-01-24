<?php
function inserer_commentaire($commentaire, $user_id) {

    global $pdo;

    try {
        // On envoie la requête
        $req = "INSERT INTO blog_comments
                    (comment_post_ID, comment_author, comment_content)
                    VALUES (:comment_post_ID, :comment_author, :comment_content)";
        $query = $pdo->prepare($req);

        // On initialise les paramètres
        $query->bindValue(':comment_post_ID', $commentaire["post_ID"], PDO::PARAM_INT);
        $query->bindValue(':comment_author', $user_id, PDO::PARAM_INT);
        $query->bindValue(':comment_content', $commentaire["contenu"], PDO::PARAM_STR);

        // On exécute la requête
        $query->execute();

        return true;
    }

    catch (Exception $e) {
        return false;
    }
}