<div class="wrapper">
  <div class="container" style="padding: 0px;">
    <div class="col-left">
      <div class="login-text">
        <h2>Bonjour</h2>
        <p>Entrer les informations dans les champs</p>
      </div>
    </div>
    <div class="col-right">
      <div class="login-form">
        <h2>Inscription:</h2>

<!--Vérifie si un champs en vide avant lancer la vérifications des valeurs-->
<?php 
       
       @$prenom=$_POST["prenomUser"];
       @$login=$_POST["emailUser"];
       @$pass=$_POST["passwordUser"];
       @$repass=$_POST["repass"];
       @$valider=$_POST["signUp"];
       @$erreur="";
       if(isset($valider)){

          if(empty($prenom)) $erreur='<div class="alert alert-danger">Prenom laissé vide!</div>';
          elseif(empty($login)) $erreur='<div class="alert alert-danger">Email laissé vide!</div>';
          elseif(empty($pass)) $erreur='<div class="alert alert-danger">Mot de passe laissé vide!</div>';
          elseif(empty($repass)) $erreur='<div class="alert alert-danger">Veuillez confirmer le mot de passe saisie!</div>';
          else{
            include("../../controllers/inscription.php"); 
          }
        }    
        ?>

       <!--Début Formulaire inscription-->
       <?php
            if(isset($erreur)){
                echo $erreur;
            }
       ?>

        <form>

          <div>
          <label for="prenom" class="form-label">Prénoms*</label>
                        <input type="text" class="form-control" name="prenomUser" id="prenom" 
                        value="<?php if(isset($_POST['prenomUser'])){
                            echo $_POST['prenomUser'];
                        }?>">
          <div>

          <div>
          <label for="inputEmail4" class="form-label">Email*</label>
                        <input type="email" class="form-control" id="inputEmail4" name="emailUser" 
                        value="<?php if(isset($_POST['emailUser'])){
                            echo $_POST['emailUser'];
                        }?>">
          </div>
    
          <div>
          <label for="confirmPassword" class="form-label">Mot de passe*</label>
                        <input type="password" class="form-control" id="confirmPassword" name="passwordUser" >
          </div>

          <div class="mb-3">
          <label for="inputPassword4" class="form-label">Retaper Mot de passe*</label>
                        <input type="password" class="form-control" id="inputPassword4" name="repass">
                    </div>

          <div>
            <input type="submit" value="inscription" name="signUp"/>
          </div>

          <p>
            *Champs obligatoires
          </p>
        </form>
      </div>
    </div>
  </div>
</div>