<header>
    <!-- LOGGA, NAV -->
    <img src="./media/logga_mod.png" alt="Website logo" />
    <div id="logo">Day2Date</div>

    <nav>
        <ul>
            <li><a href="./index.php">Home</a></li>
            <?php if (isset($_SESSION['username'])) {
                print("<li><a href='./profile.php'>". $_SESSION['username']."s profil</a></li>");
                # print("Välkommen tillbaka ". $_SESSION['username']);
            }
            else {
                print("<li><a href='./login.php'> Login </a></li>");
            } ?>
            <li><a href="./rapport.php">Rapport</a></li>
        </ul>
    </nav>
</header>