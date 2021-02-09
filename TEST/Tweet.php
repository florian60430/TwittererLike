<?php
include '../BDD/classUser.php';
include '../BDD/classtweet.php';
include '../IHM/header.php';



?> <h2> GET Tweet </h2>
<?php

// Classe tweet
$tweet = new tweet($bdd);
$tweet->init(17) . "<br>";

// Classe user
$iDuser = new user($bdd);
$iDuser->initId(1);





echo "ID TWEET:  <br>" . $tweet->getIdtweet() . "<br><br>";
echo "CONTENU TWEET: <br> " . $tweet->getContenu() . "<br><br>";
echo "DATE TWEET:  <br>" . $tweet->getDate() . "<br><br>";
echo "PSEUDO USER:  <br>" . $tweet->getUser()->getPseudo() . "<br><br>";
echo "IDENTIFIANT USER: <br> " . $tweet->getUser()->getIdentifiant() . "<br><br>";
echo "NUMBER LIKE:  <br>" . $tweet->getNumberLikes() . "<br><br>";

// Formulaire pour liker
?>
<form action="" method="POST">
    <input type="submit" name="like" value="LIKE">
</form>
<?php
// Traitement like
if (isset($_POST["like"])) {

    $tweet->like($iDuser);
}

// SET Tweet
echo "</br>";
echo " <h2> SET Tweet </h2>";


echo "ID TWEET:  <br>" . $tweet->setIdtweet(36) . "<br><br>";
echo "CONTENU TWEET:  <br>" . $tweet->setContenu("Goudal la mandal") . "<br><br>";
echo "DATE TWEET:  <br>" . $tweet->setDate("2021-03-05") . "<br><br>";
echo "USER TWEET:  <br>" . $tweet->setUser(6) . "<br><br>";


// Poster tweet
?>
<form action="" method="POST">
    <input type="text" name="contenuTweet">

    <input type="submit" name="PostTweet">
</form>

<?php
// Traitement tweet

    if (isset($_POST["PostTweet"])) {
        $newTweet = new tweet($bdd);
        $newTweet->setContenu($_POST["contenuTweet"]);
        $newTweet->setUser($iDuser);
        $newTweet->posterTweet();
    }



?>
