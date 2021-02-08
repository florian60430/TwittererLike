<?php 

    include 'functionCopy.php';
    include '../IHM/header.php';

$return = $bdd->query("INSERT INTO `like` (`id_like`,`id_user`,`id_tweet`) VALUES (NULL, 17,5)");

if ($return) {
    echo "ok";
} 
else 
{
    echo "nok";
}