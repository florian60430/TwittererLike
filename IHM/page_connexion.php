<body>
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
        <div class="col-12" align="center">
          <button id="cestParti" class="submit-btn_co" type="submit">C'est Parti !</button>
        </div>
      </div>
    </div>

    <!----------------------------------------
 FORMULAIRE DE CONNEXION/INSCRIPTION 
----------------------------------------->
    <div class="container overlay" id="overlay">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="panel panel-login">
            <div class="panel-heading">
              <div class="row">
                <div class="col-xs-6">
                  <a href="#" class="active" id="login-form-link">Connexion</a>
                </div>
                <div class="col-xs-6">
                  <a href="#" id="register-form-link">Inscription</a>
                </div>
              </div>
              <hr>
            </div>

<!----------
  CONNEXION
 ---------->
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <form id="login-form" action="" method="post" role="form" style="display: block;">
                    <div class="form-group">
                      <input type="text" name="identifiantLogin" id="username" tabindex="1" class="form-control" placeholder="Identifiant" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="passwordLogin" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
                    </div>
                    <div class="form-group text-center">
                      <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                      <label for="remember"> Se rappeler de moi</label>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Se Connecter">
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="text-center">
                            <a href="" tabindex="5" class="forgot-password">Mot de passe oublié?</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
<!---------------
  INSCRIPTION
 -------------->

                  <form id="register-form" action="" method="post" role="form" style="display: none;">
                    <div class="form-group">
                      <input type="text" name="identifiant" id="identifiant" tabindex="1" class="form-control" placeholder="Identifiant" value="">
                    </div>
                    <div class="form-group">
                      <input type="text" name="pseudo" id="pseudo" tabindex="1" class="form-control" placeholder="Pseudo" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" id="username" tabindex="1" class="form-control" placeholder="Mot de passe" value="">
                    </div>
                    <div class="form-group">
                      <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmer mot de passe">
                    </div>
                    <div class="form-group">
                      <input type="date" name="birthdate" id="date" tabindex="1" class="form-control" value="">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-6 col-sm-offset-3">
                          <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Inscription">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<?php include "IHM/structure/footer.html"; ?>

</html>