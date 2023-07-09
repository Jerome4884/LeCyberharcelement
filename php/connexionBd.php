<?php

$host = 'localhost';
$dbname = 'cyberharcelement'; /*Mettre nom de la bd */
$dbuser = 'root'; /*Mettre nom utilisateur de la bd, est ce le meme? */
$dbpwd  = '';   /*Mettre pwd de la bd, en general il n'y en a pas. Est ce la meme? */

try {
    $db = new PDO('mysql:host=localhost;dbname='.$dbname.';charset=utf8', $dbuser, $dbpwd);
} catch(Exception $e) {
    echo $e->getMessage();
    die("ERREUR : Problème de connexion");
}

$db->exec("USE $dbname");
?>