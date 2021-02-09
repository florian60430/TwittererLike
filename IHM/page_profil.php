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
   
    <div class="mainStream" id="stream">
        <?php AfficheTimeLineProfil($bdd, $user); ?>
    </div>

</body>    


</html>


<?php include "structure/footer.html"; ?>