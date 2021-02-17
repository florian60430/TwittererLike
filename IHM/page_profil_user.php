<?php
include "../BDD/classtweet.php";
include "../IHM/header.php";
include "../BDD/classUser.php";
include "../METIER/function.php";
?>

<a href="../index.php">Accueil</a>

<?php


/*-----------------------
      Recuperer l'id du tweet
    --------------------------*/

$idStranger = $_GET["id"];
$stranger = new user($bdd);
$stranger->initId($idStranger);


/*-----------------------
       Afficher l'utilisateur
    --------------------------*/
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