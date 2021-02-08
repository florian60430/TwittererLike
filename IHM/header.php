<?php
if (file_exists('BDD/config.php'))
    include 'BDD/config.php';
else {
    include '../BDD/config.php';
}

$bdd = null;

try {
    $bdd = new PDO('mysql:host=' . $ip . '; dbname=' . $dbname . '; charset=utf8', $username, $password);
} catch (Exception $e) {

    echo "erreur lors de la connexion a la bdd : " . $e->getMessage();
}
