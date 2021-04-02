<style>
.nav-pills .nav-link.active, .nav-pills .show > .nav-link {
  color: #ffc107;
  background-color: #343a40;
}
a {
  color: #343a40;
  font-weight: bold;
}
</style>



<div class="container mt-5 mb-4">
  <div class="col-sm-8 ml-auto mr-auto">

    <!--lien selecdtion formulaire: -->
    <ul class="nav nav-pills nav-fill mb-1" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-signin-tab" data-toggle="pill" href="#pills-signin" role="tab" aria-controls="pills-signin" aria-selected="true">Se connecter :</a>
      </li>
      <li class="nav-item"> 
        <a class="nav-link" id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">S'inscrire :</a> 
      </li>
    </ul>

    <div class="tab-content" id="pills-tabContent">

      <div class="tab-pane fade show active" id="pills-signin" role="tabpanel" aria-labelledby="pills-signin-tab">
        <div class="col-sm-12 border border-secondary shadow rounded pt-2">

          <div class="text-center"><img src="https://www.flaticon.com/svg/vstatic/svg/1077/1077012.svg?token=exp=1617172312~hmac=9971d189e859e2338e0273290ca4aabe" class="rounded-circle border p-1" style="height: 80px; width: 80px;"></div>
          

          <!--page login: -->
          <form method="post" id="singninFrom">
            
            <div class="form-group">
              <label class="font-weight-bold">Email : <span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Entrer email connexion" required value="<?php if(isset($_POST['email'])){echo htmlspecialchars($_POST['email'], ENT_QUOTES);}?>">
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Mot Passe : <span class="text-danger">*</span></label>
              <input type="password" name="password" id="password" class="form-control" placeholder="***********" required value="<?php if(isset($_POST['password'])){echo htmlspecialchars($_POST['password'], ENT_QUOTES);}?>">
            </div>
            <!-- <div class="form-group">
              <div class="row">
                <div class="col">
                  <label><input type="checkbox" name="condition" id="condition"> Souvenir de moi.</label>
                </div>
                <div class="col text-right"> <a href="javascript:;" data-toggle="modal" data-target="#forgotPass">Forgot Password?</a> </div>
              </div>
            </div> -->
            <div class="form-group">
              <input type="submit" name="login" value="Entrer" class="btn btn-block btn-dark text-warning">
            </div>
          </form>
        </div>
      </div>


      <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
        <div class="col-sm-12 border border-secondary shadow rounded pt-2">

          <div class="text-center"><img src="https://www.flaticon.com/svg/vstatic/svg/197/197717.svg?token=exp=1617172435~hmac=3305dc5a2514c26e63842b165e52b2f1" class="rounded-circle border p-1" style="height: 80px; width: 80px;"></div>

          <!--page inscription-->
          


          <form method="post" enctype="multipart/form-data" id="singnupFrom">

            <div class="form-group">
              <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
              <input type="email" name="email" id="email" class="form-control" placeholder="Entrer email valide" required value="<?php if (isset($_POST['email'])) {echo htmlspecialchars($_POST['email'], ENT_QUOTES);} ?>">
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Nom <span class="text-danger">*</span></label>
              <input type="text" name="nom" id="nom" class="form-control" placeholder="Choisissez nom utilisateur" required value="<?php if (isset($_POST['nom'])) {echo htmlspecialchars($_POST['nom'], ENT_QUOTES);} ?>">
              <div class="text-danger"><em>Ce sera votre nom de connexion!</em></div>
            </div>
            <!-- <div class="form-group">
              <label class="font-weight-bold">Phone #</label>
              <input type="text" name="signupphone" id="signupphone" class="form-control" placeholder="(000)-(0000000)">
            </div> -->
            <div class="form-group">
              <label class="font-weight-bold">Mot de passe: <span class="text-danger">*</span></label>
              <input type="password" name="passwordSignup" id="passwordSignup" class="form-control" placeholder="***********" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? 'Minimum 6 charactères pour mot passe !' : ''); if(this.checkValidity()) form.password_two.pattern = this.value;" required value="<?php if (isset($_POST['passwordSignup'])) {echo htmlspecialchars($_POST['passwordSignup'], ENT_QUOTES);} ?>">
            </div>
            <div class="form-group">
              <label class="font-weight-bold">Confirmer mot passe: <span class="text-danger">*</span></label>
              <input type="password" name="password2" id="password2" class="form-control" pattern="^\S{6,}$" onchange="this.setCustomValidity(this.validity.patternMismatch ? ' Entrer le même mot passe précédent' : '');" placeholder="***********" required value="<?php if (isset($_POST['password2'])) {echo htmlspecialchars($_POST['password2'], ENT_QUOTES);} ?>">
            </div>
            <!-- <div class="form-group">
              <label><input type="checkbox" name="signupcondition" id="signupcondition" required> I agree with the <a href="javascript:;">Terms &amp; Conditions</a> for Registration.</label>
            </div> -->
            <div class="form-group">
              <input type="submit" name="signup" value="signer" class="btn btn-block btn-dark text-warning">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="forgotPass" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="post" id="forgotpassForm">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Forgot Password</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Email <span class="text-danger">*</span></label>
              <input type="email" name="forgotemail" id="forgotemail" class="form-control" placeholder="Enter your valid email..." required>
            </div>
            <div class="form-group">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sign In</button>
            <button type="submit" name="forgotPass" class="btn btn-primary"><i class="fa fa-envelope"></i> Send Request</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>