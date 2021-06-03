<?php
session_start();
require('../connexion/bdd-connect.php');
if (isset($_POST['inscription'])) {
    if (!empty($_POST['email'])) {
        if (!empty($_POST['password']) && !empty($_POST['password2'])) {
            if ($_POST['password']===$_POST['password2']) {
                $email=$_POST['email'];
                $password=$_POST['password'];
                $requete = "INSERT INTO `user`(`user_id`, `statut`, `user_email`, `user_password`) VALUES (null,'user','$email','$password')";
                $send = $dbh->query($requete);
                if ($send) {
                    $success='Votre compte à bien été créé. <a href="login.php">Se connecter</a>';
                }else {
                    $error="Erreur lors de l'enregistrement.";
                }
            }else {
                $error="Les mots de passe ne correspondent pas.";
            }
        }else {
            $error="Mot(s) de passe manquant(s).";
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
    <title>Inscription</title>
</head>

<body>
    <?php
    require('../elements/navbar2.php');
    ?>
    <div class="container">
        <section class="hero is-transparent">
            <div class="hero-body">
                <p class="title">
                    Inscription
                </p>
                <p class="subtitle">
                    Vous devez vous inscrire pour accéder à toutes les fonctionnalités du site.
                </p>
            </div>
        </section>
        <div class="columns">
            <div class="column is-6 is-offset-3 mt-6">
                <?php
                    if (isset($error)) {
                        echo $error;
                    }
                    if (isset($success)) {
                        echo $success;
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
                    <div class="field">
                        <label class="label">Veuillez répéter votre mot de passe</label>
                        <div class="control">
                            <input class="input" name="password2" type="password" placeholder="********">
                        </div>
                    </div>
                    <div class="level">
                        <div class="level-left"></div>
                        <div class="level-right">
                            <div class="level-item">
                                <input type="submit" name="inscription" value="S'inscrire" class="button is-light">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <section class="section is-large"></section>
    </div>
    <?php
require('../elements/footer.php');
require('../elements/import-js.php');
?>
</body>

</html>