

<body>

<!--------------------- 
  FORMULAIRE CONNEXION
---------------------->
    <form id="login" method="POST" action="">
        <input type="text" placeholder="identifiant" name="identifiantLogin" required>
        <input type="password" placeholder="Mot de passe" name="passwordLogin" required>
        <button type="submit">Se Connecter</button>
    </form>

<!------------------------- 
  FORMULAIRE INSCRIPTION
-------------------------->
    <form id="register" method="POST" action="">
        <input type="text" placeholder="Identifiant" name="identifiant" minlength="6" maxlength="12" required>
        <input type="text" placeholder="Pseudo" name="pseudo" required>
        <input type="password" placeholder="Mot de passe" name="password" minlength="6" maxlength="15" required>
        <input type="date" placeholder="date de naissance" name="birthdate" required>
        <button type="submit">S'inscrire</button>
    </form>
</body>


<?php include "structure/footer.html"; ?>

</html>