<h2> Mina kontaktuppgifter </h2>
<p> Här kan du editera din kontaktannons som <?= $_SESSION['username'] ?> </p>

<?php include "model_account.php" ?>

<form action="profile.php" method="GET" class="gen-form">
    Full name: <input type="text" name="fullname" value="<?= $result['realname'] ?>"> <br>
    Email: <input type="text" name="email" value="<?= $result['email'] ?>"> <br>
    Postnummer: <input type="text" name="zipcode" value="<?= $result['zipcode'] ?>"> <br>
    Månadslön: <input type="text" name="salary" value="<?= $result['salary'] ?>"> <br>
    &nbsp;
    Bio: <input type="text" name="bio" value="<?= $result['bio'] ?>" style="width:300px;"> <br>

    <input type="submit" value="Uppdatera" class="btn">
</form>


