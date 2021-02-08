<?php
include '../BDD/classUser.php';
include '../BDD/config.php';
include '../IHM/header.php';


// TEST Inscription
echo "<h2> TEST Inscription </h2><br>";
$user = new user($bdd);
$return = $user->inscription("bernard93GangBang", "bernardLeTrimar93", "mdpsecure123", "2000-01-01"."<br><br>");



if ($retour = 1) {
    echo "Inscription OK";
} else {
    echo "Inscription NOK";
}


// TEST Connexion
echo "<h2> TEST Connexion </h2><br><br>";
$returnCo = $user->connexion("bernard93GangBang", "mdpsecure123");

if ($retourCo = 1) {
    echo "Connexion OK";
} else {
    echo "Connexion NOK";
}
