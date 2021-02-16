<?php 
    include "structure/entete.html"; 
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

    /*$data = $bdd->query("SELECT `id_user` FROM `tweet` WHERE id_tweet = 4");
    $idteweetstranger = $data->fetch();
    echo $idteweetstranger['id_user'];*/


    /*-----------------------
       Afficher l'utilisateur
    --------------------------*/

    $idStranger = $_GET["id"];
    $stranger = new user($bdd);
    $stranger->initId($idStranger);
    
                    
          ?>
        </head>
        <body>
         <div>
         <h3>  Pseudo </h3> </div>
         <?php echo $stranger->getPseudo();?>
         <div>
         <h3>  Anniversaire </h3> </div>
         <?php echo  $stranger->getBirthdate(); ?>
         <div>
         <h3> Bio </h3> </div>
         <?php echo  $stranger->getBio(); ?>
        <br></br>
        <h3>Ses tweet : </h3>
                <?php AfficheTimeLineProfil($bdd, $stranger)?>
            </div>
           
           

