<?php include "model_comments.php" ?>

<?php
    foreach($stmt as $row) {
        ?>
        <p>
            <strong>från <?= $row['sender']; ?></strong> <br>
            <?= $row['comment']; ?> 
        </p> 
    <?php
    } 