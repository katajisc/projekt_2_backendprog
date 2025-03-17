<h2>Annonser</h2>

<?php include "model_profiles.php" ?>

<?php
    foreach($stmt as $row) { ?>
        <h3> <?= $row['realname']; ?>s profil</h3>
        <p> <?= $row['bio']; ?> </p> <br>
            
        <!-- Admin-funktionalitet - tips --> 
        <?php   
            if(!empty($_SESSION['role']) && $_SESSION['role'] == 3) {
                print("<span> <a href='edit.php?profile=".$row['id']."'> Edit </a></span>");
            } ?>

        <!-- 2do: flytta kommentarsfunk. till egen vy & modell -->
            <p>
                Kommentera:
                <form action="index.php" method="POST">
                <input type="text" name="w_comment" >
                <input type="submit" name="s_comment" value="Sänd">
                </form>
            </p>

            <form action=index.php method=POST>
                <input type="button" name="like" class="likedislike like" value="Gilla">
                <input type="button" name="dislike" class="likedislike dislike" value="Ogilla">
        <!-- Klura ut hur raden nedan bidrar till att skicka likes/dislikes till rätt användare
                <input type="hidden" name="user_id" value="<?#= $row['id'] ?>">
                -->
            </form>      
        <?php
    }