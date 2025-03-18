<?php

# check if sent data
if (!empty($_REQUEST['username']) && !empty($_REQUEST['password'])) {

    $username = test_input($_REQUEST['username']);
    $password = test_input($_REQUEST['password']);
    $passhash = password_hash($password, PASSWORD_DEFAULT);

    $sql = "SELECT id, username, passhash, `role` FROM profiles WHERE username = ? AND passhash = ?";
    $stmt = $conn->prepare($sql); 
    if ($stmt->execute([$username, $passhash])) { 
        # IMPL. PASSHASH-CHECK
        print("Inloggning lyckades! Förflyttas till profilsidan...");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['username'] = $username;
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        header("Refresh:2; url=profile.php");
    } else {
        print("Inloggning misslyckades :(");
    }

}