<?php
include "../BDD/classtweet.php";
include "../IHM/header.php";
include "../BDD/classUser.php";
include "../METIER/function.php";
?>

<?php


/*-----------------------
      Recuperer l'id du tweet
    --------------------------*/

$idStranger = $_GET["idUser"];
$stranger = new user($bdd);
$stranger->initId($idStranger);


/*-----------------------
       Afficher l'utilisateur
    --------------------------*/
    include "./structure/entete.secondary.html";
?>


<body>

<a href="../index.php">Accueil</a>
  <!-----------------
      HAUT DE LA PAGE
     ----------------->
  <section class="set-bg banniere" data-setbg="../assets/image/hero-bg.jpg">

  </section>

  <!-------------------------
          MILIEU DE LA PAGE
     ------------------------>


  <section>
    <div class="center-element">
      <div class="circle"></div>
      <span class="username">
        <?php echo $stranger->getPseudo(); ?>
      </span>
      
      <div class="biographie">
        <?php echo $stranger->getBio(); ?>
      </div>
    </div>

  </section>
  <div class="mainStream" id="stream">
    <?php AfficheTimeLineProfil($bdd, $stranger); ?>
  </div>
</body>

<?php include "structure/footer.html"; ?>

</html>