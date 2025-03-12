<h2>Annonser</h2>
<p>Följande annonser finns på dejtingsajten</p>

<?php include "model_profiles.php" ?>
<?php print_r($result); ?>

<?php
    # Visar upp alla användare
    foreach($stmt as $row) {
        print("<h3>" . $row['realname'] . "</h3>");
        print("<p>" . $row['bio'] . "</p>");
    }