<div class="wrapper">
  <div class="container" style="padding: 0px;">
    <div class="col-left font-weight-bold">
      <div class="login-text">
        <h2>Créer un compte</h2>
        <p>C'est totalement GRATUIT.</p>
        <a class="btn" href="signUp.php">Sign Up
        </a>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Login</h2>

        <?php
          Include dirname(dirname(__DIR__)).'/controllers/authentification.php';
          if(isset($_POST['connecter'])){
            $messageValidation = validationConnexion();
        }

          //Message retourné en cas d'erreur
        if(isset($messageValidation[2])){
          echo $messageValidation[2];
      }
        ?>

        <form method="POST" enctype="multipart/form-data" >
          <p>
            <label>Entrer adresse Email<span>*</span></label>
            <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Votre adresse email" name="email" required>
          </p>
          <p>
            <label>Password<span>*</span></label>
            <input type="password" class="form-control" id="password" placeholder="Votre adresse mot de passe"  name="password" required>
          </p>
          <p>
          <button type="submit" class="btn btn-primary mr-4" name="connecter">Se connecter</button>
          </p>
          <p>
            <a href="">Forget Password?(bientôt)</a>
          </p>
        </form>
      </div>
    </div>
  </div>
</div>