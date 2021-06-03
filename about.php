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
        <section class="hero is-white" id="locaux">
            <div class="hero-body">
                <p class="title">
                    Locaux
                </p>
            </div>
        </section>
        <div>
            <p>Le site se compose de quatre bâtiments, dont deux dotés de quatre étages et
                donc de 5 niveaux (les bâtiments A et C) et deux de plain-pied (les bâtiments B et D) dotés d’un seul
                rez-de-chaussée. Les bâtiments C et D sont neufs. Les bâtiments A et B datent d'une quinzaine d'années.
                Les étages des bâtiments A et C hébergent les bureaux des ligues locataires et le rez-de-chaussée des
                quatre bâtiments héberge des espaces mutualisés : un amphithéâtre de 200 places avec une régie, 8 salles
                de réunion de 12 à 50 places, un hall d'accueil, une salle de convivialité et son office traiteur, ainsi
                qu'une salle de formation multimédia dotée de 24 postes. On y trouve également la partie « accueil » des
                neuf bureaux de l'administration de la M2L. <br><br>
                L’autre partie se trouve au premier étage du bâtiment C. Différents locaux de service (archives,
                stockage local d'entretien ...) se trouvent en sous-sol.
                En fonction de leur taille, les 24 structures hébergées occupent un ou plusieurs bureaux. Au total, la
                M2L offre 80 bureaux. A chaque étage des bâtiments de bureaux se trouve une petite salle de réunion que
                les ligues utilisent sans réservation. L'ensemble des autres salles ressources sont accessibles sur
                réservation, en journée comme en soirée.</p>
            <div class="columns is-mobile m-6">
                <div class="column"><img class="image is16by9" src="medias/plan01.png" alt=""></div>
                <div class="column"><img class="image is16by9" src="medias/plan02.png" alt=""></div>
                <div class="column"><img class="image is16by9" src="medias/plan03.png" alt=""></div>
            </div>
        </div>
        <section class="hero is-white" id="personnel">
            <div class="hero-body">
                <p class="title">
                    Personnel
                </p>
            </div>
        </section>
        <div class="">
            <div class="columns is-mobile">
                <div class="column">
                    <h3 class="subtitle ml-5">Administration</h3>
                    <div class="box">
                        <h5 class="title is-6">DIRECTEUR : Lucien Sapin</h5>
                        <p>Tel : 06.83.18.87.02 | Fax : +333.83.18.87.03</p>
                        <a href="mailto:lucien.gastaldello@m2l.fr">lucien.gastaldello@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>CHARGEE IMPACT EMPLOI : Nathalie Genais</h3>
                        <p>Tel : 06.83.18.87.05</p>
                        <a href="mailto:martine.genoux@m2l.fr">martine.genoux@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>CHARGEE D'INFOGRAPHIE : Lorette Giroux</h3>
                        <p>Tel : 06.83.18.87.06</p>
                        <a href="mailto:lorette.bossart@m2l.fr">lorette.bossart@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>SECRETAIRE COMPTABLE : Martine Dupont</h3>
                        <p>Tel : 06.83.18.87.07 | Fax : 06.83.18.87.03</p>
                        <a href="mailto:Jeannine.vuillemard@m2l.fr">Jeannine.vuillemard@m2l.fr</a>
                    </div>

                </div>
                <div class="column">
                    <h3 class="subtitle ml-5">Sport</h3>
                    <div class="box">
                        <h5 class="title is-6">DIRECTEUR : Lucien Sapin</h5>
                        <p>Tel : 06.83.18.87.02 | Fax : +333.83.18.87.03</p>
                        <a href="mailto:lucien.gastaldello@m2l.fr">lucien.gastaldello@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Judo : Nicholas Cloutier</h3>
                        <p>Tel : 06.65.32.34.54 </p>
                        <a href="mailto:Cloutier.Nicholas@m2l.fr">Cloutier.Nicholas@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Tennis : Anaïs Pariseaur</h3>
                        <p>Tel : 06.32.67.34.04 </p>
                        <a href="mailto:Pariseaur.Anaïs@m2l.fr">Pariseaur.Anaïs@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Natation : Émilie Davignon</h3>
                        <p>Tel : 06.04.06.38.75 </p>
                        <a href="mailto:Davignon.Émilie@m2l.fr">Davignon.Émilie@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Cyclisme : Étienne Angélil</h3>
                        <p>Tel : 06.13.07.68.89 </p>
                        <a href="mailto:Angélil.Étienne@m2l.fr">Angélil.Étienne@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Tir à l'Arc : Élise Chicoine</h3>
                        <p>Tel : 06.87.60.10.65 </p>
                        <a href="mailto:Chicoine.Élise@m2l.fr">Chicoine.Élise@m2l.fr</a>
                    </div>
                    <div class="box">
                        <h3>Modélisme : Roland Paquet</h3>
                        <p>Tel : 06.52.77.63.73 </p>
                        <a href="mailto:Paquet.Roland@m2l.fr">Paquet.Roland@m2l.fr</a>
                    </div>
                </div>
            </div>
        </div>
        <section class="hero is-white" id="equipements">
            <div class="hero-body">
                <p class="title">
                    Equipements
                </p>
            </div>
        </section>
        <div>
            <p>Pour ce qui est des ordinateurs et des outils d'impression, la M2L ne dispose que de ses propres
                équipements, dans les bureaux d'administration du CROSL et dans la salle multimédia. Les bureaux des
                ligues sont équipés par les ligues elles-mêmes
                (hors mobilier de base). Des ressources d'impression mutualisées payantes sont néanmoins disponibles à
                l'administration de la M2L.</p>
            <hr>
            <h5 class="title is-5">Connectique fournie selon les espaces</h5>
            <p>Chaque bureau de ligue du bâtiment A dispose de deux prises Ethernet de catégorie 5 et d'une prise
                téléphonique. Dans le nouveau bâtiment C, ce sont trois prises Ethernet de catégorie 6 qui sont
                disponibles dans chaque bureau pour connecter du
                matériel informatique ou un appareil de téléphonie IP.<br><br>Chaque salle de réunion dispose d'une
                prise Ethernet pour la connexion d'un PC portable au réseau (de catégorie 5 dans le bâtiment B et 6 dans
                le bâtiment D). Elle dispose en outre
                d'un système fixe de vidéo projection, mais pas d'ordinateur à demeure.<br><br>La salle de formation
                multimédia dispose de 26 prises Ethernet de catégorie 5, une pour chacun des 25 PC (24 PC "stagiaires"
                et un PC "formateur"), et la dernière pour
                une imprimante réseau.<br><br>L'amphithéâtre dispose de 4 prises Ethernet de catégorie 5 sur le pupitre.
                Il dispose également d'un système de vidéo projection sur grand écran. Une prise Ethernet est disponible
                également dans la régie.<br><br>Les
                bureaux d'administration de la M2L disposent en tout de 27 prises de catégorie 6, pour les neuf bureaux.
                La salle de reprographie est dotée de 4 prises Ethernet de catégorie 6 pour les systèmes d’impression
                numériques connectés.<br><br>
            </p>
            <hr>
            <h5 class="title is-5">Implantation des écrans du réseau d'affichage et des bornes Wifi</h5>
            <p>Un système de diffusion d'informations est installé sur 3 écrans 42" dans les espaces de circulation. Ils
                servent essentiellement à l'information des visiteurs sur les lieux de réunion. Les écrans d'information
                sont renseignés depuis
                l'administration de la M2L.<br><br>Un réseau Wifi gratuit est disponible pour les visiteurs dans les
                espaces de réunion du rez-de-chaussée, mais également dans les étages des bureaux des ligues (les bornes
                y sont positionnées en quinconce d'un
                étage à l'autre).</p>
            <br>
            <h5 class="title is-5">Schéma d'implantation des bornes Wifi et du réseau d'affichage</h5>
            <img class="image m-6" src="medias/plan04.png" alt="Schéma d'implantation des bornes Wifi et du réseau d'affichage">
            <hr>
            <h5 class="title is-5">Implantation des baies de brassage</h5>
            <p>Il y a eu un laps de temps important entre la construction des bâtiments A et B (construits au début des
                années 90) et C et D (tout dernièrement construits, en 2010).<br><br>Pour le bâtiment A, on trouve une
                armoire de brassage secondaire pour
                chacun des 4 niveaux d'implantation des bureaux de ligues. Chacune de ces armoires regroupe 22 prises
                Ethernet : 20 vers les bureaux, une vers la borne Wifi et une vers la salle de réunion. On trouve un
                commutateur 26 ports dans chacune de ces
                armoires (24 ports 10/100 et deux ports Giga combo RJ-45 / SFP). Ces armoires de brassage sont
                connectées à une armoire centralisatrice au rez-de-chaussée, dans un petit local climatisé du bâtiment
                B.<br><br>Pour le nouveau bâtiment C, on a
                positionné une seule armoire de brassage au niveau quasi central du second étage du bâtiment. Cette
                armoire réunit 128 prises, 32 par étage (3 par bureau, une prise pour la salle de réunion et une pour la
                borne wifi). On y trouve 4 commutateurs
                48 ports, dont tous les ports sont utilisables en gigabits/s. Cette armoire est connectée en fibre
                optique à l'armoire centralisatrice du bâtiment B.<br><br>
                Les salles du RDC des nouveaux bâtiments C et D (salles à réservations, bureaux d'administration de la
                M2L, la salle de reprographie) ainsi que les bornes Wifi et les 3 écrans d'information sont tous
                connectés à l'armoire de brassage principale
                du bâtiment B dans laquelle on trouve 2 commutateurs à 24 ports et un routeur. C'est également le lieu
                d'implantation de l'armoire à serveurs.<br><br>
            </p>
            <h5 class="title is-5">Schémas d'implantation des baies de brassage</h5>
            <p>Au Rez-de-chaussée</p>
            <img class="image m-6" src="medias/plan05.png" alt="Schéma rez-de-chaussée">
            <br><br>
            <p>Dans un étage du bâtiment A</p>
            <img class="image m-6" src="medias/plan06.png" alt="Schéma étage bâtiment (Bat. A)">
            <p>C'est au rez-de-chaussée, dans la baie de brassage principale du bâtiment B que sont regroupés les
                différents réseaux au moyen de 2 commutateurs-routeurs 24 ports empilés, l'accès Internet et l'accès
                téléphonique standard et IP.</p>
            <hr>
            <h5 class="title is-5">Réseaux informatiques</h5>
            <p>La M2L dispose actuellement :<br>
            <ul>
                <li>D'un réseau commun aux ligues et à l'administration</li>
                <li>D'un réseau de type DMZ dans lequel on trouve un ensemble de serveurs accessibles depuis l'extérieur
                </li>
                <li>D'une connexion à internet</li>
            </ul>
            Note : une segmentation des réseaux est en projet pour augmenter la sécurité.<br><br>
            </p>
            <h5 class="title is-5">Réseaux IP</h5>
            <img class="image m-6" src="medias/plan07.png" alt="Schéma du réseau">
            <hr>
            <h5 class="title is-5">Les serveurs M2L</h5>
            <p>L'administration de la M2L dispose de plusieurs serveurs :<br>
            <ul>
                <li>Un serveur d'annuaire et de fichiers qui abrite également des bases de données de gestion et qui
                    fait office de serveur DHCP</li>
                <li>Un serveur d'impression relié aux différents moyens d'impression des bureaux et de la salle de
                    reprographie qui fait également office de serveur antiviral</li>
                <li>Un serveur NAS permettant la sauvegarde des données de l'administration et de celles des ligues</li>
            </ul>
            Dans la DMZ, on trouve :<br>
            <ul>
                <li>Un serveur web</li>
                <li>Un serveur de messagerie pour le domaine lorraine-sport.net. Les ligues ont des adresses du type
                    escrime@lorraine-sport.net</li>
                <li>Un serveur de gestion des configurations</li>
            </ul>
            </p>
            <br><br><br>
        </div>
        <section class="hero is-white" id="services">
            <div class="hero-body">
                <p class="title">
                    Services
                </p>
            </div>
        </section>
        <h5 class="title is-5">Accès Internet</h5>
        <p>Les ligues disposent d'un accès Internet mutualisé que la M2L loue à un prestataire extérieur.</p>
        <hr>
        <h5 class="title is-5">Accès Wifi</h5>
        <p>Dans tous les espaces, un réseau Wifi "visiteurs" est disponible, avec une clé WPA renouvelée régulièrement
            et communiquée aux ligues. Ce réseau ne permet que l'accès à Internet.</p>
        <hr>
        <h5 class="title is-5">Téléphonie</h5>
        <p>Dans les bâtiments anciens A et B, les salles et bureaux sont équipés de prises de téléphone analogiques. La
            M2L y fournit les combinés téléphoniques. Dans les bâtiments neufs C et D, l'équipement téléphonique est de
            type VoIP. La M2L loue des postes téléphoniques IP aux ligues.</p>
        <hr>
        <h5 class="title is-5">Affranchissement</h5>
        <p>Une machine à affranchir permet un affranchissement rapide et en nombre. Cette prestation est facturée aux
            ligues au coût de l'affranchissement. Chaque mois, on relie la machine à affranchir à une imprimante pour
            obtenir une liste de codes de gestion correspondant aux ligues associés à une quantité et un type
            d'affranchissement. La prise en compte de ces informations permet au CROSL d'éditer des factures.</p>
        <hr>
        <h5 class="title is-5">Impressions en volume et en qualité imprimerie</h5>
        <p>Les ligues disposent de la possibilité d'imprimer sur des ressources d'impression numériques connectées
            situées dans le local reprographie du rez-de-chaussée dont l'usage fait l'objet d'une facturation à prix
            coûtant. Un système de comptage situé sur le serveur d'impression permet au CROSL d’effectuer une
            facturation mensuelle auprès des ligues.
        <ul>
            <li>Une photocopieuse noir et blanc à 70 pages/minute avec différents dispositifs de finition.</li>
            <li>Une imprimante Laser couleur A4/A3 à encre solide à 25 pages/minute.</li>
            <li>Un traceur A2 (1 page / minute) utilisé pour les affiches et banderoles.</li>
        </ul>
        </p>
        <hr>
        <h5 class="title is-5">Serveur FTP documentaire</h5>
        <p>La M2L met à disposition des ligues un serveur FTP documentaire intranet/internet regroupant des textes
            légaux, des modèles de dossiers, de statuts, des programmes de formation (...) compilés par le CROSL.</p>
        <hr>
        <h5 class="title is-5">Système de réservation des salles</h5>
        <p>La M2L met à disposition des ligues un site web de réservation des salles (réunions, amphithéâtre,
            restauration). Ce site est accessible en intranet, mais aussi depuis l'internet. Les réservations payantes
            sont facturées par la Région aux utilisateurs. L’administration de la M2L lui communique les informations
            nécessaires à cette facturation de façon hebdomadaire.</p>
        <hr>
        <h5 class="title is-5">Information sur le digicode du jour et la clé Wifi</h5>
        <p>La M2L met à disposition des ligues un site web d'information sur le digicode permettant l'accès à la M2L
            ainsi que sur la clé Wifi "visiteurs". Le système de réservation donne également le digicode du jour dans le
            compte-rendu de réservation envoyé automatiquement par mail.</p>
        <hr>
        <h5 class="title is-5">Système de gestion des configurations</h5>
        <p>M2L gère à travers un logiciel de gestion des configurations l'ensemble du parc informatique incluant les
            postes fixes des ligues.</p>
        <hr>
        <h5 class="title is-5">Intégration des postes informatiques des ligues</h5>
        <p>Lorsque les ligues acquièrent du matériel informatique, il y a une phase obligatoire d'intégration qui
            consiste à :
        <ul>
            <li>installer un antivirus affilié au serveur antiviral de la M2L.</li>
            <li>installer la dernière version de l'agent qui réalise l’inventaire matériel et logiciel</li>
            <li>paramétrer le poste en adressage IP automatique,</li>
            <li>installer un système de sauvegarde de données sur un site FTP de sauvegarde géré par la M2L,</li>
            <li>effectuer les dernières mises à jour systèmes et à paramétrer leur automatisation,</li>
            <li>paramétrer les noms des postes selon les règles de gestion suivantes :<br>
                B[code bâtiment]E[numéro étage]L[numéro ligue]S[numéro salle].P[numéro poste]
                <b>Code bâtiment</b> qui peut être A ou C <br>
                <b>N° étage</b> est compris entre 1 et 4 (puisque les locaux du rez-de-chaussée n'hébergent pas de
                ligues)<br>
                <b>N° ligue</b> sur 2 chiffres : correspond à un nombre attribué à la ligue allant pour l'instant de 01
                à 24<br>
                <b>N° salle</b> sur 2 chiffres : correspond aux bureaux occupés par les ligues<br>
                <b>N° poste</b> sur 2 chiffres : correspond au numéro écrit sur la prise murale<br>
                Exemple : le nom d'hôte BAE2L06S01P01 correspond au poste installé sur la prise N°1 du bureau A201
                occupé par la ligue de Volley, bureau situé au deuxième étage du bâtiment A.<br>
            </li>
        </ul>
        </p>
        <p>Cette intégration est contractualisée. Les ligues et CD étant toutes des structures associatives
            indépendantes, leurs postes ne sont pas intégrés dans un annuaire central. Par contre, les postes de
            l'administration de la M2L et de la salle multimédia le sont.</p>
        <hr>
        <h5 class="title is-5">Intégration d'imprimantes</h5>
        <p>Lorsque les structures hébergées s'équipent d'imprimante réseau, la connexion en est réalisée par
            l'informaticien bénévole du CROSL, sans passer par un serveur d'impression. Le nom de l'imprimante est lui
            aussi codifié de la même façon que celui des postes (la lettre L vient remplacer la lettre P).</p>
        <hr>
        <h5 class="title is-5">Service d'établissement de bulletins de salaire</h5>
        <p>Le CRIB (Centre Régional d'Information des Bénévoles) est un label donné au CROSL qui, entre autres missions
            d'information (sur les textes réglementaires, la convention nationale du sport ...), propose un service
            d'établissement de bulletins de salaires aux ligues et à leurs clubs affiliés. Le CROSL est tiers de
            confiance pour l'URSSAF et, à ce titre, établit des bulletins de salaires réglementaires et tous les
            documents annexes. La prestation est facturée au forfait (60 € par an) et au bulletin édité (5 €). Un
            employé du CROSL est affecté à cette mission à raison de 0,8 ETP.<br><br>
            Illustration du processus pour une ligue qui fait établir ses bulletins de salaires par le CRIB, pour des
            animateurs à la vacation, comme pour ses employés permanents.<br><br>
            - La ligue établit une « déclaration unique d'embauche » et un contrat de travail.<br><br>
            - Les données "salaires" sont envoyées par les associations au CRIB avant le 15 du mois :<br>
        <ul>
            <li>Nom, prénom, date de naissance, adresse, n° de sécu, de l’intervenant ou du salarié</li>
            <li>Dates et heures d'intervention (de jour / de nuit)</li>
            <li>Heures congés payées associées</li>
            <li>Taux horaire</li>
            <li>Intitulé dans la grille de la convention nationale du sport (exemple : technicien niveau 3)</li>
        </ul>
        En retour, le CRIB fournit le bulletin de salaire et le document sur les charges périodiques.<br><br>
        Le salaire est viré par la ligue, si celle-ci a fait ce choix. Sinon il y a un prélèvement sur son compte et
        virement sur le compte du salarié.<br><br>
        Pour les versements aux organismes sociaux, il y a prélèvement direct sur le compte de la ligue.<br><br>
        </p>
        <hr>
        <h5 class="title is-5">Formations</h5>
        <p>Le CROSL offre un catalogue diversifié de formations aux bénévoles des clubs affiliés aux ligues
            (législation, éthique, comptabilité associative, etc.). Les ligues organisent également des formations, en
            général plus techniques, sur l'usage de logiciels spécifiques de gestion des clubs ou des compétitions
            sportives.</p>
        <br>
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