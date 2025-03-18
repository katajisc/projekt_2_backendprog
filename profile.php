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
                <h2>Profilsidan</h2>
                <?php include "view_account.php" ?>
            </article>
            <article>
                <h3>Kommentarer</h3>
                <?php include "view_comments.php" ?>
            </article>

            <button>
                <a href="model_logout.php">Logga ut</a>
            </button>
        </section>

        <?php include "footer.php" ?>
    </div>
</body>

</html>