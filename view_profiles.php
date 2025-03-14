<h2>Annonser</h2>

<?php include "model_profiles.php" ?>

<?php
    # Visar upp alla användare
    foreach($stmt as $row) {
        ?>
        <h3> <?= $row['realname']; ?>s profil</h3>
        <p> <?= $row['bio']; ?> </p>

        <form action=index.php method=GET>
            <input type="button" name="like" class="likedislike like" value="Gilla">
            <input type="button" name="dislike" class="likedislike dislike" value="Ogilla">
    <!-- Klura ut hur raden nedan bidrar till att skicka likes/dislikes till rätt användare-->
            <input type="hidden" name="user_id" value="<?= $row['id'] ?>">
        </form>      
        <?php
    }