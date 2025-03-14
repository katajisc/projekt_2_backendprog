<h2>Skapa en ny användare</h2>
<p>Här kan du registrera dig</p>

<!-- ÄNDRA GET till POST -->
<form action="login.php" method="GET">
    Användarnamn: <input type="text" name="username" placeholder="Max 30 tecken"><br>
    Namn: <input type="text" name="realname" placeholder="Förnamn Efternamn"><br>
    Epost: <input type="text" name="email"><br>
    Lösenord: <input type="password" name="password"><br>
    Postnummer: <input type="text" name="zipcode"><br>
    Månadslön: <input type="number" name="salary" min="0" max="10000000" placeholder="Ange lön i hela euron"><br>
    Preferens: <br>
    <div> 
      <input type="radio" name="preference" value="1">Män<br>
      <input type="radio" name="preference" value="2">Kvinnor<br>
      <input type="radio" name="preference" value="3">Båda<br>
      <input type="radio" name="preference" value="4">Vill inte säga<br>
    </div>
    Om mig: <br>
    <textarea name="bio" rows="5" columns="50" maxlength="255" placeholder="Här kan du berätta om dig själv i 255 tecken">
    </textarea> <br>

    <input type="submit" value="Registrera dig">
</form>

Har du redan ett konto? <a href="login.php"> Logga in </a>.

<?php include "model_register.php" ?>