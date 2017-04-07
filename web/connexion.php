<?php
session_start();
$admin = new \laklak\controller\ConnexionController();
if (isset($_POST['email']) && isset($_POST['mdp'])){
    $user = $_POST['email'];
    $mdp = $_POST['mdp'];
    $admin->verif($user,$mdp);
}

?>

<div class="presentation">
    <h1>LAKLAK PRODUCTIONS - Administration</h1>

</div>

</div>
<div class="container">
    <div class="card card-container">
        <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin">
            <span id="reauth-email" class="reauth-email"></span>
            <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Adresse email" required autofocus>
            <input type="password" id="inputPassword" class="form-control" name="mdp" placeholder="Mot de passe" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Se souvenir de moi
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Je m'identifie</button>
        </form><!-- /form -->
        <a href="#" class="forgot-password">
            Mot de passe oublié?
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->
<script type="text/javascript" src="js/connection.js"></script>