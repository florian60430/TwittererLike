<?php 

    include 'function.php';
    include '../IHM/header.php';

    $user = new user($bdd);
    $user->initId($_SESSION["userId"]);


    if (isset($_POST[$i])) {
        $_POST['OjbetTweet']->like($_POST['ObjetUser']);
       //$tabOjbetTweet[$i]->like($ObjetUser);
    }

$idUser = $user->getIdUser();
    
$return = $bdd->query("INSERT INTO `like` (`id_like`,`id_user`,`id_tweet`) VALUES (NULL, ".$idUser.",5)");

if ($return) {
    echo "ok";
} 
else 
{
    echo "nok";
}