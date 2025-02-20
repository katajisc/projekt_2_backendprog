<h2> Kontaktuppgifter </h2>
<p> Här kan du redigera din kontaktannons, <?= $_SESSION['username'] ?> </p>

<?php include "model_account" ?>

<form action="profile.php" method="GET">
    Full name: <input type="text" name="fullname" value="<?= $row['realname'] ?>"> <br>
    Bio: <input type="text" name="bio" value="<?= $row['bio'] ?>"> <br>
    <input type="submit" value="Update">
</form>