<?php include "handy_methods.php"?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day2Date</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div id="container">
        <?php include "header.php"?>
        <section>

            <article>
                <h2>Projektrapport 2</h2>
                <p>Kursen har som helhet varit givande, men svår
                   pga. personliga omständigheter. Jag har svårt att utvärdera vad som var bra eller dåligt med kursen eftersom jag alltid 
                    gått steget efter. Varje delmoment i kursprojektet har dock gett mig kunskap och en känsla
                    av lyckande när jag väl fått funktionerna implementerade och fungerande.
                    Jag fastnade alltför länge på hur man navigerar mellan login och registrering via vyer,
                    istället för separata sidor. Problemet var att när användaren registrerade sig så
                    skickades inte datan till DBn, och genast därpå skickades login-formuläret utan användarens
                    knapptryck. Jag grubblade över saken i en eftermiddag, varefter jag gav upp och skapade
                    separata sidor för respektive formulär.
                </p>
                <p>
                   Min estimerade arbetsinsats på Kursprojekt 2 är 18 timmar, varav 8 timmar gått åt till att
                   huvudsakligen koda. Resten av tiden har jag planerat, sökt information, löst problem och grubblat.</p>
                </p>

            </article>

        </section>

        <?php include "footer.php"?>
    </div>
</body>

</html>