<?php
if (isset($_POST['suppr_account'])) {
    $user_id=$_POST['delete_id'];
    $delete="DELETE FROM user WHERE user_id=$user_id";
    $dbh->query($delete);
}
if (isset($_POST['statut'])) {
    $user_id=$_POST['user_id'];
    $statut=$_POST['statut'];
    $update="UPDATE `user` SET `statut`='$statut' WHERE user_id = $user_id";
    $dbh->query($update);
}
?>
<div class="columns">
    <div class="column">
        <div class="box">
            <table class="table is-fullwidth">
                <tr>
                    <th>Utilisateur ID</th>
                    <th>Statut</th>
                    <th>Email</th>
                    <th>Mot de passe</th>
                    <th></th>
                </tr>
                <?php
                $requete = "SELECT * FROM user";
                $send = $dbh->query($requete);
                while ($bdd=$send->fetch(PDO::FETCH_ASSOC)) 
                {
                    ?>
                <tr>
                    <td><?=$bdd['user_id']?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" value="<?=$bdd['user_id']?>" name="user_id">
                            <select name="statut" onchange="this.form.submit()">
                                <option selected="selected"><?=$bdd['statut']?></option>
                                <?php
                                    if ($bdd['statut']=='admin') {
                                        echo "<option value=\"user\">user</option>";
                                    }else {
                                        echo "<option value=\"admin\">admin</option>";
                                    }
                                ?>
                            </select>
                        </form>
                    </td>
                    <td><?=$bdd['user_email']?></td>
                    <td><?=$bdd['user_password']?></td>
                    <td>
                        <form class="" action="" method="post">
                            <input type="hidden" name="delete_id" value="<?=$bdd['user_id']?>">
                            <button class="delete" onclick="return confirm('Etes vous sur ?')" type="submit" name="suppr_account"></button>
                        </form>
                    </td>
                </tr>

                <?php
                }
                
                ?>
            </table>
        </div>
    </div>
</div>