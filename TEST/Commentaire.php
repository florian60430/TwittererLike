<?php
include '../BDD/classUser.php';
include '../BDD/classtweet.php';
include '../IHM/header.php';

$user = new user($bdd);
$user->initId(2);

$tweet = new tweet($bdd);
$tweet->init(1);

$reponse = new tweet($bdd);
$reponse->setContenu("REPONSE TEST");
$reponse->setUser($user);
$reponse->setTweetARepondre($tweet);
$reponse->commenter();

$tweet->init(1);
echo $tweet->getContenu() . "<br>";
echo $tweet->getUser()->getPseudo() . "<br>";
echo "Reponse<br>";
$reponse->init(22);
echo $reponse->getContenu();
echo $reponse->getUser()->getPseudo() . "<br><br>";

// test avec formulaire



$userLogged = new user($bdd);
$userLogged->initId(3);

if (isset($_POST['submitTweet'])) {
    $newTweet = new tweet($bdd);
    $newTweet->setContenu($_POST["com"]);
    $newTweet->setUser($userLogged);
    //Appelle fonction commentaire
    $newTweet->commenter();
    
    
}

// Affiche commentaire
echo "COMMENT: <br> " . $newTweet ->getContenu() . "<br><br>";


// Formulaire commentaire
?>

<form method="POST" action="">
    <input type="text" name="com">
    <input type="submit" name="submitTweet" value="Comment">
</form>