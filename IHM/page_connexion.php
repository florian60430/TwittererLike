<head>
  <LINK rel="stylesheet" type="text/css" href="page_connexion_css.css">
  <LINK rel="stylesheet" type="text/css" href="bootstrap-4.5.3-dist/css/bootstrap.css">
</head>

<body>

<!--
  TO DO :
  -Add title
  -Add twatter logo
  -find a way to add the background
  -make sure everything stay responsive
-->

  <!--------------------- 
    FORMULAIRE CONNEXION
  ---------------------->
      <form id="login" method="POST" action="">
        <div class="container">
            <div class="zone_connexion" align="center">
              <div class="row">
                <div class="espacement">
                  <div class="col-12" align="center"><input class="bouton" type="text" placeholder="identifiant" name="identifiantLogin" required></div>
                </div>
              </div>
              <div class="row">
                <div class="espacement">
                  <div class="col-12" align="center"><input type="password" placeholder="Mot de passe" name="passwordLogin" required></div>
                </div>
              </div>
              <div class="row">
                <div class="espacement">
                  <div class="col-12" align="center"><button class="button" type="submit">Se Connecter</button></div>
                </div>
              </div>
            </div>
        </div>
      </form>

  <!------------------------- 
    FORMULAIRE INSCRIPTION
  -------------------------->
      <form id="register" method="POST" action="">
        <div class="container">
          <div class="zone_connexion" align="center">
            <div class="row">
              <div class="espacement">
                <div class="col-12" align="center"><input type="text" placeholder="Identifiant" name="identifiant" required></div>
              </div>
            </div>
            <div class="row">
              <div class="espacement">
                <div class="col-12" align="center"><input type="text" placeholder="Pseudo" name="pseudo" required></div>
              </div>
            </div>
            <div class="row">
              <div class="espacement">
                <div class="col-12" align="center"><input type="password" placeholder="Mot de passe" name="password" required></div>
              </div>
            </div>
            <div class="row">
              <div class="espacement">
                <div class="col-12" align="center"><input type="date" placeholder="date de naissance" name="birthdate" required></div>
              </div>
            </div>
            <div class="row">
              <div class="espacement">
                <div class="col-12" align="center"><button class="button" type="submit">S'inscrire</button></div>
              </div>
            </div>
          </div>
        </div>
      </form>

</body>

<?php include "structure/footer.html"; ?>

</html>