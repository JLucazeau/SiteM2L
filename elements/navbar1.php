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
                        <a class="navbar-link is-arrowless" href="about.php">
                            À Propos
                        </a>

                        <div class="navbar-dropdown">

                            <a class="navbar-item" href="about.php?#locaux">
                                Locaux
                            </a>
                            <a class="navbar-item" href="about.php?#personnel">
                                Personnel
                            </a>
                            <a class="navbar-item" href="about.php?#equipements">
                                Equipments
                            </a>
                            <a class="navbar-item" href="about.php?#services">
                                Services
                            </a>
                        </div>
                    </div>
                    <div class="navbar-item has-dropdown is-hoverable">
                        <p class="navbar-link is-arrowless">
                            Sports
                        </p>
                        <div class="navbar-dropdown">

                            <a class="navbar-item" href="http://www.grandestcyclisme.fr/">
                                Cyclisme
                            </a>
                            <a class="navbar-item" href="https://www.judograndest.fr/">
                                Judo
                            </a>
                            <a class="navbar-item" href="https://www.ligue-grandest-fft.fr/">
                                Tennis
                            </a>
                            <a class="navbar-item" href="https://grandest.ffnatation.fr/script/index.php">
                                Natation
                            </a>
                            <a class="navbar-item" href="https://tiralarc-grand-est.fr/">
                                Tir à l'arc
                            </a>
                        </div>
                    </div>

                    <a class="navbar-item" href="offres-emploi">
                        Offres d'emploi
                    </a>

                    <a class="navbar-item" disabled>
                        Reservation de salle
                    </a>

                    <a class="navbar-item" href="contact.php">
                        Contact
                    </a>
                </div>
                <div class="navbar-end">
                    <?php
                    if (isset($_SESSION['user_email']) && isset($_SESSION['user_password'])) {
                        ?>
                    <div class="navbar-item">
                        <?=$_SESSION['user_email']?>&nbsp;Connecté(e).
                    </div>
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-link" href="connexion/disconnect.php"><strong>Se
                                    déconnecter</strong></a>
                        </div>
                    </div>
                    <?php
                    }else {
                        ?>
                    <div class="navbar-item">
                        <div class="buttons">
                            <a class="button is-light" href="connexion/signup.php"><strong>S'inscrire</strong></a>
                            <a class="button is-link" href="connexion/login.php">Se connecter</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </nav>