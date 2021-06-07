<?php
session_start();
require('../connexion/bdd-connect.php');
if (!isset($_SESSION['user_id'])) {
    header('location:../connexion/login.php');
}
if (isset($_POST['selectDate'])) {
    $date = $_POST['date'];
}else{
    date_default_timezone_set('Europe/Paris');
    $date = date('Y-m-d');
}
if (isset($_POST['close'])) {
    $key=$_POST['id_resa'];
    $delete="DELETE FROM reservation WHERE reservation_id=$key";
    $dbh->query($delete);
}
if (isset($_POST['supprimer_resa'])) {
    foreach ($_POST as $key => $value) {
      if ($key!='supprimer_resa') {
        $delete="DELETE FROM reservation WHERE reservation_id=$key";
        $dbh->query($delete);
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require('../elements/head.php');
    ?>
    <title>Réservation de salle</title>
</head>

<body>

    <?php
    require('../elements/navbar2.php');
    ?>
    <section class="hero is-transparent container">
        <div class="hero-body">
            <p class="title">
                Réserver une salle
            </p>
            <p class="subtitle">
                Vous avez besoin d'un espace de travail/enseignement/conférence ? nos salles sont à votre disposition.
            </p>
        </div>
    </section>
    <nav class="navbar is-white mb-6">
        <div class="container">
            <div class="navbar-menu">
                <div class="navbar-end">
                    <form id="test" action="" method="post">
                        <div class="navbar-item has-text-dark">
                            <input class="input" name="date" type="date" value="<?=$date;?>">
                            <input class="button" type="submit" name="selectDate" value="Rechercher">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="columns">
        <div class="column is-8 is-offset-1">
            <table class="table is-bordered">
                <thead>
                    <tr>
                        <th>Salle</th>
                        <?php 
                        $user_id=$_SESSION['user_id'];
                        $requete = "SELECT * FROM `salle`";
                        $dbh->query("SET NAMES utf8");
                        $send = $dbh->query($requete);
                        $listIDSalle=[];
                        $cpt=1;
                        while ($bdd=$send->fetch(PDO::FETCH_ASSOC)) 
                        {
                            echo "<th class=\"has-text-centered\"style=\"min-width:8vw;\">",$bdd['salle_nom'],"</th>";
                            $listIDSalle[$cpt]=$bdd['salle_id'];
                            $cpt+=1;
                        }
                        ?>
                    </tr>
                    <?php
                    $idHeure=1;
                    $cpt=$cpt-1;
                    for ($heure=8; $heure <22 ; $heure=$heure + 2) 
                    {
                        echo "  <tr>
                                <th class=\"has-text-centered is-one-fifth\">",$heure,"h - ",$heure+2,"h</th>";
                        for ($count=1; $count <= $cpt; $count++) 
                        {
                            $heure2 = $heure + 2;
                            $timestamp = strtotime(''.$heure2.':00'.':00');
                            $idSalle=$listIDSalle[$count];
                            $requete="SELECT reservation_id,reservation_titre, reservation_user_id FROM reservation WHERE reservation_date='$date' and reservation_salle_id=$idSalle and reservation_plage_id=$idHeure limit 1";
                            $send = $dbh->query($requete);
                            $check = $send->rowCount();
                            if ($check==0) 
                            { 
                                $url = "reservation.php?date=" . $date . "&idSalle=" . $idSalle . "&idHeure=" . $idHeure;
                                echo "  <td class=\"has-text-centered\" 
                                            onmouseover=\"this.style.cursor='pointer';this.style.background='#F5F5F5';\" 
                                            onmouseout=\"this.style.background='white';\" 
                                            onClick=\"location.href='",$url,"'\">
                                        </td>";
                            }
                            else 
                            {   
                                $bdd=$send->fetch(PDO::FETCH_ASSOC);
                                ?>
                    <td class="has-text-centered is-info">
                        <div>
                            <?php
                                                    if ($_SESSION['user_id']===$bdd['reservation_user_id']) {
                                                        ?>
                            <form class="" action="" method="post">
                                <input type="hidden" name="id_resa" value="<?=$bdd['reservation_id'];?>">
                                <button class="delete is-pulled-right" type="submit" name="close"></button>
                            </form>
                            <?php
                                                    }
                                                    ?>
                            <?=$bdd['reservation_titre']?>
                        </div>
                    </td>
                    <?php
                            }
                        }
                        echo "  </tr>";
                        $idHeure+=1;
                    }
                    ?>
            </table>
        </div>
    </div>
    <section class="hero is-transparent container" id="reservations">
        <div class="hero-body">
            <p class="title">
                Vos réservations
            </p>
            <p class="subtitle">
                Voici le récapitulatif de vos réservations.
            </p>
        </div>
    </section>
    <div class="columns">
        <div class="column is-8 is-offset-2">
            <form action="index.php#reservations" method="post">
                <div class="box">
                    <?php
                $requete="SELECT * FROM reservation r, salle s, plage_horaire p WHERE reservation_user_id = $user_id and r.reservation_salle_id = s.salle_id and r.reservation_plage_id = p.plage_id";
                $send = $dbh->query($requete);
                $check = $send->rowCount();
                if ($check==0) 
                { 
                    echo "Vous n'avez aucune réservation.";
                }
                else 
                {   
                    echo "<table class=\"table is-fullwidth\">";
                    echo "  <tr>
                                <td></td>
                                <td>Titre</td>
                                <td>Salle</td>
                                <td>Date</td>
                                <td>Début</td>
                                <td>Fin</td>
                            </tr>";
                    while ($bdd=$send->fetch(PDO::FETCH_ASSOC))
                    {
                        ?>
                    <tr>
                        <td><input type="checkbox" name="<?=$bdd['reservation_id']?>"></td>
                        <td><?=$bdd['reservation_titre']?></td>
                        <td><?=$bdd['salle_nom']?></td>
                        <td><?=date("d/m/Y",strtotime($bdd['reservation_date']));?></td>
                        <td><?=$bdd['heure_debut']?></td>
                        <td><?=$bdd['heure_fin']?></td>
                    </tr>
                    <?php
                    }
                    echo "</table>";
                }
                ?>
                    
                </div>
                <div class="level">
                        <div class="level-left"></div>
                        <div class="level-right">
                            <input class="button is-warning" type="submit" name="supprimer_resa" value="Supprimer">
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <?php
    require('../elements/footer.php');
    ?>

</body>

</html>