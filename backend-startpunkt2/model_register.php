<?php
# Se om data skickats
if (!empty($_REQUEST['username']) && !empty($_REQUEST['email'])) {

    $username = test_input($_REQUEST['username']);
    $realname = test_input($_REQUEST['realname']);
    $email = test_input($_REQUEST['email']);
    $passhash = test_input($_REQUEST['password']);
    $zipcode = test_input($_REQUEST['zipcode']);
    $salary = test_input($_REQUEST['salary']);
    $preference = test_input($_REQUEST['preference']);
    $bio = test_input($_REQUEST['bio']);
    $likes = 0;
    $role = 1;

    #$passhash = password_hash($password, PASSWORD_DEFAULT);
    #$realname = "Jane Doe"; $passhash = "abc123"; $zipcode = "00001"; $bio = "Jane Doe is a common placeholder name for unidentified female persons."; $salary = 0; $preference = 1; $likes = 0; $role = 1;

    # Obs! Anv.inmatning kan skada databasen. Använd endast PREPARED STATEMENTS med ? placeholders
    $sql = "INSERT INTO profiles (id, username, realname, passhash, zipcode, bio, salary, preference, email, likes, role) 
    VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    
    # Körs på DBMS "konvertera sql till "C" där SQL-anv.namn "neutraliseras"
    $stmt = $conn->prepare($sql); 
    if ($stmt->execute([$username, $realname, $passhash, $zipcode, $bio, $salary, $preference, $email, $likes, $role])) {
        print("Registeringen lyckades!");
    } else {
        print("Registrering misslyckades. Något gick fel med exekvering av sql.");
    }

}