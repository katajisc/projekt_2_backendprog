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
                <h2>Välkommen till Day2Date - Dags att dejta!</h2>
                <?php if(!empty($_REQUEST['profile'])) {
                    include "./view_ad.php";    # se spec. profil
                }
                else {
                    include "./view_profiles.php";  # se alla profiler
                } ?>
            </article>

        </section>

        <?php include "footer.php" ?>
    </div>
</body>

</html>