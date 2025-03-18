<?php
    $username = $_SESSION['username'];

    $sql = "SELECT * FROM profiles WHERE username = ?"; # sql-kommandot
    $stmt = $conn->prepare($sql);   # sql konverteras till c
    $stmt->execute([$username]);    # kör
    $result = $stmt->fetch(PDO::FETCH_ASSOC);  # data hämtas som assoc arr.
    $user_id = $result['id'];  # hämtar anv.id. för uppdatering
    
    if ($result['role'] == 3) {
        print("Hello, admin.");
    }

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
