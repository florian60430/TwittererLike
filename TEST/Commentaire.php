<?php
include '../BDD/classUser.php';
include '../BDD/classtweet.php';
include '../IHM/header.php';
include '../METIER/function.php';



echo "<h1> test commentaire </h1><br><br>";



$user = new user($bdd);
$user->initId(2);

$tweet = new tweet($bdd);
$id = $tweet->init(5);

$reponse = new tweet($bdd);
$reponse->setContenu("wsh salut");
$reponse->setUser($user);
$reponse->setTweetARepondre($tweet);
$reponse->commenter();

$tweet->init(1);
echo $tweet->getContenu() . "<br>";
echo $tweet->getUser()->getPseudo() . "<br>";
echo "Reponse<br>";

echo $reponse->getContenu();
echo $reponse->getUser()->getPseudo() . "<br><br>";


echo "<h1> test commentaire avec formulaire  </h1><br><br>";
// test avec formulaire

$tweet2 = new tweet($bdd);
$tweet2->init(69);



$userLogged = new user($bdd);
$userLogged->initId(47);

if (isset($_POST['submitTweet'])) {
    $response2 = new tweet($bdd);
    $response2->setContenu($_POST["com"]);
    $response2->setUser($userLogged);
    $response2->setTweetARepondre($tweet2);

    //Appelle fonction commentaire
    $response2->commenter();
}

// Affiche commentaire
echo $tweet2->getContenu() . "<br>";
echo $tweet2->getUser()->getPseudo() . "<br>";
echo "Reponse<br>";


echo "Commentaire : ".$response2->getContenu();



// Formulaire commentaire
?>  

<form method="POST" action="">
    <input type="text" name="com">
    <input type="submit" name="submitTweet" value="Comment">
</form>