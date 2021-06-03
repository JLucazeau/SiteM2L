<?php
session_start();
require('../connexion/bdd-connect.php');
if (!isset($_SESSION['user_id'])) {
    header('location:../connexion/login.php');
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
                Offres d'emploi
            </p>
            <p class="subtitle">
                Toutes les offres d'emploi de la région dans le domaine du sport.
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
            <div class="column is-3">
                <aside class="menu">
                    <p class="menu-label m-2">
                        Catégories
                    </p>
                    <ul class="menu-list">
                        <li>
                            <form action="rechercher.php" method="post">
                                <input type="hidden" name="value" value="coaching">
                                <input class="button is-info m-1" type="submit" value="Coaching">
                            </form>
                        </li>
                        <li>
                            <form action="rechercher.php" method="post">
                                <input type="hidden" name="value" value="gestion">
                                <input class="button is-info m-1" type="submit" value="Gestion">
                            </form>
                        </li>
                        <li>
                            <form action="rechercher.php" method="post">
                                <input type="hidden" name="value" value="vente">
                                <input class="button is-info m-1" type="submit" value="Vente">
                            </form>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="column is-9">
                <div class="box content mt-6">
                    <?php
                    $user_id=$_SESSION['user_id'];
                    $requete = "SELECT * FROM `offre`";
                    $send = $dbh->query($requete);
                    while ($bdd=$send->fetch(PDO::FETCH_ASSOC)) {
                        ?>
                    <article class="post">
                        <h4><?=$bdd['offre_titre']?></h4>
                        <p><?=$bdd['offre_entreprise']?> / <?=$bdd['offre_ville']?>(<?=$bdd['offre_cp']?>) <a><span
                                    class="tag is-default"><?=ucfirst($bdd['offre_categorie'])?></span></a></p>
                        <div class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>
                                        <?=$bdd['offre_accroche']?>

                                    </p>
                                </div>
                                <div class="level">
                                    <div class="level-left">
                                        <form action="postuler.php" method="post">
                                            <input type="hidden" name="offre_createur"
                                                value="<?=$bdd['offre_createur']?>">
                                            <input type="hidden" name="offre_titre" value="<?=$bdd['offre_titre']?>">
                                            <input class="button is-link" type="submit" name="postuler"
                                                value="Postuler">
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
                    ?>
                </div>
            </div>
        </div>
    </section>
    <?php
    require('../elements/footer.php');
    ?>

</body>

</html>