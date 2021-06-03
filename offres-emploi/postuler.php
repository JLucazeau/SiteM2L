<?php
session_start();
require('../connexion/bdd-connect.php');
if (!isset($_SESSION['user_id'])) {
    header('location:../connexion/login.php');
}
if (isset($_POST['postuler'])) {
    $createur=$_POST['offre_createur'];
    $titre=$_POST['offre_titre'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require('../elements/head.php');
    ?>
    <title>Offres d'emploi</title>
</head>

<body>
    <?php
    require('../elements/navbar2.php');
    ?>
    <section class="hero is-transparent container">
        <div class="hero-body">
            <p class="title">
                Répondre à une offre
            </p>
            <p class="subtitle">
                Voici le formulaire pour postuler auprès du recruteur de l'offre.
            </p>
        </div>
    </section>
    <nav class="navbar is-white">
        <div class="container">
            <div class="navbar-menu">
                <div class="navbar-end">
                    <div class="navbar-item">
                        <form id="test" action="rechercher.php" method="post">
                            <input class="input" name="value" type="search" placeholder="Rechercher une offre..">
                        </form>
                        <script src="../js/search-pressing-enter.js"></script>
                    </div>
                    <a class="navbar-item" href="poster.php">Poster</a>
                    <?php
                        if ($_SESSION['statut']==='admin') {
                            ?>
                    <a class="navbar-item">Administrer</a>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </nav>
    <section class="container">
        <div class="columns">
            <div class="column is-8 is-offset-2">
                <?php
                if (isset($result)) {
                    ?>
                <div class="notification is-<?=$color?>">
                    <?=$result?>
                </div>
                <?php
                }?>
                <div class="box mt-6">
                    <form action="" method="post">
                        <div class="field">
                            <label class="label">Email</label>
                            <div class="control">
                                <input class="input" type="text" name="email" disabled
                                    placeholder="<?=$_SESSION['user_email']?>">
                                <input type="hidden" name="offre_createur" value="<?=$_POST['offre_createur']?>">
                                <input type="hidden" name="offre_titre" value="<?=$_POST['offre_titre']?>">
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Objet</label>
                            <div class="control">
                                <input class="input" type="text" name="objet" disabled
                                    placeholder="En réponse à : <?=$_POST['offre_titre']?>"">
                            </div>
                        </div>
                        <div class=" field">
                                <label class="label">Message</label>
                                <div class="control">
                                    <textarea class="textarea" name="message" maxlength="1000" required></textarea>
                                </div>
                            </div>
                            <div class="file has-name">
                                <label class="file-label">
                                    <input class="file-input" type="file" name="resume">
                                    <span class="file-cta">
                                        <span class="file-icon">
                                            <i class="fas fa-upload"></i>
                                        </span>
                                        <span class="file-label">
                                            Parcourir..
                                        </span>
                                    </span>
                                </label>
                            </div>

                            <div class="field is-grouped mt-6">
                                <div class="control">
                                    <input class="button is-link" type="submit" name="envoyer" value="Envoyer" disabled>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    require('../elements/footer.php');
    ?>

</body>


</html>