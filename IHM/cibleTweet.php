<?php 
session_start();
include "header.php";
include "../METIER/function.php";
include "../BDD/classUser.php";
include "../BDD/classtweet.php";


$tweet = new tweet($bdd);
$tweet->init($_GET["idTweet"]);

$user = new user($bdd);
$user->initId($_SESSION["userId"]);


include "./structure/entete.secondary.html";

?>


<body>

<a href="../index.php">Accueil</a>

<?php 

AfficheTweet($user, $tweet); 
AfficheCommentaire($bdd, $tweet); 

if (isset($_POST['submitTweet'])) {
    $tweetReponse = new tweet($bdd);
    $tweetReponse->setContenu($_POST["com"]);
    $tweetReponse->setUser($user);
    $tweetReponse->setTweetARepondre($tweet);

    //Appelle fonction commentaire
    $tweetReponse->commenter();
}
?>

<form method="POST" action="">
    <input type="text" name="com">
    <input type="submit" name="submitTweet" value="Comment">
</form>


