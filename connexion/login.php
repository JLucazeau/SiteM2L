<?php
session_start();
require('../connexion/bdd-connect.php');
if (isset($_POST['connexion'])) {
    if (!empty($_POST['email'])) {
        if (!empty($_POST['password'])) {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $requete = "SELECT * FROM user WHERE user_email = '$email'";
            $send = $dbh->query($requete);
            $count = $send->rowCount();
            if ($count>0) {
                $bdd=$send->fetch(PDO::FETCH_ASSOC);
                $bddPassword=$bdd['user_password'];
                if ($bddPassword===$password) {
                    $_SESSION['user_id']=$bdd['user_id'];
                    $_SESSION['statut']=$bdd['statut'];
                    $_SESSION['user_email']=$bdd['user_email'];
                    $_SESSION['user_password']=$bdd['user_password'];
                    header('location:../');
                }else {
                    $error="Mot de passe incorrect.";
                }
              }else {
                $error="Adresse email inconnue.";
              }
        }else {
            $error="Mot de passe manquant.";
        }
    }else {
        $error="Email manquant.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require('../elements/head.php');
    ?>
    <title>Connexion</title>
</head>

<body>
    <?php
    require('../elements/navbar2.php');
    ?>
    <div class="container">
        <section class="hero is-transparent">
            <div class="hero-body">
                <p class="title">
                    Connecter
                </p>
                <p class="subtitle">
                    Vous devez vous connecter à votre compte pour accéder à toutes les fonctionnalités du site.
                </p>
            </div>
        </section>
        <div class="columns">
            <div class="column is-6 is-offset-3 mt-6">
                <?php
                    if (isset($error)) {
                        echo $error;
                    }
                ?>
                <form class="box" action="" method="post">
                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control">
                            <input class="input" name="email" placeholder="martin.dubois@example.com">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Mot de passe</label>
                        <div class="control">
                            <input class="input" name="password" type="password" placeholder="********">
                        </div>
                    </div>
                    <div class="level">
                        <div class="level-left"></div>
                        <div class="level-right">
                            <div class="level-item">
                                <p>Pas encore de compte ? <a href="signup.php">S'inscrire.</a></p>
                            </div>
                            <div class="level-item">
                                <input type="submit" name="connexion" value="Se connecter" class="button is-link">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <section class="section is-large"></section>
    </div>
    <?php
    require('../elements/import-js.php');
    require('../elements/footer.php');
    ?>
</body>
</html>