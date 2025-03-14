<header>
    <!-- Logo och meny i headern -->
    <img src="./media/logga_mod.png" alt="Website logo" />
    <div id="logo">Day2Date</div>

    <nav>
        <!-- Huvudmenyn -->
        <ul>
            <li><a href="./#/">Home</a></li>
            <li><a href="./viev_profiles.php/">Annonser?</a></li>
            <li><a href="./rapport/">Rapport</a></li>
            <?php
            // Hälsa på återkommande användare
            if (isset($_SESSION['username'])) {
                //print("Välkommen tillbaka ". $_SESSION['username']);
                print("<li><a href='./profile.php'>". $_SESSION['username']."s profil</a></li>");
            }
            else {
                print("<li><a href='./login.php'> Login </a></li>");
            }
?>
        </ul>
    </nav>
</header>