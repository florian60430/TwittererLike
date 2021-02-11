<?php

session_start();
include "../BDD/classtweet.php";
include "../METIER/function.php";
include "../IHM/header.php";
include "../BDD/classUser.php";

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
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <a href="../index.php">Accueil</a>

    <!-----------------
      HAUT DE LA PAGE
     ----------------->
    <section class="set-bg" data-setbg="../assets/image/hero-bg.jpg">
        <div class="username">
            <?php echo $user->getPseudo(); ?>
        </div>
    </section>

    <!-------------------------
          MILIEU DE LA PAGE
     ------------------------>
    <section>
        <div class="center-element">
            <div class="circle"></div>
            <div class="biographie">
                Je m'apelle Valentin Bouet fan de tuning, j'aime la bonne binouse, le paté en croute, et les bonnes meules alors met ta culotte Simone c'est moi qui pilote ;)
            </div>
        </div>
    </section>
    <div class="mainStream" id="stream">
        <?php AfficheTimeLineProfil($bdd, $user); ?>
    </div>
</body>

<?php include "structure/footer.html"; ?>

</html>