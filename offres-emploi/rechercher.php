<?php
session_start();
require('../connexion/bdd-connect.php');
if (!isset($_SESSION['user_id'])) {
    header('location:../connexion/login.php');
}
if (isset($_POST['value'])) {
    $value=$_POST['value'];
}
if (isset($_GET['value'])) {
    $value=$_GET['value'];
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
                Voici les réponses pour : <?=$value?>
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
                        <form id="test" action="" method="post">
                            <input class="input" name="value" type="search" placeholder="Rechercher une offre..">
                        </form>
                        <script src="../js/search-pressing-enter.js"></script>
                    </div>
                    <a class="navbar-item" href="poster.php">Poster</a>
                </div>
            </div>
        </div>
    </nav>
    <section class="container is-large">
        <div class="column">
            <div class="box content">
                <?php
                    $user_id=$_SESSION['user_id'];
                    $requete = "SELECT * FROM offre
                    WHERE offre_titre LIKE '%$value%'
                    OR offre_categorie LIKE '%$value%'
                    OR offre_entreprise LIKE '%$value%'
                    OR offre_ville LIKE '%$value%'
                    OR offre_cp LIKE '%$value%'
                    OR offre_accroche LIKE '%$value%'
                    OR offre_description LIKE '%$value%'
                    OR offre_contrat LIKE '%$value%'";
                    $send = $dbh->query($requete);
                    $count= $send->rowcount();
                    while ($bdd=$send->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                        <article class="post">
                            <h4><?=$bdd['offre_titre']?></h4>
                            <p><?=$bdd['offre_entreprise']?> / <?=$bdd['offre_ville']?>(<?=$bdd['offre_cp']?>) <a><span
                                        class="tag is-default"><?=ucfirst($bdd['offre_categorie'])?></span></a></p>
                            <div class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p><?=$bdd['offre_accroche']?></p>
                                    </div>
                                    <div class="level">
                                        <div class="level-left">
                                            <form action="postuler.php" method="post">
                                                <input type="hidden" name="offre_createur" value="<?=$bdd['offre_createur']?>">
                                                <input type="hidden" name="offre_titre" value="<?=$bdd['offre_titre']?>">
                                                <input class="button is-link" type="submit" name="postuler" value="Postuler">
                                            </form>
                                        </div>
                                        <div class="level-right">
                                            <span><?=$bdd['offre_date']?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <hr>
                        <?php
                    }
                    if ($count==0) {
                        ?>
                        <div class="has-text-centered">
                            <p>Il n'y a aucune offre correspondante pour le moment. Modifiez votre recherche ou rééssayez plus tard.</p>
                            <a class="button is-info" href="../offres-emploi">Retour</a>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <?php
    require('../elements/footer.php');
    ?>
</body>

</html>