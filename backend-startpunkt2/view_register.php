<h2>Registeringsvyn</h2>
<p>Här kan du registrera dig</p>

<form action="login.php" method="POST">
    Användarnamn: <input type="text" name="username"><br>
    Epost: <input type="text" name="email"><br>
    Lösenord: <input type="password" name="password">
    <!-- Läxa: Slutför registeringsformuläret -->
    <input type="submit" value="Registrera dig">
</form>

Har du redan ett konto? <a href="login.php">Logga in här</a>

<?php include "model_register.php" ?>