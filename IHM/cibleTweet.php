<?php
session_start();
include "header.php";
include "../METIER/function.php";
include "../BDD/classUser.php";
include "../BDD/classtweet.php";


$tweet = new tweet($bdd);
$tweet->init($_GET["idTweet"]);

$idStranger = $_GET["idUser"];
$stranger = new user($bdd);
$stranger->initId($idStranger);


$user = new user($bdd);
$user->initId($_SESSION["userId"]);

include "./structure/entete.secondary.html";

?>


<body>

    <?php
    include "structure/menu.html";

    if (isset($_POST['submitTweet'])) {
        $tweetReponse = new tweet($bdd);
        $tweetReponse->setContenu($_POST["commenter"]);
        $tweetReponse->setUser($user);
        $tweetReponse->setTweetARepondre($tweet);

        //Appelle fonction commentaire
        $tweetReponse->commenter();
    }
    ?>

    <section class="oneTweet">
        <?php AfficheTweet($stranger, $tweet); ?>
    </section>

    <section class="timeLine" name="timeLine">
        <?php AfficheCommentaire($bdd, $tweet, $user); ?>
    </section>

    <section class="commenter">
        <form method="POST" action="">
            <input type="text" name="commenter" class="champCommenter">
            <input type="submit" name="submitTweet" value="Commenter" class="btnCommenter">
        </form>
    </section>


</body>