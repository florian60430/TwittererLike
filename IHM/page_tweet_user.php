<a href="../index.php">Accueil</a>

<?php

    include "../BDD/classtweet.php";
    include "../METIER/function.php";
    include "../IHM/header.php";
    include "../BDD/classUser.php";

    $ObjetUser = new user($bdd);
    $ObjetUser->initId(2);

?>

<head>
<link rel="stylesheet" href="../assets/style.css">  
</head>
<body>
    <div>
        <h2>Timeline tweet</h2>

    </div>
    <!--<h3> <?php echo "Tweet de .$id_user"; ?> </h3> -->
    <div class="mainStream" id="stream">
        <?php AfficheTweet($bdd, $ObjetUser); ?>
    </div>
    <div class="mainStream" id="stream">
        <?php AfficheTweetARepondre($bdd, $ObjetUser); ?>
    </div>

</body>
</html>