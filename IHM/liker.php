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

include "./structure/entete.secondary.html";
?>

<section class="likeur-container">
    <div class="likeur-content">

        <?php echo "<a href='cibleTweet.php?idTweet=" . $tweet->getIdTweet() . "&amp;idUser=".$idStranger."'>"; ?>
        <span id="btnClose" class="btnClose">&times;</span>
        </a>

        <?php $tweet->afficheLiker(); ?>
    </div>
</section>