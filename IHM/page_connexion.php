<?php include "structure/entete.html"; ?>

<body>
        <div class="background">
            <div class="form-box">
               <form id="login" class="input-group" method="POST">
                    <input type="text" class="input-field" placeholder="Pseudo" name="ID_1" required>
                    <input type="password" class="input-field" placeholder="Mot de passe" name="MDP_1" required>
                    <button type="submit" class="submit-btn">Se Connecter</button>
                </form>
                <form id="register" class="input-group" method="POST">
                    <input type="text" class="input-field" placeholder="Identifiant" name="new_ID" required>
                    <input type="text" class="input-field" placeholder="Pseudo" name="new_pseudo" required>
                    <input type="password" class="input-field" placeholder="Mot de passe" name="new_MDP" required>
                    <input type="date" class="input-field" placeholder="date de naissance" name="new_BD" required>
                    <button type="submit" class="submit-btn">S'inscrire</button>
                </form>
            </div>
        </div>
    </body>
</html>



<?php include "structure/footer.html"; ?>