<?php
session_start();
require('../connexion/bdd-connect.php');
if (!isset($_SESSION['user_id'])) {
    header('location:../connexion/login.php');
}
if (isset($_POST['enregistrer'])) {
    $titre=addslashes ($_POST['titre']);
    $categorie=$_POST['categorie'];
    $entreprise=addslashes($_POST['entreprise']);
    $ville=addslashes($_POST['ville']);
    $cp=$_POST['cp'];
    $accroche=addslashes ($_POST['accroche']);
    $description=addslashes($_POST['description']);
    $contrat=$_POST['contrat'];
    $date=$_POST['date'];
    $createur=$_SESSION['user_id'];
    $requete="INSERT INTO `offre`(`offre_id`, `offre_titre`, `offre_categorie`, `offre_entreprise`, `offre_ville`, `offre_cp`, `offre_accroche`, `offre_description`, `offre_contrat`, `offre_date`, `offre_createur`) 
    VALUES (null,'$titre','$categorie','$entreprise','$ville',$cp,'$accroche','$description','$contrat','$date',$createur)";
    $send = $dbh->query($requete);
    if ($send) {
        $color="success";
        $result="Offre enregistrée avec succès"; 
    }else {
        $color="danger";
        $result="Erreur lors de l'enregistrement"; 
    }

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
                Poster une offre
            </p>
            <p class="subtitle">
                Voici le formulaire pour déposer une offre d'emploi.
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
                            <label class="label">Titre</label>
                            <div class="control">
                                <input class="input" type="text" name="titre" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Catégorie</label>
                            <div class="control">
                                <div class="select">
                                    <select name="categorie" required>
                                        <option value="coaching">Coaching</option>
                                        <option value="gestion">Gestion</option>
                                        <option value="vente">Vente</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Entreprise</label>
                            <div class="control">
                                <input class="input" type="text" name="entreprise" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Ville</label>
                            <div class="control">
                                <input class="input" type="text" name="ville" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Code postal</label>
                            <div class="control">
                                <input class="input" type="text" name="cp" maxlength="5" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Phrase d'accroche</label>
                            <div class="control">
                                <input class="input" type="text" name="accroche" maxlength="250" required>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Description</label>
                            <div class="control">
                                <textarea class="textarea" name="description" maxlength="1000" required></textarea>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">Contrat</label>
                            <div class="control">
                                <div class="select">
                                    <select name="contrat" required>
                                        <option value="CDI">CDI</option>
                                        <option value="CDD">CDD</option>
                                        <option value="STAGE">Stage</option>
                                        <option value="ALTERNANCE">Alternance</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="field">
                            <label class="label">date</label>
                            <div class="control">
                                <input class="input" type="date" name="date" required>
                            </div>
                        </div>

                        <div class="field is-grouped mt-6">
                            <div class="control">
                                <input class="button is-link" type="submit" name="enregistrer" value="Enregistrer">
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