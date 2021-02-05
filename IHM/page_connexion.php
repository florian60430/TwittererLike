<?php include "entete.html";
include "../BDD/config.php";
include "../BDD/classUser.php";?>

<?php 

if (!empty($_POST['ID_1']) && !empty($_POST['MDP_1'])){

    $connexion = new user($bdd);
    $connexionOK = $connexion->initLogin($_POST['ID_1'],$_POST['MDP_1']);

    if($connexionOK == true){
        $_SESSION["isconnect"] = true;
        echo"connected";
    }else{
        $_SESSION["isconnect"] = false;
        echo"error";
    }
}


?>
    <body>
        <div class="background">
            <div class="form-box">
               <form id="login" class="input-group" method="POST">
                    <input type="text" class="input-field" placeholder="Pseudo" name="ID_1" required>
                    <input type="password" class="input-field" placeholder="Mot de passe" name="MDP_1" required>
                    <button type="submit" class="submit-btn">Se Connecter</button>
                </form>
                <form id="register" class="input-group" method="POST">
                    <input type="text" class="input-field" placeholder="Pseudo" name="new_ID" required>
                    <input type="email" class="input-field" placeholder="E-mail" name="new_mail" required>
                    <input type="password" class="input-field" placeholder="Mot de passe" name="new_MDP" required>
                    <button type="submit" class="submit-btn">S'inscrire</button>
                </form>
            </div>
        </div>
    </body>
</html>




































<?php require ("footer.html"); ?>