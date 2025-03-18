<?php

# Se om data skickats
if (!empty($_REQUEST['username']) && !empty($_REQUEST['email'])) {

    $username = test_input($_REQUEST['username']);
    $realname = test_input($_REQUEST['realname']);
    $email = test_input($_REQUEST['email']);
    $password = test_input($_REQUEST['password']);
    $passhash = password_hash($password, PASSWORD_DEFAULT);
    $zipcode = test_input($_REQUEST['zipcode']);
    $salary = test_input($_REQUEST['salary']);
    $preference = test_input($_REQUEST['preference']);
    $bio = test_input($_REQUEST['bio']);
    $likes = 0;
    $role = 1;


    # Använd endast PREPARED STATEMENTS med ? ph:s
    $sql = "INSERT INTO profiles (id, username, realname, passhash, zipcode, bio, salary, preference, email, likes, role) 
    VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";
    
    # Körs på DBMS "konvertera sql till "C" där SQL-anv.namn "neutraliseras"
    $stmt = $conn->prepare($sql); 
    if ($stmt->execute([$username, $realname, $passhash, $zipcode, $bio, $salary, $preference, $email, $likes, $role])) {
        print("Registeringen lyckades!");
        header("Refresh:2; url=profile.php");

    } else {
        print("Registrering misslyckades. Något gick fel med exekvering av sql.");
    }

}