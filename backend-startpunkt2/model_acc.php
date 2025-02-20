<?php
    $_SESSION['username']="katajisc";   # hårdkodad, edit senare
    print("Welcome user" . $_SESSION['username']);  # hämta anvnamn

    $sql = "SELECT * FROM profiles WHERE username = ?"; # sql-kommandot
    $stmt = $conn->prepare($sql);   # sql konverteras till c
    $stmt->execute([$username]);    # kör
    $row = $stmt->fetch(PDO::FETCH_ASSOC);  # data hämtas som assoc array
    $user_id = $row['id'];  # hämtar anvid, väsentlig för  profiluppdatering
    print("Your user id is:" . $user_id);

    # uppdatera data i db:n

    if(!empty($_REQUEST['fullname']) && !empty($_REQUEST['bio'])) {
        $realname = test_input($_REQUEST['fullname']);
        $bio = test_input($_REQUEST['bio']);

        $sql = "UPDATE profiles SET realname = ?, bio = ? WHERE profiles.id = ?";
        $stmt = $conn->prepare($sql);   # 
        if($stmt->execute([$realname, $bio, $user_id])) {
            print("Your profile has been updated");
        }  
        else{
            print("Failed to execute update");
        }

    }
    
    # 2DO: check users' admin-status
