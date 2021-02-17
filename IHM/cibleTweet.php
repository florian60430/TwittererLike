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




?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="HVAC Template">
  <meta name="keywords" content="HVAC, unica, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TWATER</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

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


