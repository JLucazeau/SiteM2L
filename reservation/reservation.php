<?php
session_start();
require('../connexion/bdd-connect.php');
if (!isset($_SESSION['user_id'])) {
    header('location:../connexion/login.php');
}
if (isset($_POST['reserver'])) {
    $titre=$_POST['titre'];
    $date=$_GET['date'];
    $plage=$_GET['idHeure'];
    $salle=$_GET['idSalle'];
    $user=$_SESSION['user_id'];
    $requete="INSERT INTO `reservation` VALUES (null,'$titre','$date',$user,$salle,$plage)";
    $send=$dbh->query($requete);
    if ($send) {
        $statut=true;
    }else {
        $statut=false;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require('../elements/head.php');
    ?>
    <title>Reservation</title>
</head>

<body>

    <?php
    require('../elements/navbar2.php');
    ?>
    <section class="hero is-transparent container">
        <div class="hero-body">
            <p class="title">
                Reservation
            </p>
            <p class="subtitle">

            </p>

        </div>
    </section>
    <div class="container">
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <?php
                if (isset($statut)) {
                    if ($statut===true) {
                        ?>
                        <div class="notification is-success">
                            Réservation effectué avec succès.
                        </div>
                        <?php
                    }else {
                        ?>
                        <div class="notification is-danger">
                            Erreur lors de la réservation.
                        </div>
                        <?php
                    }
                }
                ?>
                <form action="" method="post">
                    <div class="box mt-6">
                        <div class="field">
                            <label class="label">Titre</label>
                            <div class="control">
                                <input class="input" type="text" name="titre">
                            </div>
                        </div>
                        <div class="field mt-6">
                            <div class="control">
                                <input class="button is-link" type="submit" name="reserver" value="Réserver">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    require('../elements/footer.php');
    ?>

</body>

</html>