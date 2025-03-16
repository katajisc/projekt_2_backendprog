<?php

    $username = $_SESSION['username']; # Hämta anv.namn från inloggad klient
    print("Välkommen " . $_SESSION['username'] . "! <br>");

    $sql = "SELECT * FROM profiles WHERE username = ?"; # sql-kommandot
    $stmt = $conn->prepare($sql);   # sql konverteras till c
    $stmt->execute([$username]);    # kör
    $row = $stmt->fetch(PDO::FETCH_ASSOC);  # data hämtas som assoc arr
    $user_id = $row['id'];  # hämtar anv.id, möjliggör uppdatering
    print("Current user id: " . $user_id);

    # uppdatera data i db:n
    if(!empty($_REQUEST['fullname']) && !empty($_REQUEST['bio'])) {
        $realname = test_input($_REQUEST['fullname']);
        $bio = test_input($_REQUEST['bio']);

        $sql = "UPDATE profiles SET realname = ?, bio = ? WHERE profiles.id = ?";
        $stmt = $conn->prepare($sql); 
        # excute() returnerar boolean
        if($stmt->execute([$realname, $bio, $user_id])) {
            print("Din profil har uppdaterats.");
            header("Refresh:0; url=profile.php");
        }  
        else{
            print("Uppdatering misslykades.");
        }

    }
    
    # 2DO: check users' admin-status
