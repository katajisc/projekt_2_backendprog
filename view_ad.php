<?php include "model_ad.php"?>

<h3><?= $result['realname'] ?> <br>
<?= $result['username'] ?></h3>
<h4>Kontakt</h4>
<p id="contact"> 
    Email: <?= $result['email'] ?> <br>
    Postnummer: <?= $result['zipcode'] ?> <br>
    Månadslön: <?= $result['salary'] ?> <br>
</p>
<h4> Om mig </h4>
<p> <?= $result['bio'] ?> </p>


<?php # Kunde förflyttas till model_view_admin
    if ($_SESSION['role'] == 3) {
        print("<a href='remove.php?profile=" . $result['username'] . "'>Radera profil</a>");
    } ?>

<p>Kommentera:
    <form action="index.php" method="GET">
        <input type="text" name="w_comment">
        <input type="hidden" name="profile" value="<?=$result['username']?>">
        <input type="submit" value="Sänd" class="btn">
    </form>
</p>