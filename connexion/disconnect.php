<?php
session_start();
session_destroy();
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
<nav class="navbar is-light" role="navigation" aria-label="main navigation">
        <div class="container">
            <div class="navbar-brand">
                <a class="navbar-item" href="../">
                <h1 class="title is-1 is-white">M2L</h1>
                </a>
                <span class="navbar-burger burger" data-target="navbarMenu">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </div>

            <div id="navbarMenu" class="navbar-menu">
                <div class="navbar-start">
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                            Qui sommes nous ?
                        </a>

                        <div class="navbar-dropdown">

                            <a class="navbar-item">
                                Locaux
                            </a>
                            <a class="navbar-item">
                                Personnel
                            </a>
                            <a class="navbar-item">
                                Equipments
                            </a>
                            <a class="navbar-item">
                                Services
                            </a>
                        </div>
                    </div>
                    <a class="navbar-item">
                        Sports
                    </a>

                    <a class="navbar-item" href="../offres-emploi">
                        Offres d'emploi
                    </a>

                    <a class="navbar-item" href="../reservation">
                        Resevation de salle
                    </a>

                    <a class="navbar-item">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <script src="js/bulma-burger.js"></script>
    <div class="container">
        <section class="hero is-transparent">
            <div class="hero-body">
                <p class="title">
                    Déconnecté(e)
                </p>
                <p class="subtitle">
                    Vous avez été déconnecté(e) de votre session.
                </p>
                <a href="../" class="button is-link">Retour</a>
            </div>
        </section>
    </div>
</body>

</html>
<?php
require('../elements/import-js.php');
?>