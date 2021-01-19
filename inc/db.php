<?php

// récupère les données du fichier json
$CFG_content = file_get_contents("config.json");
$json = json_decode($CFG_content, true);

try {
    $db_cfg = $json["database"];

    $user = $db_cfg["login"];
    $pass = $db_cfg["password"]

    $dbh = new PDO('mysql:host='. $db_cfg["host"] .';dbname=' . $db_cfg["database"], $user, $pass);
    
} catch (PDOException $e) {
    print "Erreur Base de données !<br>" . $e->getMessage() . "<br/>";
    die();
}

?>