<header>
    <!-- Logo och meny i headern -->
    <img src="./media/logo.svg" alt="Website logo" />
    <div id="logo">Day2Date</div>

    <nav>
        <!-- Huvudmenyn -->
        <ul>
            <li><a href="./home/">Home</a></li>
            <li><a href="./projekt1/">Projekt 1</a></li>
            <li><a href="./viev_profiles.php">Profiles</a></li>
            <li><a href="./rapport/">Rapport</a></li>
            <?php
            // Hälsa på återkommande användare
            if (isset($_SESSION['username'])) {
                //print("Välkommen tillbaka ". $_SESSION['username']);
                print("<li><a href='./profile.php'>". $_SESSION['username']."'s profile</a></li>");
            }
            ?>
        </ul>
    </nav>
</header>