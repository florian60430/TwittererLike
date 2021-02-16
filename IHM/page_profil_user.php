<?php 
    include "structure/entete.html"; 
    include "../BDD/classtweet.php";
    include "../IHM/header.php";
   // include "../BDD/classUser.php";  
   // include "../METIER/function.php";
?> 

<a href="../index.php">Accueil</a>

<?php
    
    /*$data = $bdd->query("SELECT `id_user` FROM `tweet` WHERE id_tweet = 4");
    $idteweetstranger = $data->fetch();
    echo $idteweetstranger['id_user'];*/


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
            <div class="mainStream" id="stream">
                <?php AfficheTimeLineProfil($bdd, $user); ?>
            </div>
           
           

<<<<<<< HEAD
    <head>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div>
 <h3>  Identifiant </h3> </div>
 <?php echo $profiluser->getIdUser();?>
 <div>
 <h3>  Pseudo </h3> </div>
 <?php echo $user->getPseudo();?>
 <div>
 <h3>  Anniversaire </h3> </div>
 <?php echo $user->getBirthdate(); ?>
 <div>
 <h3> Bio </h3> </div>
 <?php echo $user->getBio(); ?>
<br></br>
<h3>Mes tweet : </h3>
    <div class="mainStream" id="stream">
        <?php AfficheTimeLineProfil($bdd, $user); ?>
    </div>
=======
>>>>>>> 822747225ba9e48face1aaafc6c5cd165903e179
