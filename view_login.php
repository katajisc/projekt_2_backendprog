<h2>Logga in</h2>

<form action="login.php" method="GET">
    Användarnamn: <input type="text" name="username"> <br>
    Lösenord: <input type="password" name="password"> <br>
    <input type="hidden" namn="state" value="login"> <br>
    <input type="submit" value="Logga in">
</form>
Behöver du ett konto? 
<a href="./login.php?state='register'"> Du kan registrera dig här.</a>

<?php 
include "model_login.php"; ?>