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
    <title>Administration</title>
</head>

<body>
    <?php
    require('../elements/navbar2.php');
    ?>
    <div class="container">
        <div class="columns">
            <div class="column is-3 ">
                <aside class="menu is-hidden-mobile mt-6">
                    <p class="menu-label">
                        General
                    </p>
                    <ul class="menu-list">
                        <li><a href="index.php?categorie=utilisateurs">Utilisateurs</a></li>
                    </ul>
                    <!--
                    <p class="menu-label">
                        Offres d'emploi
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a href="index.php?categorie=offres">Offres</a>
                            <ul>
                                <li><a href="index.php?categorie=ajouter">Ajouter</a></li>
                                <li><a href="index.php?categorie=supprimer">Supprimer</a></li>
                                <li><a href="index.php?categorie=modifier">Modifier</a></li>
                            </ul>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Réservation de Salle
                    </p>
                    <ul class="menu-list">
                        <li><a href="index.php?categorie=reservations">Réservations</a></li>
                        <li><a href="index.php?categorie=salles">Salles</a></li>
                    </ul>
                    -->
                </aside>
            </div>
            <div class="column is-9">
                <section class="hero is-info welcome is-small mt-6">
                    <div class="hero-body">
                        <div class="container">
                            <h1 class="title">
                                Hello, Admin.
                            </h1>
                            <h2 class="subtitle">
                                J'espere que vous passez une bonne journée !
                            </h2>
                        </div>
                    </div>
                </section>

                <section class="info-tiles">
                    <div class="tile is-ancestor has-text-centered my-2">
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <?php 
                                    $requete="SELECT COUNT(*) as total FROM user";
                                    $send = $dbh->query($requete);
                                    $bdd=$send->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <p class="title"><?=$bdd['total']?></p>
                                <p class="subtitle">Utilisateurs</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <?php 
                                    $requete="SELECT COUNT(*) as total FROM offre";
                                    $send = $dbh->query($requete);
                                    $bdd=$send->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <p class="title"><?=$bdd['total']?></p>
                                <p class="subtitle">Offres d'emploi</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child box">
                                <?php 
                                    $requete="SELECT COUNT(*) as total FROM reservation";
                                    $send = $dbh->query($requete);
                                    $bdd=$send->fetch(PDO::FETCH_ASSOC);
                                ?>
                                <p class="title"><?=$bdd['total']?></p>
                                <p class="subtitle">Reservations de salle</p>
                            </article>
                        </div>
                    </div>
                </section>

                <?php
                if (isset($_GET['categorie'])) {
                    $categorie=$_GET['categorie'];
                
                switch ($categorie) {
                    default:
                        require('utilisateurs/index.php');
                        break;
                    case 'utilisateurs':
                        require('utilisateurs/index.php');
                        break;
                    case 'offres':
                        require('offres/ajouter.php');
                        require('offres/supprimer.php');
                        require('offres/modifier.php');
                        break;
                    case 'ajouter':
                        require('offres/ajouter.php');
                        break;
                    case 'supprimer':
                        require('offres/supprimer.php');
                        break;
                    case 'modifier':
                        require('offres/modifier.php');
                        break;
                    case 'reservations':
                        require('reservations/index.php');
                        break;
                    case 'salles':
                        require('reservations/salles.php');
                        break;
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    require('../elements/footer.php');
    ?>

</body>

</html>