<?php
    include('../BDD/classUser.php');
    include('../BDD/bdd.php');
  
    $user = new user($bdd);
    if(isset($_POST['signin'])){
        $user->setIdentifiant($_POST['identifiant']);
        $user->setPseudo($_POST['pseudo']);
        $user->setBirthdate($_POST['birthdate']);
        $user->setPassword($_POST['password']);
        $user->setBio($_POST['bio']);
        $reussiteInscription = $user->create();
    }
    if(isset($reussiteInscription)){
        if($reussiteInscription == true){
            echo 'Inscription reussie!';
        } else {
            echo 'Echec inscription';
        }
    }

    $userLogin = new user($bdd);
    if(isset($_POST['login'])){
        $userLogin->setIdentifiant($_POST['identifiant']);
        $userLogin->setPassword($_POST['password']);
        $reussiteLogin = $userLogin->initLogin();
    }
    if(isset($reussiteLogin)){
        if($reussiteLogin == true){
            echo 'Login reussi!<br>';
            echo $userLogin->getIdentifiant();
            echo $userLogin->getIdUser();
            echo $userLogin->getPseudo();
            echo $userLogin->getBio();
        } else {
            echo 'Echec login';
        }
    }
?>
<form method="POST" action="">
    identifiant
    <input type="text" name="identifiant">
    pseudo
    <input type="text" name="pseudo">
    birthdate
    <input type="date" name="birthdate">
    password
    <input type="text" name="password">
    bio
    <input type="text" name="bio">
    <input type="submit" name="signin" value="S'inscrire">
</form>
<br>
<form method="POST" action="">
    identifiant
    <input type="text" name="identifiant">
    password
    <input type="text" name="password">
    <input type="submit" name="login" value="Se connecter">
</form>
<br>