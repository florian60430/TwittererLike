<?php
include "../BDD/classtweet.php";
include "../IHM/header.php";
include "../BDD/classUser.php";
include "../METIER/function.php";


$idStranger = $_GET["idUser"];
$stranger = new user($bdd);
$stranger->initId($idStranger);

include "./structure/entete.secondary.html";

?>


<body>

  <!-- MENU -->
  <?php include './structure/menu.html'; ?>

  <!-- BANIERE -->
  <section class="set-bg"></section>


 
  <section>
    <div class="center-element">
      
      <!-- PHOTO DE PROFIL -->
      <div class="circle"></div>
    
      <!-- PSEUDO --> 
      <div class="pseudo"> <?php echo $stranger->getPseudo(); ?></div>
  
      <!-- BIOGRAPHIE -->
      <div class="biographie">
        <?php echo $stranger->getBio(); ?>
      </div>
    </div>
</section>

<!-- AFFICHAGE TWEETS USER -->
<section class="timeLine" name="timeLine">
    <?php AfficheTimeLineProfil($bdd, $stranger); ?>
    <a href="IHM/poster.php">
      <div class="poster"></div>
      </a>
  </section>
</body>

<?php include "structure/footer.html"; ?>

</html>