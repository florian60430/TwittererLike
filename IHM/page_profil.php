<?php 
    include "structure/entete.html"; 
    include "../BDD/classtweet.php";
    include "../METIER/function.php";
?>


<body>
   
    <div class="mainStream" id="stream">
        <?php AfficheTimeLineProfil($bdd, $objetuser, $_SESSION["userId"]); ?>
    </div>

</body>    


</html>































<?php include "footer.html"; ?>