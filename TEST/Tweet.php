<?php
include '../BDD/classtweet.php';
include '../BDD/config.php';

$DonneeBruteTweet = $bdd->query("select * from tweet");
$TabTweetIndex = 0;
while ($tab = $DonneeBruteTweet->fetch()){

$TabTweet[$TabTweetIndex++] = new tweet($tab['id_tweet'],$tab['contenu'],$tab['id_user'],$tab['date']);

}



?>
