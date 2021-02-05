<?php include "entete.html"; ?>

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