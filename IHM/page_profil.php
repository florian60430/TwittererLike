<?php

session_start();
include "../BDD/classtweet.php";
include "../METIER/function.php";
include "../IHM/header.php";
include "../BDD/classUser.php";


$user = new user($bdd);
$user->initId($_SESSION["userId"]);

?>

<?php include "./structure/entete.secondary.html"; ?>

<body>


    <!-- MENU -->

    <?php include './structure/menu.html'; ?>

    <!-- BANIERE -->
    <section class="set-bg"></section>

    <!-- BIOGRAPHIE -->
    <section>
        <div class="center-element">
            <div class="circle"></div>
            <div class="pseudo"> <?php echo $user->getPseudo(); ?></div>
            <div class="biographie">
                <?php echo $user->getBio(); ?>
            </div>
        </div>
    </section>

    <!-- AFFICHAGE TWEET USER -->
    <section class="timeLine" name="timeLine">
        <?php AfficheTimeLineProfil($bdd, $user); ?>
        <a href="poster.php">
            <div class="poster"></div>
        </a>
    </section>
</body>

<?php include "structure/footer.html"; ?>

</html>