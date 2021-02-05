<?php
include '../BDD/classtweet.php';
include '../BDD/config.php';



echo '</br>';

echo '<h1> Tweet </h1>';
//Contenu Tweet
$tweet = new tweet($bdd);
$tweet->setIdTweet(1);
$tweet->init();
echo $tweet->getContenu();
echo '</br>';

echo '<h1> identifiant </h1>';
echo $tweet->getUser()->getIdentifiant();
echo '</br>';

echo '<h1> pseudo </h1>';
echo $tweet->getUser()->getPseudo();
//Date contenu 
echo '</br>';

echo '<h1> Date tweet </h1>';

echo $tweet->getDate();


$Newtweet = new tweet($bdd);
$Newtweet->setContenu('Je suis nouveau contenu');
$Newtweet->setIdTweet(2);
$Newtweet->create();
echo $Newtweet->getContenu();



?>
