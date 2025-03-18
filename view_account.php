<h2> Mina kontaktuppgifter </h2>
<p> Här kan du editera din kontaktannons som <?= $_SESSION['username'] ?> </p>

<?php include "model_account.php" ?>

<form action="profile.php" method="GET">
    Full name: <input type="text" name="fullname" value="<?= $result['realname'] ?>"> <br>
    Bio: <input type="text" name="bio" value="<?= $result['bio'] ?>" style="width:300px;"> <br>
    <input type="submit" value="Uppdatera">
</form>

