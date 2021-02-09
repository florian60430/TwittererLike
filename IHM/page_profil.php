<a href="../index.php">Acceuil</a>

<?php 
    include "structure/entete.html"; 
    include "../BDD/classtweet.php";
    include "../METIER/function.php";
    include "../IHM/header.php";
    include "../BDD/classUser.php";  
    

session_start();

    $user = new user($bdd);
    $user->initId($_SESSION["userId"]);
?>

<head>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
   <div>
 <h3>  Identifiant </h3> </div>
 <?php echo $user->getIdentifiant();?>
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

    <div class="mainStream" id="stream">
        <?php AfficheTimeLineProfil($bdd, $user); ?>
    </div>
   

</html>
</body>    

<?php include "structure/footer.html"; ?>
