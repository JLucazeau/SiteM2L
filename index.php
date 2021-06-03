<?php
session_start();
require('connexion/bdd-connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <link rel="stylesheet" href="css/bulmaswatch.min.css">
    <link rel="stylesheet" href="css/bulma-carousel.min.css">
    <title>M2L Website</title>
</head>

<body>
    <?php
    require('elements/navbar1.php');
    ?>
    <div class="container">
        <div id="carousel" class="carousel">
            <div class="item-1">
                <div class="card m-6">
                    <div class="card-image">
                        <figure class="image is-16by9">
                            <img src="medias/m2l-bat.jpg" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <div class="level">
                                <div class="level-left">
                                    <div class="">
                                        <p class="title">
                                            Maison des Ligues de Lorraine (M2L)
                                        </p>
                                        <p class="subtitle">
                                            N'hésiter pas à nous rendre visite dans nos locaux !
                                        </p>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="">
                                        <a href="https://www.google.com/maps/place/CROS+Grand+Est/@48.6974457,6.2145857,18z/data=!4m13!1m7!3m6!1s0x4794986e17a692cd:0x4ed671b10d82498d!2sNancy!3b1!8m2!3d48.692054!4d6.184417!3m4!1s0x0:0xbf2a63023e634c91!8m2!3d48.6979391!4d6.2149476"
                                            class="button is-link">Visiter</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="item-2">
                <div class="card m-6">
                    <div class="card-image">
                        <figure class="image is-16by9">
                            <img src="medias/paris-2024.jpg" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <div class="level">
                                <div class="level-left">
                                    <div class="">
                                        <p class="title">
                                            Préparez vous !
                                        </p>
                                        <p class="subtitle">
                                            En 2024, Paris a rendez-vous avec l'Histoire
                                        </p>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="">
                                        <a href="https://www.paris2024.org/fr/"
                                            class="button is-link">Visiter</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="item-3">
                <div class="card m-6">
                    <div class="card-image">
                        <figure class="image is-16by9">
                            <img src="medias/mosaic-sports.jpg" alt="">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <div class="level">
                                <div class="level-left">
                                    <div class="">
                                        <p class="title">
                                            Soutenez les clubs sportifs de votre région !
                                        </p>
                                        <p class="subtitle">
                                            Ensemble, aidons vos clubs à battre le virus et à sortir plus forts
                                            de cette période ! 
                                        </p>
                                    </div>
                                </div>
                                <div class="level-right">
                                    <div class="">
                                        <a href="https://www.soutienstonclub.fr/"
                                            class="button is-link">Visiter</a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr style="width:50%;margin:auto;">
    <section class="hero is-medium is-white">
        <div class="hero-body">
            <div class="container has-text-centered">
                <p class="title">
                    Maison des Ligues de Lorraine (M2L)
                </p>
                <p class="subtitle">
                    (SiteWeb dans un but pédagogique seulement)
                </p>
                <div class="columns">
                    <div class="column is-8 is-offset-2">
                        La Maison des Ligues de Lorraine (M2L) a pour mission de fournir des espaces et des services aux
                        différentes ligues sportives régionales de Lorraine et à d’autres structures hébergées. La M2L
                        est
                        une structure financée par le Conseil Régional de Lorraine dont l'administration est déléguée au
                        Comité Régional Olympique et Sportif de Lorraine (CROSL). Installée depuis 2003 dans la banlieue
                        Nancéienne, la M2L accueille l'ensemble du mouvement sportif Lorrain qui représente près de 6
                        500
                        clubs, plus de 525 000 licenciés et près de 50 000 bénévoles.
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr style="width:50%;margin:auto;">
    <div class="container">
        <section class="section is-medium">
            <div class="columns is-mobile has-text-centered">
                <div class="column">
                    <a href="http://www.grandestcyclisme.fr/">
                        <div class=""><img
                                src="https://img.icons8.com/android/128/000000/cycling-road.png" /><br>Cyclisme</div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://www.judograndest.fr/">
                        <div class=""><img src="https://img.icons8.com/ios-glyphs/128/000000/judo.png" /><br>Judo</div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://www.ligue-grandest-fft.fr/">
                        <div class=""><img
                                src="https://img.icons8.com/ios-glyphs/128/000000/table-tennis.png" /><br>Tennis</div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://grandest.ffnatation.fr/script/index.php">
                        <div class=""><img
                                src="https://img.icons8.com/fluent-systems-filled/128/000000/swimming.png" /><br>Natation
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="https://tiralarc-grand-est.fr/">
                        <div class=""><img src="https://img.icons8.com/ios-glyphs/128/000000/archery.png" /><br>Tir à
                            l'arc</div>
                    </a>
                </div>
            </div>
        </section>
        <hr style="width:50%;margin:auto;">
        <section class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-6 is-offset-3">
                    <h1 class="title">
                        NewsLetter
                    </h1>
                    <h2 class="subtitle">
                        La M2L utilise les newsletters comme outil de communication pour partager, aux utilisateurs qui
                        le souhaite, des annonces dans le domaine du sport en Lorraine ou des évènements futurs.
                    </h2>
                    <div class="">
                        <div class="field is-grouped">
                            <p class="control is-expanded">
                                <input class="input" type="text" placeholder="Votre Email">
                            </p>
                            <p class="control">
                                <a class="button is-info">
                                    S'inscrire !
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Fin de page -->
    <?php
    require('elements/footer.php');
    ?>
    <script src="js/bulma-burger.js"></script>
    <script src="js/bulma-modal.js"></script>
    <script src="js/bulma-tabs.js"></script>
    <script src="js/bulma-carousel.min.js"></script>
    <script src="js/carousel-custom.js"></script>
</body>
</html>