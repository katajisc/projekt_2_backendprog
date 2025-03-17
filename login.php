<?php include "handy_methods.php" ?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day2Date</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div id="container">
        <?php include "header.php" ?>
        <section>

            <article>
                <?php 
                if(!empty($_REQUEST['state'])) {
                    include "./view_register.php";
                }
                else {
                    include "./view_login.php";
                } ?>
            </article>

        </section>

        <?php include "footer.php" ?>

    </div>
</body>

</html>