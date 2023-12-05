<?php

$host = 'localhost';
$dbname = 'cyberharcelement'; /*Mettre nom de la bd */
$dbuser = 'root'; /*Mettre nom utilisateur de la bd */
$dbpwd  = '';   /*Mettre pwd de la bd */

try {
    $db = new PDO('mysql:host=localhost;dbname='.$dbname.';port=4306;charset=utf8', $dbuser, $dbpwd);
} catch(Exception $e) {
    echo $e->getMessage();
    die("ERREUR : Problème de connexion");
}

$db->exec("USE $dbname");
?>