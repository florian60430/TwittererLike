<?php include "entete.html"; ?>



    <body>
        <div class="background">
            <div class="form-box">
               <div class="button-box">
                   <div id="btn"></div>
                   <button type="button" class="toggle-btn" onclick="login()">Connexion</button>
                   <button type="button" class="toggle-btn" onclick="register()">Inscription</button>
               </div>
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
        <script>

            var x = document.getElementById("login");
            var y = document.getElementById("register");
            var z = document.getElementById("btn");

            function register(){
                x.style.left = "-400px";
                y.style.left = "50px";
                z.style.left = "150px";
            }

            function login(){
                x.style.left = "50px";
                y.style.left = "450px";
                z.style.left = "0px";
            }

        </script>
    </body>
</html>




































<?php require ("footer.html"); ?>