

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
<div class="container">
  <div class="row">
    <div class="col-12" align="center">
      <div id="titre">
        <h1>Twatter</h1>
      </div>
    </div>
  </div>
  <div class="row">
            <div class="col-12" align="center">
                <div id="under_titre">
                    <h2>Le meilleur reseau social de 1998</h2>
                </div>
            </div>
        </div>
  <div class="row">
    <div id="logo">
      
    </div>
  </div>

  <div class="row">
    <div id="bouton_co_ins">
      <div class="col-12" align="center"><button class="submit-btn_co" type="submit">Se Connecter</button></div>
      <div class="col-12" align="center"><button class="submit-btn_co" type="submit">S'inscrire</button></div>
    </div>
  </div>

<form id="login" method="POST" action="">
    <div class="zone_connexion" align="center">
      <div class="col-12" align="center"><input type="text" placeholder="identifiant" name="identifiantLogin" required></div>
      <div class="col-12" align="center"><input type="password" placeholder="Mot de passe" name="passwordLogin" required></div>
      <div class="col-12" align="center"><button class="button" type="submit">Se Connecter</button></div>
    </div>
  </form>

 ------------------------ 
    FORMULAIRE INSCRIPTION
  -------------------------
  <form id="register" method="POST" action="">
    <div class="zone_connexion" align="center">
      <div class="col-12" align="center"><input type="text" placeholder="Identifiant" name="identifiant" required></div>
      <div class="col-12" align="center"><input type="text" placeholder="Pseudo" name="pseudo" required></div>
      <div class="col-12" align="center"><input type="password" placeholder="Mot de passe" name="password" required></div>
      <div class="col-12" align="center"><input type="date" placeholder="date de naissance" name="birthdate" required></div>
      <div class="col-12" align="center"><button class="button" type="submit">S'inscrire</button></div>
    </div>
  </form>
  
</div>

</body>


<?php include "structure/footer.html"; ?>

</html>