<?php

function deletetable($table, $options=array()){
    global $pdo;

    try{
        $sql = 'DELETE FROM ' .$table;

        if ((isset($options["idcolumn"])) & (isset($options["idvalue"]))){

            $sql .= ' WHERE ' .$options["idcolumn"] . "=" .$options["idvalue"];

            var_dump($options);
            echo $sql;
        }

            $query = $pdo->exec($sql);

            return true;
    }

    catch (Exception $e) {
        return false;
    }
}


function counttable($table, $options = array()) {

    global $pdo;

    try {
        // send req
        $sql = 'SELECT COUNT(*) AS nb FROM ' . $table;

        if ((isset($options["wherecolumn"])) && (isset($options["wherevalue"]))) {
            $sql .= ' WHERE ' .$options["wherecolumn"] . '=' . $options["wherevalue"];
        }

        // echo $sql;

        // execute req
        $query = $pdo->prepare($sql);
        $query->execute();

        // fetch req
        $result = $query->fetch();

        // sup cursor
        $query->closeCursor();

        return $result['nb'];
    }

    catch (Exeption $e) {
        die("Connection à MySQL impossible : " . $e->getMessage());
    }
}

function selecttable($table, $options=array()) {

    global $pdo;

    // var_dump($options);

    try {
        // On voit la requête
        $sql = 'SELECT * FROM ' . $table;

        if (isset($options["wherecolumn"]) && (isset($options["wherevalue"]))) {
            $sql .= ' WHERE ' .$options["wherecolumn"] . '="' . $options["wherevalue"] .'"';
        }

        if (isset($options["orderby"])) {
            $sql .= ' ORDER BY ' . $options["orderby"];

            if (isset($options["order"])) {
                $sql .= ' ' . $options["order"];
            }
        // var_dump($sql);
        }

        if(isset($options['limit'])){
            $sql .= ' LIMIT ';

            if(isset($options['offset'])){
                $sql .= $options['offset'] .' , ';
            }

            $sql .= $options["limit"];
        }

        $query = $pdo->query($sql);
        // On récupère tous les résultats
        $data = $query->fetchAll();

        // Supprime le curseur
        $query->closeCursor();
        // On retourne tous les data sélectionnés
        return $data;
    }

    catch ( Exception $e ) {
        die("Erreur SQL : " .$e->getMessage());
    }
}