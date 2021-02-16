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
    $stranger = new user($bdd);
    $stranger->initId(5);
         $data2 =$bdd->query("SELECT * FROM user WHERE `id_user` = 5"); // requeter qui recupere l'utilisateur du tweet
            $strangerData = $data2->fetch();
            $strageridentifiant = $strangerData['identifiant'];
            $stragerpseudo = $strangerData['pseudo'];
            $stragerbirthdate = $strangerData['birthdate'];    
            $stragerbio = $strangerData['bio'];      
          
            
          ?>
        </head>
        <body>
         <div>
         <h3>  Pseudo </h3> </div>
         <?php echo $stragerpseudo;?>
         <div>
         <h3>  Anniversaire </h3> </div>
         <?php echo  $stragerbirthdate; ?>
         <div>
         <h3> Bio </h3> </div>
         <?php echo   $stragerbio; ?>
        <br></br>
        <h3>Ses tweet : </h3>
            
                <?php AfficheTimeLineProfil($bdd, $stranger)?>
            </div>
           
           

