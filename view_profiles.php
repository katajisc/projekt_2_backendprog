<h2 id="greet">Välkommen till Day2Date - Dags att dejta!</h2>
<h2>Annonser</h2>

<?php include "model_profiles.php" ?>

<?php
    foreach($stmt as $result) { ?>

   
        <!-- Admin-funktionalitet - tips --> 
        <?php   
            if(!empty($_SESSION['role']) && $_SESSION['role'] == 3) {
                print("<span> <a href='edit.php?profile=".$result['id']."'> Edit </a></span>");
            } ?>

        <a href="./index.php?profile=<?= $result['username'] ?>"> 
            <div class="card">
                <article>
                    <h3><?= $result['username']; ?></h3>
                    <p> <?= $result['bio']; ?> </p> 
                
        </a>    
                    <button name="like" id="like" value="<?= $result['username'] ?>">Gilla</button>
                    <button name="dislike" id="dislike" value="<?= $result['username'] ?>">Ogilla</button> <br>
                </article>
            </div>
                <!-- <input type="hidden" name="user_id" value="<?#= $result['id'] ?>"> -->    
        <?php
    }