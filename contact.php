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
    <title>M2L - À Propos</title>
</head>

<body>
    <?php
    require('elements/navbar1.php');
    ?>
    <!-- Debut de page -->
    <div class="container">
        <section class="hero is-white">
            <div class="hero-body">
                <p class="title">
                    Contact
                </p>
                <p class="subtitle">
                    N'hésitez pas à nous contacter si vous avez la moindre intérrogation.
                </p>
            </div>
        </section>
        <div class="columns">
            <div class="column is-6 is-offset-3">
                <div class="box mt-6">
                    <div class="field">
                        <label class="label">Nom</label>
                        <div class="control">
                            <input class="input" type="text">
                        </div>
                    </div>


                    <div class="field">
                        <label class="label">Email</label>
                        <div class="control ">
                            <input class="input" type="email">
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Objet</label>
                        <div class="control">
                            <div class="select">
                                <select>
                                    <option>Question</option>
                                    <option>Problème</option>
                                    <option>Annonce</option>
                                    <option>Candidature</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="field">
                        <label class="label">Message</label>
                        <div class="control">
                            <textarea class="textarea" ></textarea>
                        </div>
                    </div>

                    <div class="field mt-6">
                        <div class="control">
                            <button class="button is-link" disabled>Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section"></section>
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