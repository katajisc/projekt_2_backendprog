<?php
// Kolla att man skickat data
if (!empty($_REQUEST['username']) && !empty($_REQUEST['email'])) {

    $username = test_input($_REQUEST['username']); // JS protection
    $email = test_input($_REQUEST['email']);
    $password = test_input($_REQUEST['password']);
    $passhash = password_hash($password, PASSWORD_DEFAULT);
    $realname = "asd"; $zipcode = "00420"; $bio = "Jag är sämst";
    $salary = 3; $preference = 2; $likes = 15; $role = 1;

    // Användarinmatning är skadlig också för databasen - ENBART PREPARED STATEMENTS med ? placeholders
    $sql = "INSERT INTO profiles (id, username, realname, passhash, zipcode, bio, salary, preference, email, likes, role) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

    $stmt = $conn->prepare($sql); // Körs på DBMS "konvertera sql till maskinkod/C-kod där SQL-användarnamn är ofarlig
    if ($stmt->execute([$username, $realname, $passhash, $zipcode, $bio, $salary, $preference, $email, $likes, $role])) {
        print("Registerad!");
    } else {
        print("Något fel med exekvering av sql");
    }

}