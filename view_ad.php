<?php include "model_ad.php"?>

<h3><?= $result['username'] ?></h3>
<p> <?= $result['bio'] ?> </p>

<?php # Kunde förflyttas till model_view_admin
    if ($_SESSION['role'] == 3) {
        print("<a href='remove.php?profile=" . $result['username'] . "'>Radera profil</a>");
    } ?>

<p>Kommentera:
    <form action="index.php" method="GET">
        <input type="text" name="w_comment">
        <input type="hidden" name="profile" value="<?=$result['username']?>">
        <input type="submit" value="Sänd">
    </form>
</p>

